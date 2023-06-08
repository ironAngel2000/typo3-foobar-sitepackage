<?php

/**
 * Created by PhpStorm.
 * User: bw
 * Date: 28.02.2019
 * Time: 16:26
 */

namespace  FooBar\foobarSitePackage\Processor;

use FooBar\foobarSitePackage\foobarsitepackage;
use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elementconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\Config\palettconfig;
use FooBar\foobarSitePackage\keSearch\foobarSitepackageIndexer;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class usrFormRender implements DataProcessorInterface
{

    /**
     * Primäre Renderklasse wird vor Ausgabe Fluid gerendert
     * Daten in die Arrays Main und Sub rendern
     *
     * @param ContentObjectRenderer $cObj
     * @param array $contentObjectConfiguration
     * @param array $processorConfiguration
     * @param array $processedData
     * @return array
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    )
    {

        $elements = (new foobarsitepackage())->getElements();

        $processedData['pConf'] = $contentObjectConfiguration;

        if(is_array($elements)) foreach ($elements as $objElement){
            if($objElement instanceof elements) {
                $objConfig = $objElement->getElementConfig($processorConfiguration['useHere']);

                if($objConfig instanceof elementconfig){
                    $arrRenderData = $this->renderElementData($objConfig, $processedData);

                    if($objConfig->getEnablePageContent(foobarsitepackage::TABLE_TTCONTENT)){
                        $arrRenderData['main']['newsnavigation'] = $processedData['newsnavigation'];
                    }

                    $processedData['main'] = $arrRenderData['main'];
                    $processedData['sub'] = $arrRenderData['sub'];
                }

            } // if($elements instanceof elements)
        }

        return $processedData;

    }

    protected function getElementFields(elementconfig $element)
    {
        $arrPaletten = $element->getPaletten();

        $ret = [];

        if(count($arrPaletten)){

            foreach ($arrPaletten as $objPalette) {

                if ($objPalette instanceof palettconfig) {

                    $aktTable = $objPalette->getTable();

                    $arrRows = $objPalette->getFields();

                    if(is_array($arrRows)){

                        foreach ($arrRows as $arrFields){

                            if(is_array($arrFields)){

                                foreach ($arrFields as $objField){

                                    $ret[$aktTable][] = $objField;

                                } //foreach ($arrFields as $objField)

                            } // if(is_array($arrFields))

                        } //foreach ($arrRows as $arrFields)

                    } //if(is_array($arrRows))

                } //if ($objPalette instanceof palettconfig)

            } //foreach ($arrPaletten as $objPalette)

        } //if(count($arrPaletten))
        return $ret;
    }

    protected function renderElementData(elementconfig $elementconfig, $processedData)
    {
        $arrConfFields = $this->getElementFields($elementconfig);

        $ret = [];
        $main = [];
        $sub = [];


        if(is_array($arrConfFields)){

            foreach ($arrConfFields as $table=>$arrFields){
                switch ($table){
                    case foobarsitepackage::TABLE_TTCONTENT:
                        $main = $this->mergeDataToFields($processedData, $arrFields);
                        $main['uid'] = $processedData['data']['uid'];

                        if( $elementconfig->getEnabledCategory(foobarsitepackage::TABLE_TTCONTENT)){
                            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('sys_category_record_mm');
                            $queryBuilder->select('uid_local','uid_foreign','sys_category.uid','sys_category.title','sys_category.parent')
                                ->from('sys_category_record_mm')
                                ->join('sys_category_record_mm',
                                    'sys_category',
                                    'sys_category',
                                    $queryBuilder->expr()->eq(
                                        'sys_category_record_mm.uid_local',
                                        $queryBuilder->quoteIdentifier('sys_category.uid')))
                                ->where('sys_category_record_mm.tablenames = "'.foobarsitepackage::TABLE_TTCONTENT.'"
                                                AND
                                                sys_category_record_mm.fieldname = "categories"
                                                AND
                                                sys_category_record_mm.uid_foreign='.$processedData['data']['uid'].'
                                                AND
                                                sys_category.sys_language_uid='.$processedData['data']['sys_language_uid'].'')
                                        ->addOrderBy('sys_category.parent')
                                ->addOrderBy('sys_category.title');

                            //DebugUtility::debug($queryBuilder->getSql());

                            $statement = $queryBuilder->execute();

                            $main['categories'] = [];

                            while ($record = $statement->fetch(\PDO::FETCH_ASSOC)) {
                                $main['categories'][] = $record;
                            }
                        }

                        break;
                    case foobarsitepackage::TABLE_TXFOOBARSITE:
                        if(is_array($processedData['records'])){

                            foreach ($processedData['records'] as $rKey=>$arrRecord){
                                $sub[$rKey] = $this->mergeDataToFields($arrRecord, $arrFields);
                                $sub[$rKey]['uid'] = $arrRecord['data']['uid'];

                                if( $elementconfig->getEnabledCategory(foobarsitepackage::TABLE_TXFOOBARSITE)){

                                    $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('sys_category_record_mm');
                                    $queryBuilder->select('uid_local','uid_foreign','sys_category.uid','sys_category.title','sys_category.parent')
                                        ->from('sys_category_record_mm')
                                        ->rightjoin('sys_category_record_mm',
                                            'sys_category',
                                            'sys_category',
                                            $queryBuilder->expr()->eq(
                                                'sys_category_record_mm.uid_local',
                                                $queryBuilder->quoteIdentifier('sys_category.uid')))
                                        ->where('sys_category_record_mm.tablenames = "'.foobarsitepackage::TABLE_TXFOOBARSITE.'"
                                                AND
                                                sys_category_record_mm.fieldname = "categories"
                                                AND
                                                sys_category_record_mm.uid_foreign='.$sub[$rKey]['uid'].'')
                                        ->addOrderBy('sys_category.parent')
                                        ->addOrderBy('sys_category.title');

                                    //DebugUtility::debug($queryBuilder->getSql());

                                    $statement = $queryBuilder->execute();

                                    $sub[$rKey]['categories'] = [];

                                    while ($record = $statement->fetch(\PDO::FETCH_ASSOC)) {
                                        $sub[$rKey]['categories'][] = $record;
                                    }
                                }

                            } //foreach ($processedData['records'] as $rKey=>$arrRecord)

                        } //if(is_array($processedData['records']))


                        break;

                } //switch ($table)

            } //foreach ($arrConfFields as $table=>$arrFields)

        } //if(is_array($arrConfFields))

        $ret['main'] = $main;
        $ret['sub'] = $sub;

        return $ret;

    }

    protected function mergeDataToFields($arrData, $arrFields)
    {
        $ret = [];

        if(is_array($arrFields)){


            foreach ($arrFields as $objField) {

                if ($objField instanceof fieldconfig) {

                    $ret[$objField->getColumn(true)] = $arrData['data'][$objField->getColumn()];

                    switch ($objField->getType()) {
                        case fieldconfig::FILETYPE_MEDIA:
                        case fieldconfig::FILETYPE_FILELINK:

                            if(isset($arrData['data']['_LOCALIZED_UID'])) {
                                $fileRepository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(FileRepository::class);
                                $arrData['refImg_' . $objField->getColumn()] = $fileRepository->findByRelation($objField->getTable(), $objField->getColumn(), $arrData['data']['_LOCALIZED_UID']);
                            }
                            elseif(!isset($arrData['refImg_' . $objField->getColumn()])){

                                $fileRepository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(FileRepository::class);
                                $arrData['refImg_' . $objField->getColumn()] = $fileRepository->findByRelation($objField->getTable(), $objField->getColumn(), $arrData['data']['uid']);
                            }

                            $ret[$objField->getColumn(true)] = $arrData['refImg_' . $objField->getColumn()];
                            $ret[$objField->getColumn(true)]['variants'] = $objField->getCropVariants();

                            foreach ($arrData['refImg_' . $objField->getColumn()] as $key=>$objResource){
                                if($objResource instanceof \TYPO3\CMS\Core\Resource\FileReference) {
                                    $arrVals = $objResource->toArray();
                                    //DebugUtility::debug($arrVals);
                                    $url = $arrVals['url'];

                                    if(is_file($url)){
                                        $size = getimagesize($url);

                                        $ret[$objField->getColumn(true)]['url'][$key] = $url;
                                        $ret[$objField->getColumn(true)]['size'][$key] = $size;
                                    }
                                    elseif($arrVals['mimetype']=='video/vimeo'){
                                        $ret[$objField->getColumn(true)]['url'][$key] = str_replace('https://vimeo.com/','',$url);
                                        $ret[$objField->getColumn(true)]['type'][$key] = 'video/vimeo';
                                        $ret[$objField->getColumn(true)]['size'][$key] = null;
                                    }
                                    elseif($arrVals['mimetype']=='video/youtube'){
                                        $url = explode('?',$url)[1];
                                        $arrUrl = explode('&',$url);
                                        foreach($arrUrl as $segment){
                                            $arrSegment = explode('=',$segment);
                                            if(trim($arrSegment[0])==='v'){
                                                $url = $arrSegment[1];
                                                break;
                                            }
                                        }
                                        $ret[$objField->getColumn(true)]['url'][$key] = str_replace('https://vimeo.com/','',$url);
                                        $ret[$objField->getColumn(true)]['type'][$key] = 'video/youtube';
                                        $ret[$objField->getColumn(true)]['size'][$key] = null;
                                    }

                                    if(isset($arrVals['link']) && trim($arrVals['link'])!=='') {
                                        $ret[$objField->getColumn(true)]['filelink'][$key] = trim($arrVals['link']);
                                    }

                                    if(isset($arrVals['title']) && trim($arrVals['title'])!=='') {
                                        $ret[$objField->getColumn(true)]['filetitle'][$key] = trim($arrVals['title']);
                                    }

                                    if(isset($arrVals['alternative']) && trim($arrVals['alternative'])!=='') {
                                        $ret[$objField->getColumn(true)]['filealternative'][$key] = trim($arrVals['alternative']);
                                    }

                                    if(isset($arrVals['description']) && trim($arrVals['description'])!=='') {
                                        $ret[$objField->getColumn(true)]['filedescription'][$key] = trim($arrVals['description']);
                                    }
                                    
                                    if(isset($arrVals['crop']) && trim($arrVals['crop'])!=='') {
                                        $cropString = trim($arrVals['crop']);
                                        $ret[$objField->getColumn(true)]['crop'][$key] = json_decode($cropString,true);
                                    }

                                }
                            }
                            break;
                        case fieldconfig::FILETYPE_USERSUBLIST:

                            $arrRef = $arrData['refData_' . $objField->getColumn()];
                            if(is_array($arrRef)){

                                $refElement = $objField->getRefElement();

                                if($refElement instanceof elementconfig){


                                    $ret[$objField->getColumn(true)] = [];
                                    foreach ($arrRef as $arrRefData){
                                        $arrRenderData = $this->renderElementData($refElement,$arrRefData);

                                        $ret[$objField->getColumn(true)][] = $arrRenderData;

                                    }


                                } //if($refElement instanceof elementconfig)

                            } //if(is_array($arrRef))

                            break;
                        case fieldconfig::FILETYPE_FORMULARLINK:

                            $arrRef = $arrData['refData_' . $objField->getColumn()];
                            if(is_array($arrRef)){
                                    $ret[$objField->getColumn(true)] = $arrRef[0];
                            } //if(is_array($arrRef))

                            break;
                    } //switch ($objField->getType())

                } //if($objField instanceof fieldconfig)

            } //foreach ($arrFields as $objField)

        } //if(is_array($arrFields))
        return $ret;
    }
}


