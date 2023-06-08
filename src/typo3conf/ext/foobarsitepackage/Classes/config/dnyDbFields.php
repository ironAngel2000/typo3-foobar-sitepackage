<?php

namespace FooBar\foobarSitePackage\Config;

use FooBar\foobarSitePackage\foobarsitepackage;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

final class dnyDbFields
{

    public static $arrElementDbFields = [];

    protected static $arrFieldConfiguration = [];

    protected static $configFile = 'fieldConfig.json';
    
    private function __construct()
    {
    }

    
    public static function setDbFields(elements $objElement)
    {
        self::readFieldConfig();

        $elemConfig = $objElement->getElementConfig();

        if(is_array($elemConfig)) foreach ( $elemConfig as &$configElement){

            $elementName = $configElement->getItemName();

            foreach($configElement->getPaletten() as $objPalette) {

                if ($objPalette instanceof palettconfig) {
                    foreach ($objPalette->getFields() as $arrFields) {
                        foreach ($arrFields as $objField) {
                            if ($objField instanceof fieldconfig) {
                                self::setConfigMd5($objField);
                                self::setElementMd5($objField, $elementName);

                                self::setDbColumn($objField, $elementName);

                                self::setObjFldSqlStatement($objField);

                                if($objField->isNoSqlExport()===false){
                                    self::$arrElementDbFields[$objField->getTable()][$objField->getMd5Konfig()] = [$objField->getColumn(), $objField->getDbColumnSql(), $objField->getLabel(),$objField->getMd5Element()];
                                }

                            } //endif $objField instanceof fieldconfig
                        }//endforeach
                    }//endforeach
                }//endif $objPalette instanceof palettconfig
            } // endforeach
        } // endif is_array($elemConfig endforeach
    }

    protected static function readFieldConfig($readForce = false)
    {
        if(count(self::$arrFieldConfiguration) > 0 && !$readForce) {
            return;
        }

        $confFile = foobarsitepackage::$configurationDirectory.self::$configFile;
        if(!is_file($confFile)) {
            return;
        }

        $fileDump = file_get_contents($confFile);
        self::$arrFieldConfiguration = json_decode($fileDump, true);

        return;
    }

    protected static function writeFieldConfig()
    {
        $confFile = foobarsitepackage::$configurationDirectory.self::$configFile;

        file_put_contents($confFile,json_encode(self::$arrFieldConfiguration), LOCK_EX);

        self::readFieldConfig(true);       

    }

    protected static function setConfigMd5(fieldconfig $objField)
    {
        $colname = $objField->getLabel();
        $table = $objField->getTable();

        if(!isset($elemCount[$table])){
            $elemCount[$table] = 0;
        }

        $elemCount[$table]++;

        $fieldkey = $colname.$objField->getType();

        if($objField->getCropSize()){
            $fieldkey .= md5(json_encode($objField->getCropSize()));
        }
        if($objField->getRenderWidth() ){
            $fieldkey .= md5(json_encode($objField->getRenderWidth()));
        }
        if($objField->getUsrConfig()){
            $fieldkey .= md5(json_encode($objField->getUsrConfig()));
        }
        if($objField->getOptions()){
            $fieldkey .= md5(json_encode($objField->getOptions()));
        }

        $objField->setMd5Konfig(md5($fieldkey));

    }

    protected static function setElementMd5(fieldconfig $objField,$elementName)
    {
        $colKey = md5($objField->getLabel().$objField->getTable().$elementName);
        $objField->setMd5Element($colKey);
    }

    protected static function setDbColumn(fieldconfig $objField, $elementName)
    {
        if(!empty($objField->getColumn()) && trim($objField->getColumn())!==''){
            $objField->setNoSqlExport(true);
            return;
        }

        $arrLocalConf = self::getDbFieldElement($objField->getMd5Konfig(),$objField->getTable());
        $dbFieldKonfig = $arrLocalConf['fieldKey'];
        $dbFieldElement = $arrLocalConf['dbfield'];

        if(trim($dbFieldKonfig)==='' && trim($dbFieldElement)===''){
            self::setNewdbField($objField,$elementName);
        }

    }

    protected static function delConfigMd5Db($md5ConfigKey, $table)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable(foobarsitepackage::TABLE_TXDBZUORDNUNG);

        $queryBuilder->delete(foobarsitepackage::TABLE_TXDBCONFIG)
            ->where(foobarsitepackage::TABLE_TXDBCONFIG.'.fieldKey = "'.$md5ConfigKey.'" 
                    AND
                    '.foobarsitepackage::TABLE_TXDBCONFIG.'.dbtable = "'.$table.'"
                    ')
            ->execute();
    }

    protected static function delElementMd5Db(fieldconfig $objFldConfig)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable(foobarsitepackage::TABLE_TXDBZUORDNUNG);

        $queryBuilder->delete(foobarsitepackage::TABLE_TXDBZUORDNUNG)
            ->where(foobarsitepackage::TABLE_TXDBZUORDNUNG.'.fieldKey = "'.$objFldConfig->getMd5Element().'" 
                    AND
                    '.foobarsitepackage::TABLE_TXDBZUORDNUNG.'.dbtable = "'.$objFldConfig->getTable().'"
                    ')
            ->execute();
    }

