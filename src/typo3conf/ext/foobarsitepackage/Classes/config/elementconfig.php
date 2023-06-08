<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 26.02.2019
 * Time: 14:00
 */
namespace  FooBar\foobarSitePackage\Config;

use FooBar\foobarSitePackage\foobarsitepackage;

class elementconfig
{

    protected $global;
    protected $itemName;
    protected $itemCaption;
    protected $showItem;
    protected $columnOverrides;
    protected $cropSettings;
    protected $fields;
    protected $paletten;
    protected $palHeader = false;
    protected $palZugriff = false;
    protected $palSprache = false;
    protected $childItems;
    protected $counterId;
    protected $useCat;
    protected $showInList;
    protected $collposAllowed;
    protected $objectConfig;
    protected $enablePageContent;
    protected $pageNavigation;

    protected static $counter;

    public function __construct($itemName, $itemCaption = '')
    {
        $this->itemName = $itemName;
        $this->showItem = '';
        $this->columnOverrides = [];
        $this->cropSettings = [];
        $this->fields = [];
        $this->paletten = [];
        $this->childItems = [];
        $this->itemCaption = $itemCaption;
        $this->useCat = [];
        $this->showInList = true;
        $this->collposAllowed = [];
        $this->objectConfig = [];
        $this->enablePageContent = [];
        $this->pageNavigation = false;

        self::$counter++;
        $this->counterId = self::$counter;
    }


    /**
     * @return bool
     */
    public function getPageNavigation(){
        return $this->pageNavigation;
    }

    /**
     * @param bool enable
     */

    public function setPageNavigation($enable = true){
        $this->pageNavigation = $enable;
    }


    /**
     * @return bool
     */
    public function getEnablePageContent($tabelle =  foobarsitepackage::TABLE_TTCONTENT)
    {
        $ret = false;
        if(isset($this->enablePageContent[$tabelle])){
            $ret = $this->enablePageContent[$tabelle];
        }
        return $ret;
    }

    /**
     * @param bool $enablePageContent
     */
    public function setEnablePageContent($tabelle = foobarsitepackage::TABLE_TTCONTENT)
    {
        if(!is_array($this->enablePageContent)){
            $this->enablePageContent = [];
        }
        $this->enablePageContent[$tabelle] = true;
    }


    public function setShowInList($stat)
    {
        $this->showInList = $stat;
    }

    public function enableCategory($tabelle = foobarsitepackage::TABLE_TTCONTENT)
    {
        $this->useCat[$tabelle] = true;
    }

    public function getEnabledCategory($tabelle = foobarsitepackage::TABLE_TTCONTENT)
    {
        $ret = false;
        if(isset($this->useCat[$tabelle])){
            $ret = $this->useCat[$tabelle];
        }
        return $ret;
    }

    public function addColpos($newPos){
        $this->collposAllowed[] = $newPos;
    }

    public function setObjectConfig($key,$value)
    {
        $this->objectConfig[$key] = $value;
    }

    public function getObjectConfig()
    {
        return $this->objectConfig;
    }

    public function getColposAllowed()
    {
        return $this->collposAllowed;
    }

    public function getShowInlist()
    {
        return $this->showInList;
    }

    public function getItemName()
    {
        return $this->itemName;
    }

    public function getItemCaption()
    {
        return $this->itemCaption;
    }

    public function getCounterId()
    {
        return $this->counterId;
    }

    public function getPaletten()
    {
        return $this->paletten;
    }



    public function writeConfig()
    {
        $GLOBALS['TCA']['tt_content']['types'][$this->itemName] = [];

        $showItem = ' --palette--;Allgemein;general, ';

        $showItemChild = '';

        if($this->palHeader==true){
            $showItem .= ' --palette--;Header;header, ';
        }

        if($this->palSprache==true){
            $showItem .= ' --palette--;Sprache;language, ';
        }

        if(count($this->paletten)){


            foreach ($this->paletten as $palette){

                if($palette instanceof palettconfig){
                    if($palette->getTable() == foobarsitepackage::TABLE_TTCONTENT){
                        $showItem .= $palette->writePaletteConfig($this->itemName);
                    }
                    else{
                        $showItemChild  .= $palette->writePaletteConfig($this->itemName);
                    }
                }
            }
        }


        if(trim($showItemChild)!==''){

            $showItem .= ' tx_foobarsitepackage_inhblockitem, ';

            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
                '*',
                $this->getChildItemsXML(),
                $this->itemName
            );

            $showItemChild = ' --palette--;Einstellungen;general --palette--;;hiddenLanguagePalette, --palette-- '.$showItemChild.', ';

            foobarsitepackage::$arrTx_TableConfig[foobarsitepackage::TABLE_TXFOOBARSITE]['types'][$this->itemName]['showitem'] =  $showItemChild;

        }

        if($this->palZugriff==true){
            $showItem .=  '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access,--palette--;Ausblenden;hidden, --palette--; Zugriff;access,';
        }

        $GLOBALS['TCA']['tt_content']['types'][$this->itemName]['showitem'] = $showItem;

    }



    public function addPaletteHeader()
    {
        $this->palHeader = true;
    }


    public function addPaletteSprache()
    {
        $this->palSprache = true;
    }

    public function addPaletteZugriff()
    {
        $this->palZugriff = true;
    }


    public function addNewPalette($name, $label, $tabelle=foobarsitepackage::TABLE_TTCONTENT)
    {
        $name .= $this->counterId.'_'.$name;
        $palette = new palettconfig($name, $label, $tabelle);
        $this->paletten[] = $palette;
        return $palette;
    }


    protected function getChildItemsXML()
    {
        $r = '';


        $r .= '<?xml version="1.0" encoding="utf-8" standalone="yes" ?>
<settings.'.$this->itemName.'>
    <T3DataStructure>
        <sheets>
            <sDEF>
                <ROOT>
                    <TCEforms>
                        <label>'.$this->itemCaption.'</label>
                        <config>
                            <type>inline</type>
                            <maxitems>1</maxitems>
                            <foreign_table>'.foobarsitepackage::TABLE_TTCONTENT.'</foreign_table>
                            <foreign_field>uid_foreign</foreign_field>
                            <foreign_table_field>tablenames</foreign_table_field>
                            <foreign_label>uid_local</foreign_label>
                            <foreign_sortby>sorting_foreign</foreign_sortby>
                            <foreign_selector>uid_local</foreign_selector>
                            <foreign_selector_fieldTcaOverride type="array">
                                <config>
                                    <appearance>
                                    </appearance>
                                </config>
                            </foreign_selector_fieldTcaOverride>
                            <foreign_match_fields type="array">
                                <fieldname>box_background</fieldname>
                            </foreign_match_fields>
                            <appearance type="array">
                            </appearance>
                        </config>
                    </TCEforms>
                </ROOT>
            </sDEF>
        </sheets>
    </T3DataStructure>
</settings.'.$this->itemName.'>
';
        return $r;
    }

}
