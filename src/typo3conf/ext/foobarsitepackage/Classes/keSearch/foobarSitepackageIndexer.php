<?php
// set you own vendor name adjust the extension name part of the namespace to your extension key
namespace FooBar\foobarSitePackage\keSearch;


use FooBar\foobarSitePackage\Config\elementconfig;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarSitePackage;
use TeaminmediasPluswerk\KeSearch\Lib\Db;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

// set you own class name
class foobarSitepackageIndexer
{

    // Set a key for your indexer configuration.
    // Add this in Configuration/TCA/Overrides/tx_kesearch_indexerconfig.php, too!
    protected $indexerConfigurationKey = 'customindexer';

    /**
     * Adds the custom indexer to the TCA of indexer configurations, so that
     * it's selectable in the backend as an indexer type when you create a
     * new indexer configuration.
     *
     * @param array $params
     * @param type $pObj
     */
    public function registerIndexerConfiguration(&$params, $pObj)
    {
        // Set a name and an icon for your indexer.
        $customIndexer = array(
            '[CUSTOM] News-Indexer (ext:foobarSitePackage)',
            $this->indexerConfigurationKey,
            ExtensionManagementUtility::extPath('foobarsitepackage') . 'customnews-indexer-icon.gif'
        );
        $params['items'][] = $customIndexer;
    }


    /**
     * Custom indexer for ke_search
     *
     * @param   array $indexerConfig Configuration from TYPO3 Backend
     * @param   array $indexerObject Reference to indexer class.
     * @return  string Message containing indexed elements
     * @author  Christian Buelter <christian.buelter@pluswerk.ag>
     */
    public function customIndexer(&$indexerConfig, &$indexerObject)
    {
        global $GLOBALS;

        if ($indexerConfig['type'] == $this->indexerConfigurationKey) {

        $arrFields = (new foobarSitePackage())->getAllFields([fieldconfig::FILETYPE_TEXT,fieldconfig::FILETYPE_TEXTMULTILINE,fieldconfig::FILETYPE_RICHTEXT]);

        $contenttypes = '';
        $objElements = (new foobarSitePackage())->getElements()->getElementConfig();

        if(is_array($objElements)) foreach ($objElements as $elements){
            $arrElementsConfig = $elements->getElementConfig();

            foreach ($arrElementsConfig as $objElement){
                if($objElement instanceof elementconfig){
                    if(trim($contenttypes)!==''){
                        $contenttypes .= ', ';
                    }
                    $contenttypes .= $objElement->getItemName();
                }
            }
        }


        $indexerConfig['contenttypes'] = $contenttypes;
        $indexerConfig['index_page_doctypes'] = 0;
        $indexerConfig['startingpoints_recursive'] = 1;

        $arrCols = [];

        foreach ($arrFields[foobarSitePackage::TABLE_TXFOOBARSITE] as $objField){
            if($objField instanceof fieldconfig){
                if($objField->getNoIndex()!==true) {
                    $arrCols[$objField->getColumn()] = true;
                }
            }
        }

        $fields = [];
        $sqlFields[] = 'crdate';
        $sqlFields[] = 'uid';
        $sqlFields[] = 'pid';
        $sqlFields[] = 'sys_language_uid';
        $sqlFields[] = 'starttime';
        $sqlFields[] = 'endtime';
        $sqlFields[] = 'fe_group';
        $sqlFields[] = 'elemtype';


        foreach ($arrCols as $col=>$status){
            $fields[] = $col;
            $sqlFields[] = $col;
        }

            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable(foobarSitePackage::TABLE_TXFOOBARSITE);

            //DebugUtility::debug($indexerConfig);

            $queryBuilder->select(...$sqlFields)
                ->from(foobarSitePackage::TABLE_TXFOOBARSITE)
                ->where('hidden = 0 AND deleted = 0');

            $statement = $queryBuilder->execute();

            $arrIndex = [];

            // Loop through the records and write them to the index.
                while ($record = $statement->fetch(\PDO::FETCH_ASSOC)) {

                    // compile the information which should go into the index
                    // the field names depend on the table you want to index!

                    foreach ($fields as $col){
                        ${'res'.$col} = strip_tags($record[$col]);
                    }

                    $fullContent = '';
                    foreach ($fields as $col){
                        if(trim($fullContent)!==''){
                            $fullContent .= "\n";
                        }

                        $fullContent .= ${'res'.$col};
                    }

                    if(trim($fullContent)!=='') {

                        $additionalFields = array(
                            'sortdate' => $record['crdate'],
                            'orig_uid' => $record['uid'],
                            'orig_pid' => $record['pid']
                        );

                        if(!isset($arrIndex[$record['pid']])){
                            $arrIndex[$record['pid']] = [];
                            $arrIndex[$record['pid']]['content'] = '';
                            $arrIndex[$record['pid']]['tags'] = '';
                            $arrIndex[$record['pid']]['params'] = '';
                            $arrIndex[$record['pid']]['abstract'] = '';
                            $arrIndex[$record['pid']]['addFields'] = $additionalFields;

                            $arrIndex[$record['pid']]['sys_language_uid'] = $record['sys_language_uid'];
                            $arrIndex[$record['pid']]['starttime'] = $record['starttime'];
                            $arrIndex[$record['pid']]['endtime'] = $record['endtime'];
                            $arrIndex[$record['pid']]['fe_group'] = $record['fe_group'];

                        }

                        $arrIndex[$record['pid']]['content'] .= $fullContent;
                        //$arrIndex[$record['pid']]['tags'] .= ' #'.$record['elemtype'].$record['uid'];

                        // Link to detail view
                        $params = '';
                        //$params = '&tx_news_pi1[news]=' . $record['uid']
                        //    . '&tx_news_pi1[controller]=News&tx_news_pi1[action]=detail';


                        // Additional information

                    }
                }



            $counter = 0;
            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('pages');

            $content = '';

            foreach ($arrIndex as $pId=>$arrEntry){
                    $queryBuilder->select('*')
                        ->from('pages')
                        ->where('uid='.$pId);

                    $statement = $queryBuilder->execute();
                    $pageRecord = $statement->fetch(\PDO::FETCH_ASSOC);
                    $title = $pageRecord['title'];

                    //DebugUtility::debug($arrEntry);

                    $indexerObject->storeInIndex(
                        $indexerConfig['storagepid'],   // storage PID
                        $title,                         // record title
                        $this->indexerConfigurationKey, // content type
                        $pId,                           // target PID: where is the single view?
                        $arrEntry['content'],           // indexed content, includes the title (linebreak after title)
                        $arrEntry['tags'],              // tags for faceted search
                        $arrEntry['params'],            // typolink params for singleview
                        $arrEntry['abstract'],          // abstract; shown in result list if not empty
                        $arrEntry['sys_language_uid'],  // language uid
                        0,                              // starttime
                        0,                              // endtime
                        $arrEntry['fe_group'],          // fe_group
                        false,                          // debug only?
                        $arrEntry['addFields']          // additionalFields
                    );
                    $counter++;

                }

                $content =
                    '<p><b>Custom Indexer "'
                    . $indexerConfig['title'] . '": ' . $counter
                    . ' Elements have been indexed.</b></p>';
            }

            return $content;
    }

}