    protected static function setObjFldSqlStatement(fieldconfig $objFldConfig)
    {
        $dbSql = '';

        switch ($objFldConfig->getType()){
            case fieldconfig::FILETYPE_LINK: // Coltype Text
                //nobreak
            case fieldconfig::FILETYPE_TEXT:
                //nobreak
            case fieldconfig::FILETYPE_TEXTMULTILINE:
                //nobreak
            case fieldconfig::FILETYPE_USERSUBLIST :
                //nobreak
            case fieldconfig::FILETYPE_RICHTEXT:
                $dbSql = 'text';
                break;
            case fieldconfig::FILETYPE_FORMULARLINK: // Coltype Int
                //nobreak
            case fieldconfig::FILETYPE_MEDIA:
                //nobreak
            case fieldconfig::FILETYPE_CHECKBOX:
                //nobreak
            case fieldconfig::FILETYPE_NUMBER:
                //nobreak
            case fieldconfig::FILETYPE_PAGEREFERENCE:
                //nobreak
            case fieldconfig::FILETYPE_SELECT:
                $dbSql = "int(11) unsigned DEFAULT '0' NOT NULL";
                break;
            case fieldconfig::FILETYPE_DATUM:
                //nobreak
            case fieldconfig::FILETYPE_UHRZEIT:
                //nobreak
            case fieldconfig::FILETYPE_FILELINK:
                //nobreak
            case fieldconfig::FILETYPE_DATUMUHRZEIT:
                $dbSql = "int(16) unsigned DEFAULT '0' NOT NULL";
                break;
        }

        $objFldConfig->setDbColumnSql($objFldConfig->getColumn().' '.$dbSql);

    }

    protected static function getDbFieldElement($md5Element,$table)
    {
        if(
            isset(self::$arrFieldConfiguration[$table]) 
            &&
            isset(self::$arrFieldConfiguration[$table][$md5Element])
        ) {
            return self::$arrFieldConfiguration[$table][$md5Element];
        }

        return [
            'fieldKey' => '',
            'dbfield' => '',
            'dbtable' => '',
            'CType' => '',
            'configKey' => '',
            'infofield'=> '',
        ];
        
    }

    protected static function setNewdbField(fieldconfig $objFldConfig, $elementName)
    {
        $dbFld = '';
        $dbSql = '';

        switch ($objFldConfig->getType()){
            case fieldconfig::FILETYPE_LINK: // Coltype Text
                //nobreak
            case fieldconfig::FILETYPE_TEXT:
                //nobreak
            case fieldconfig::FILETYPE_TEXTMULTILINE:
                //nobreak
            case fieldconfig::FILETYPE_USERSUBLIST :
                //nobreak
            case fieldconfig::FILETYPE_RICHTEXT:
                $colType = 'txt';
                break;
            case fieldconfig::FILETYPE_FORMULARLINK: // Coltype Int
                //nobreak
            case fieldconfig::FILETYPE_MEDIA:
                //nobreak
            case fieldconfig::FILETYPE_CHECKBOX:
                //nobreak
            case fieldconfig::FILETYPE_NUMBER:
                //nobreak
            case fieldconfig::FILETYPE_PAGEREFERENCE:
                //nobreak
            case fieldconfig::FILETYPE_SELECT:
                //nobreak
            case fieldconfig::FILETYPE_DATUM:
                //nobreak
            case fieldconfig::FILETYPE_UHRZEIT:
                //nobreak
            case fieldconfig::FILETYPE_FILELINK:
                //nobreak
            case fieldconfig::FILETYPE_DATUMUHRZEIT:
                $colType = 'int';
                break;
        }

        $count = 0;

        $table = $objFldConfig->getTable();

        if(isset(self::$arrFieldConfiguration[$table]) && is_array(self::$arrFieldConfiguration[$table])) {
            foreach(self::$arrFieldConfiguration[$table] as $tableEntry) {
                if($tableEntry['CType'] === $colType) {
                    $lastCol = $tableEntry['dbfield'];
                    if(trim($lastCol)!=='') {
                        $count = max($count, (int)explode('_', $lastCol)[2]);
                    }
                }
            }
        }
        $count++;

        $dbFld = 'usr_'.$colType.'_'.$count;
        $objFldConfig->setColumn($dbFld);

        self::writeDbFieldElement($objFldConfig, $colType, $elementName);

        return $dbFld;
    }

    protected static function writeDbFieldElement(fieldconfig $objFldConfig, $colType, $elementName)
    {

        $localConf = self::getDbFieldElement($objFldConfig->getMd5Element(),$objFldConfig->getTable());
        $checkFld = $localConf['dbfield'];

        if(trim($checkFld)==='') {

            $info = $elementName.' - '.$objFldConfig->getLabel();

            self::$arrFieldConfiguration[$objFldConfig->getTable()][$objFldConfig->getMd5Element()] = [
                'fieldKey' => $objFldConfig->getMd5Element(),
                'dbfield' => $objFldConfig->getColumn(),
                'dbtable' => $objFldConfig->getTable(),
                'CType' => $colType,
                'configKey' => $objFldConfig->getMd5Konfig(),
                'infofield'=> $info,
            ];

            self::writeFieldConfig();
        }
    }

    protected static function changeDbReference($uid,$newField,$table)
    {
        $refTable = 'sys_file_reference';
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($refTable);
        $queryBuilder->update($refTable)
            ->where(
                'uid_foreign = '.$uid.
                ' AND '.
                'tablenames = "'.$table.'"'
            )
            ->set('fieldname',$newField)
            ->execute();
    }

}
