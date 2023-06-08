<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 26.02.2019
 * Time: 10:49
 */
namespace  FooBar\foobarSitePackage\Config;

use FooBar\foobarSitePackage\foobarsitepackage;

class elements
{
    protected $global;
    protected $arrConfig;
    protected $arrElementsObj;
    protected $arrElementsConf;
    protected $elementsShow;
    protected $arrElementsTypo;
    protected $writeMode;

    /**
     * elements constructor.
     *
     * @param bool $writeMode
     * @return self
     */
    public function __construct($writeMode=false)
    {
        $this->writeMode = $writeMode;

        $this->arrConfig['foobar'] = [];
        $this->arrConfig['foobar']['header'] = 'Pflege Elemente';


        // Standardelemente ausblenden
        $this->arrConfig['data'] = [];
        $this->arrConfig['data']['show'] = '';

        $this->arrConfig['interactive'] = [];
        $this->arrConfig['interactive']['show'] = '';

        $this->arrConfig['media'] = [];
        $this->arrConfig['media']['show'] = '';

        $this->arrConfig['text'] = [];
        $this->arrConfig['text']['show'] = '';

        $this->arrConfig['common'] = [];
        $this->arrConfig['common']['show'] = '';

        $this->arrConfig['special'] = [];
        $this->arrConfig['special']['show'] = '';

//        $this->arrConfig['plugins'] = [];
//        $this->arrConfig['plugins']['show'] = '';

        $this->arrConfig['menu'] = [];
        $this->arrConfig['menu']['show'] = '';


    }


    protected $typoScriptConf = '';
    protected $pageTsConf = '';

