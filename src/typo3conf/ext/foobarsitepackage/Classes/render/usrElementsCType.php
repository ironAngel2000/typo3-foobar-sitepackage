<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 06.03.2019
 * Time: 09:23
 */

namespace FooBar\foobarSitePackage\Processor;

use FooBar\foobarSitePackage\foobarsitepackage;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;

class usrElementsCType extends AbstractFormElement
{
    /**
     * This method renders a user-defined field
     *
     * @return array
     */
    public function render()
    {

        // Custom TCA properties and other data can be found in $this->data, for example the above
        // parameters are available in $this->data['parameterArray']['fieldConf']['config']['parameters']


        $aktId = $this->data['databaseRow']['uid'];
        $parentId = (int) $this->data['databaseRow']['tt_content'];

        if($parentId == 0){
            $parentId = $this->data['inlineParentUid'];
        }

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tt_content');
        $statement = $queryBuilder
            ->select('CType')
            ->from('tt_content')
            ->where(
                $queryBuilder->expr()->eq('tt_content.uid', $parentId)
            )
            ->orderBy('colPos')
            ->orderBy('sorting')
            ->execute();

        $Ctype = $statement->fetchColumn(0);

        $result = $this->initializeResultArray();
        $result['html'] = '<input type="hidden" name="data['.foobarsitepackage::TABLE_TXFOOBARSITE.']['.$aktId.'][elemtype]" value="'.$Ctype.'" />';

        return $result;

    }


}

