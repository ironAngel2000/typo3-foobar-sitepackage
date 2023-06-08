<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 27.02.2019
 * Time: 11:26
 */
namespace  FooBar\foobarSitePackage\Config;

use FooBar\foobarSitePackage\foobarsitepackage;

class palettconfig
{

    protected $name;
    protected $table;
    protected $label;

    protected $fields;

    protected $palletename;

    protected $global;

    /**
     * palettconfig constructor.
     *
     * @param string $name
     * @param string $label
     * @param string $tabelle
     * @return self
     */
    public function __construct($name, $label,$tabelle = foobarsitepackage::TABLE_TTCONTENT)
    {

        $this->name = trim($name);
        $this->table = trim($tabelle);
        $this->label = trim($label);

        $this->palletename = '';

        $this->fields = [];
    }

    /**
     * Fügt ein Feld der Palette hinzufügen
     * !!! Fehlermeldung wenn Tabelle Palette nicht gleich Tabelle Feld
     *
     * @param fieldconfig $field
     * @param int $row
     * @param null | string $altLabel
     * @return fieldconfig
     */
    public function addField(string $name, int $row, string $label)
    {
        if(!is_array($this->fields)) {
            $this->fields = [];
        }

        //fieldconfig $field, $row=1, $altLabel=null
        $field = new fieldconfig($name,$this->table);
        if (!isset($this->fields[$row]) || !is_array($this->fields[$row])) {
            $this->fields[$row] = [];
        }

        $this->fields[$row][] = [$field, $label];

        return $field;
    }

    /**
     * Konfiguration ins Typo3 schreiben
     *
     * @param $itemName
     * @return string
     */
    public function writePaletteConfig($itemName)
    {

        $paletConfig = '';

        $arrPaletten = [];

        if(count($this->fields)){

            $paletteName = $itemName.'_'.$this->name.'_'.$this->table;

            $arrPaletten[] = $paletteName;

            $pallItemsStr = '';

            foreach ($this->fields as $row=>$arrField){

                if(trim($pallItemsStr)!==''){
                    $pallItemsStr .= ', --linebreak-- ';
                }



                foreach ($arrField as $arrFfield) {

                    $field = $arrFfield[0];
                    $altLabel = $arrFfield[1];

                    if($field instanceof fieldconfig) {

                        $fieldCol = $field->getColumn();
                        if (trim($altLabel) !== '') {
                            $fieldCol .= ';' . trim($altLabel);
                        }

                        $field->writeConfig();

                        if(trim($pallItemsStr)!==''){
                            $pallItemsStr .= ', ';
                        }

                        $pallItemsStr .= $fieldCol;
                    }

                }

            }

            if($this->table == foobarsitepackage::TABLE_TTCONTENT) {

                $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['palettes'][$paletteName]['showitem'] = $pallItemsStr;
                $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['palettes'][$paletteName]['label'] = $this->label;;
            }
            else{

                if(!isset(foobarsitepackage::$arrTx_TableConfig[$this->table]['palettes'][$paletteName])){
                    foobarsitepackage::$arrTx_TableConfig[$this->table]['palettes'][$paletteName] = [];
                }

                foobarsitepackage::$arrTx_TableConfig[$this->table]['palettes'][$paletteName]['showitem'] = $pallItemsStr;

                foobarsitepackage::$arrTx_TableConfig[$this->table]['palettes'][$paletteName]['label'] = $this->label;

            }

        }

        if(count($arrPaletten)){

            foreach ($arrPaletten as $palette){
                if(trim($paletConfig)==''){
                    $paletConfig .= ' --palette--;'.$this->label.'; '.$palette.', ';
                }
                else{
                    $paletConfig .= ' --palette--;; '.$palette.', ';
                }

            }
        }

        $this->palletename = $paletConfig;

        return $paletConfig;

    }

    /**
     * Tabellenname zurückgeben
     *
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Felder reihenweise zurückgeben
     *
     * @return array
     */
    public function getFields()
    {
        $ret = [];
        foreach ($this->fields as $row=>$arrField) {
            foreach ($arrField as $arrFfield){
                $ret[$row][] = $arrFfield[0];
            }
        }

        return $ret;
    }

    /**
     * Palettenname zurückgeben
     *
     * @return string
     */
    public function getLastPalletConfig()
    {
        return $this->palletename;
    }


}