    public function writeConfFiles()
    {
        $arrConfigCols = [];

        if(is_array($this->arrElementsObj)) foreach ($this->arrElementsObj as $objConfig){
            if($objConfig instanceof elementconfig){

                $arrCols = $objConfig->getColposAllowed();
                if(count($arrCols)==0){
                    $arrCols[] = 1;
                }

                foreach ($arrCols as $colKey){
                    if(!isset($arrConfigCols[$colKey])) {
                        $arrConfigCols[$colKey] = $this->arrConfig;
                    }

                    $arrConfigCols[$colKey]['foobar']['elements'][$objConfig->getItemName()] = $objConfig->getObjectConfig();

                    if($objConfig->getShowInlist()){
                        if(!isset($arrConfigCols[$colKey]['foobar']['show'])){
                            $arrConfigCols[$colKey]['foobar']['show'] = '';
                        }

                        if(trim($arrConfigCols[$colKey]['foobar']['show'])!==''){
                            $arrConfigCols[$colKey]['foobar']['show'] .= ', ';
                        }

                        $arrConfigCols[$colKey]['foobar']['show'] .= $objConfig->getItemName();
                    }
                }

            }
        }

        foobarsitepackage::$arrTsConfig[] = $arrConfigCols;


        $this->pageTsConf = $arrConfigCols;

        $txtTypo = '';

        if(is_array($this->arrElementsConf)){

            //$txtTypo = 'tt_content{'."\r\n";

            foreach ($this->arrElementsConf as $confId=>$objConf){
                if($objConf instanceof elementconfig) {
                    $objConf->writeConfig();
//                    $tx_ctype->addOption($objConf->getCounterId(), $objConf->getItemCaption());

                    $txtTypo .= $objConf->getItemName().' < lib.fluidContent'."\r\n";
                    $txtTypo .= $objConf->getItemName().' =< lib.contentElement'."\r\n";
                    $txtTypo .= $objConf->getItemName().' {'."\r\n";

                    $txtTypo .= 'templateName = '.str_replace('foobarsitepackage_','', $objConf->getItemName())."\r\n";

                        if($objConf->getPageNavigation()) {

                            $txtTypo .= 'variables {'."\r\n";
                                $txtTypo .= 'browse_prev = COA'."\r\n";
                                $txtTypo .= 'browse_prev {'."\r\n";
                                $txtTypo .= '    10 = HMENU'."\r\n";
                                $txtTypo .= '    10 {'."\r\n";
                                $txtTypo .= '       special = browse'."\r\n";
                                $txtTypo .= '       special {'."\r\n";
                                $txtTypo .= '           items = prev'."\r\n";
                                $txtTypo .= '       }'."\r\n";
                                $txtTypo .= '       1 = TMENU'."\r\n";
                                $txtTypo .= '       1 {'."\r\n";
                                $txtTypo .= '           wrap = |'."\r\n";
                                $txtTypo .= '           target = _top'."\r\n";
                                $txtTypo .= '       }'."\r\n";
                                $txtTypo .= '   }'."\r\n";
                                $txtTypo .= '}'."\r\n";
                                $txtTypo .= 'browse_next = COA'."\r\n";
                                $txtTypo .= 'browse_next {'."\r\n";
                                $txtTypo .= '    10 = HMENU'."\r\n";
                                $txtTypo .= '    10 {'."\r\n";
                                $txtTypo .= '       special = browse'."\r\n";
                                $txtTypo .= '       special {'."\r\n";
                                $txtTypo .= '           items = next'."\r\n";
                                $txtTypo .= '       }'."\r\n";
                                $txtTypo .= '       1 = TMENU'."\r\n";
                                $txtTypo .= '       1 {'."\r\n";
                                $txtTypo .= '           wrap = |'."\r\n";
                                $txtTypo .= '           target = _top'."\r\n";
                                $txtTypo .= '       }'."\r\n";
                                $txtTypo .= '   }'."\r\n";
                                $txtTypo .= '}'."\r\n";
                            $txtTypo .= '}'."\r\n";
                        }

                        $txtTypo .= 'dataProcessing {'."\r\n";

                            $index = 1;

                            $arrPalette = $objConf->getPaletten();
                            if(count($arrPalette)){
                                foreach ($arrPalette as $objPalette){
                                    if($objPalette instanceof palettconfig){
                                        $arrFields = $objPalette->getFields();
                                        if(count($arrFields) && $objPalette->getTable()=== foobarsitepackage::TABLE_TTCONTENT){
                                            $pIndex=1;
                                            foreach ($arrFields as $arrObjField){
                                                if(count($arrObjField)){
                                                    foreach ($arrObjField as $objField){
                                                        if($objField instanceof fieldconfig){
                                                            switch ($objField->getType()){
                                                                case fieldconfig::FILETYPE_MEDIA:
                                                                case fieldconfig::FILETYPE_FILELINK:

                                                                    $txtTypo .= ($index * 10).' = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor'."\r\n";
                                                                        $txtTypo .= ($index * 10).'{'."\r\n";
                                                                        $txtTypo .= 'references.table = '.$objField->getTable()."\r\n";
                                                                        $txtTypo .= 'references.fieldName = '.$objField->getColumn()."\r\n";
                                                                        $txtTypo .= 'as = refImg_'.$objField->getColumn()."\r\n";
                                                                    $txtTypo .= '}'."\r\n";
                                                                    $index++;
                                                                    break;
                                                                case fieldconfig::FILETYPE_FORMULARLINK:

                                                                    $txtTypo .= ($index * 10).' = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor'."\r\n";

                                                                    $txtTypo .= ($index * 10).' {'."\r\n";
                                                                    $txtTypo .= 'table = '.foobarsitepackage::TABLE_TTCONTENT."\r\n";
                                                                    $txtTypo .= 'pidInList = this'."\r\n";
                                                                    $txtTypo .= "where{"."\r\n";
                                                                    $txtTypo .= 'dataWrap = subselectelement = {field:uid}'."\r\n";
                                                                    $txtTypo .= '}'."\r\n";
                                                                    $txtTypo .= 'orderBy = sorting'."\r\n";
                                                                    $txtTypo .= 'as = refData_'.$objField->getColumn()."\r\n";
                                                                    $txtTypo .= '}'."\r\n";
                                                                    $index ++;
                                                                    break;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }

                            //Kategorien im Element aktivieren
                            if($objConf->getEnabledCategory(foobarsitepackage::TABLE_TTCONTENT)){
                                $txtTypo .= ($index * 10).' = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor'."\r\n";
                                $txtTypo .= ($index * 10).'{'."\r\n";
                                    $txtTypo .= 'if.isTrue.field = categories'."\r\n";
                                    $txtTypo .= 'table = sys_category'."\r\n";
                                    $txtTypo .= 'pidInList = this'."\r\n";
                                    $txtTypo .= 'recursive = 999'."\r\n";
                                    $txtTypo .= 'join = sys_category_record_mm ON sys_category.uid = sys_category_record_mm.uid_local'."\r\n";
                                    $txtTypo .= 'where.data = field:uid'."\r\n";
                                    $txtTypo .= "where.wrap = sys_category_record_mm.tablenames = '".foobarsitepackage::TABLE_TTCONTENT."' and sys_category_record_mm.fieldname = 'categories' and sys_category_record_mm.uid_foreign='|'"."\r\n";
                                    $txtTypo .= 'orderBy = sys_category.sorting'."\r\n";
                                    $txtTypo .= 'as = categories'."\r\n";
                                $txtTypo .= '}'."\r\n";
                                $index++;
                            }

                            // 10 = BK2K\BootstrapPackage\DataProcessing\FlexFormProcessor
                            $txtTypo .= ($index * 10).' = FooBar\foobarSitePackage\Processor\FlexFormProcessor'."\r\n";
                            $index++;
                            $txtTypo .= ($index * 10).' = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor'."\r\n";
                            $txtTypo .= ($index * 10).' {'."\r\n";
                                $txtTypo .= 'table = '.foobarsitepackage::TABLE_TXFOOBARSITE."\r\n";
                                $txtTypo .= 'pidInList.field = pid'."\r\n";
                                $txtTypo .= 'where {'."\r\n";
                                    $txtTypo .= 'data = field:uid'."\r\n";
                                    $txtTypo .= 'intval = 1'."\r\n";
                                    $txtTypo .= 'wrap = tt_content=|'."\r\n";
                                $txtTypo .= '}'."\r\n";
                                $txtTypo .= 'orderBy = sorting'."\r\n";

                                $pIndex = 1;
                                $arrPalette = $objConf->getPaletten();
                                if(count($arrPalette)){
                                    foreach ($arrPalette as $objPalette){
                                        if($objPalette instanceof palettconfig){
                                            $arrFields = $objPalette->getFields();
                                            if(count($arrFields) && $objPalette->getTable()=== foobarsitepackage::TABLE_TXFOOBARSITE){
                                                foreach ($arrFields as $arrObjField){
                                                    if(count($arrObjField)){
                                                        foreach ($arrObjField as $objField){
                                                            if($objField instanceof fieldconfig){
                                                                switch ($objField->getType()){
                                                                    case fieldconfig::FILETYPE_MEDIA:
                                                                    case fieldconfig::FILETYPE_FILELINK:

                                                                        if($pIndex==1){
                                                                            $txtTypo .= 'dataProcessing {'."\r\n";
                                                                        }

                                                                        $txtTypo .= ($pIndex * 10).' = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor'."\r\n";

                                                                        $txtTypo .= ($pIndex * 10).' {'."\r\n";
                                                                            $txtTypo .= 'references.table = '.$objField->getTable()."\r\n";
                                                                            $txtTypo .= 'references.fieldName = '.$objField->getColumn()."\r\n";
                                                                            $txtTypo .= 'as = refImg_'.$objField->getColumn()."\r\n";
                                                                        $txtTypo .= '}'."\r\n";
                                                                        $pIndex ++;
                                                                        break;
                                                                    case fieldconfig::FILETYPE_USERSUBLIST:
                                                                        if($pIndex==1){
                                                                            $txtTypo .= 'dataProcessing {'."\r\n";
                                                                        }

                                                                        $txtTypo .= ($pIndex * 10).' = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor'."\r\n";

                                                                        $txtTypo .= ($pIndex * 10).' {'."\r\n";
                                                                            $txtTypo .= 'table = '.foobarsitepackage::TABLE_TTCONTENT."\r\n";
                                                                            $txtTypo .= 'pidInList.field = subselectelement'."\r\n";
                                                                            $txtTypo .= "where{"."\r\n";
                                                                                $txtTypo .= 'dataWrap = subselectelement = {field:uid}'."\r\n";
                                                                            $txtTypo .= '}'."\r\n";
                                                                            $txtTypo .= 'orderBy = sorting'."\r\n";
                                                                            $txtTypo .= 'as = refData_'.$objField->getColumn()."\r\n";
                                                                        $txtTypo .= '}'."\r\n";
                                                                        $pIndex ++;
                                                                        break;
                                                                    case fieldconfig::FILETYPE_FORMULARLINK:
                                                                        if($pIndex==1){
                                                                            $txtTypo .= 'dataProcessing {'."\r\n";
                                                                        }

                                                                        $txtTypo .= ($pIndex * 10).' = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor'."\r\n";

                                                                        $txtTypo .= ($pIndex * 10).' {'."\r\n";
                                                                            $txtTypo .= 'table = '.foobarsitepackage::TABLE_TTCONTENT."\r\n";
                                                                            $txtTypo .= 'pidInList.field = subselectelement'."\r\n";
                                                                            $txtTypo .= "where{"."\r\n";
                                                                                $txtTypo .= 'dataWrap = subselectelement = {field:uid}'."\r\n";
                                                                            $txtTypo .= '}'."\r\n";
                                                                            $txtTypo .= 'orderBy = sorting'."\r\n";
                                                                            $txtTypo .= 'as = refData_'.$objField->getColumn()."\r\n";
                                                                        $txtTypo .= '}'."\r\n";
                                                                        $pIndex ++;
                                                                        break;
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }

                                        }
                                    }
                                }

                                //Kategorien im Element aktivieren
                                if($objConf->getEnabledCategory(foobarsitepackage::TABLE_TTCONTENT)){
                                    if($pIndex==1){
                                        $txtTypo .= 'dataProcessing {'."\r\n";
                                    }

                                    $txtTypo .= ($pIndex * 10).' = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor'."\r\n";
                                    $txtTypo .= ($pIndex * 10).'{'."\r\n";
                                    $txtTypo .= 'if.isTrue.field = categories'."\r\n";
                                    $txtTypo .= 'table = sys_category'."\r\n";
                                    $txtTypo .= 'pidInList = this'."\r\n";
                                    $txtTypo .= 'recursive = 999'."\r\n";
                                    $txtTypo .= 'join = sys_category_record_mm ON sys_category.uid = sys_category_record_mm.uid_local'."\r\n";
                                    $txtTypo .= 'where.data = field:uid'."\r\n";
                                    $txtTypo .= "where.wrap = sys_category_record_mm.tablenames = '".foobarsitepackage::TABLE_TXFOOBARSITE."' and sys_category_record_mm.fieldname = 'categories' and sys_category_record_mm.uid_foreign='|'"."\r\n";
                                        $txtTypo .= 'orderBy = sys_category.sorting'."\r\n";
                                        $txtTypo .= 'as = categories'."\r\n";
                                    $txtTypo .= '}'."\r\n";
                                    $pIndex++;
                                }


                                if($pIndex > 1){
                                    $txtTypo .= '}'."\r\n";
                                }

                            $txtTypo .= '}'."\r\n";
                            $index ++;


                            if($objConf->getEnablePageContent(foobarsitepackage::TABLE_TTCONTENT)){

                                $txtTypo .= ($index * 10).' = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor'."\r\n";
                                $txtTypo .= ($index * 10).'{'."\r\n";
                                $txtTypo .= '
                                                expandAll = 1
                                                levels = 3
                                                as = newsnavigation
        
                                                dataProcessing {
                                                    10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                                                    10 {
                                                        references.fieldName = thumbnail
                                                    }
        
                                                    100 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
                                                    100 {
                                                            if.isTrue.field = categories
                                                            table = sys_category
                                                            recursive = 99
            
                                                            pidInList = root, -1
                                                            selectFields = sys_category.*
                                                            join = sys_category_record_mm ON sys_category_record_mm.uid_local = sys_category.uid
                                                            where.data = field:_ORIG_uid // field:uid
                                                            where.intval = 1
                                                            where.wrap = sys_category_record_mm.uid_foreign=|
                                                            orderBy = sys_category_record_mm.sorting_foreign
                                                            languageField = 0 # disable translation handling of sys_category
            
                                                            as = cats
                                                    }
                                                }
                                            ';

                                $txtTypo .= '}'."\r\n";
                                $index++;
                            }


                            $txtTypo .= ($index * 10).' = FooBar\foobarSitePackage\Processor\usrFormRender'."\r\n";
                            $txtTypo .= ($index * 10).' {'."\r\n";
                                $txtTypo .= 'useHere = '.$confId."\r\n";
                            $txtTypo .= '}'."\r\n";
                            $index++;

                        $txtTypo .= '} '."\r\n";


                    $txtTypo .= '} '."\r\n";

                } // ENDIF $objConf instanceof elementconfig

            } // END  foreach ($this->arrElementsConf as $confId=>$objConf)

            //$txtTypo .= '}';
        }


        $this->typoScriptConf = $txtTypo ;
    }

    public function getPageTSConfig()
    {
        return $this->pageTsConf;
    }

    public function getTypoScriptConfig()
    {
        return $this->typoScriptConf;
    }

    /**
     * @param $name
     * @param string $titel
     * @param string $description
     * @return elementconfig
     */
    public function newElement($name, $titel = '', $description = '', $showInList = true)
    {

        $name = 'foobarsitepackage_'.$name;

        $GLOBALS['TCA']['tt_content']['types'][$name] = [];
        // icon Setzen
        $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][$name] = $name;
        $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [0 => $titel, 1 => $name, 2 => 'content-elements-' . $name];



        $objConf = new elementconfig($name, $titel);
        $objConf->setShowInList($showInList);

        $objConf->setObjectConfig('iconIdentifier',$name);
        $objConf->setObjectConfig('title',$titel);
        $objConf->setObjectConfig('description',$description);
        $objConf->setObjectConfig('tt_content_defValues',['CType'=>$name]);


        $this->arrElementsObj[$name] = &$objConf;
        $this->arrElementsConf[$name] = &$objConf;

        return $objConf;
    }


    protected function array2tsconfig($array, $ebene = 0)
    {
        $txt = '';

        foreach ($array as $key=>$value){
            $txt .= $key;

            if(is_array($value)){
                $txt .= '{ '."\r\n";
                $txt .= $this->array2tsconfig($value,($ebene+1));
            }
            else{
                $txt .= ' = '.trim($value)."\r\n";
            }

            if(is_array($value)){
                $txt .= '}';
            }

            $txt .= "\r\n";
        }

        return $txt;
    }


    /**
     * @param null $configId
     * @return elementconfig | elementconfig[]
     */
    public function getElementConfig($configId=null)
    {
        if($configId!==null) return $this->arrElementsConf[$configId];
        else return $this->arrElementsConf;
    }

}
