<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 27.02.2019
 * Time: 10:40
 */
namespace FooBar\foobarSitePackage\Config;

use FooBar\foobarSitePackage\foobarsitepackage;

class fieldconfig
{

    const FILETYPE_TEXT = 'text'; // input type Text
    const FILETYPE_TEXTMULTILINE = 'textmultiline'; // textarea
    const FILETYPE_RICHTEXT = 'richtext'; // RTE typie = default
    const FILETYPE_MEDIA = 'media'; // Mediadatei einbinden
    const FILETYPE_CHECKBOX = 'checkbox';
    const FILETYPE_SELECT = 'select';
    const FILETYPE_DATUM = 'datum';
    const FILETYPE_UHRZEIT = 'time';
    const FILETYPE_DATUMUHRZEIT = 'datetime';
    const FILETYPE_LINK = 'link'; // Seitenlink (Mailto, Extern, ...)
    const FILETYPE_FILELINK = 'filelink'; // Download
    const FILETYPE_USERSUBLIST = 'usersublist'; // Weiteres Element verlinken
    const FILETYPE_FORMULARLINK = 'formularlink'; // Standard Formularelement verlinken
    const FILETYPE_NUMBER = 'number'; // input als Zahl (int)
    const FILETYPE_PAGEREFERENCE = 'pref'; // input als Zahl (int)


    protected $table;
    protected $column;
    protected $type;
    protected $options;
    protected $label;
    protected $cropSize;
    protected $configWritten;
    protected $usrConfig;
    protected $global;
    protected $helptxt;
    protected $noIndex;
    protected $md5Konfig;
    protected $md5Element;
    protected $dbColumnSql;
    protected $noSqlExport = false;

    protected $refElementObj;

    protected $renderWidth;

    /**
     * Konstruktor
     *
     * @param string $name - Feldname standard Label
     * @param string $table - Referenztabelle
     * @return self
     */
    public function __construct($name, $table = 'tt_content')
    {

        $this->label = trim($name);
        $this->table = trim($table);
        $this->options = null;
        $this->configWritten = false;
        $this->type = fieldconfig::FILETYPE_TEXT;
        $this->usrConfig = null;
        $this->cropSize = [];
        $this->renderWidth = null;
        $this->refElementObj = new elementconfig('blank','blank');
        $this->noIndex = false;
        $this->helptxt = '';
    }

    /**
     * Spalte Definieren
     * @param string $column - Spaltenname in der Tabelle
     * @return void
     */
    public function setColumn($column)
    {
        $this->column = trim($column);
    }

    /**
     * @param string $type - Feldtyp defieren Konstanten aus cropsizeconfig
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Werte für Dorpdown definieren
     *
     * @param mixed $key - Schlüsselwert wird in das Datenbankfeld gespeichert
     * @param string $value - Auswahl für Ausgabeliste im Backend
     * @return void
     */
    public function addOption($key, $value)
    {
        if (!is_array($this->options)) {
            $this->options = [];
        }
        $this->options[$key] = $value;
    }

    /**
     * Beschnittdaten für Bilder festlegen
     *
     * @param int $breite
     * @param int $hoehe
     * @param int $variante - Beschnittvariante auswählen 1 Standard
     * @param string $size - CSS Breakpoint zuweisen - Konstanten in cropsizeconfig
     * @return void
     */
    public function addCropSize($breite, $hoehe, $variante=1, $size = cropsizeconfig::CROPSIZE_ALL)
    {
        if($size!==cropsizeconfig::CROPSIZE_ALL){
            $this->cropSize[$variante][] = [$breite, $hoehe, $size];
        }
        else {
            $this->cropSize[$variante][] = [$breite, $hoehe];
        }
    }

    /**
     * Ausgabe Rendergröße für Frontend festlegen
     *
     * @param int $width - < 1 wird im Verhältniss gerechnet – > 1 die Breite wird in Pixel übernommen
     * @param string $size - CSS Breakpoint zuweisen - Konstanten in cropsizeconfig
     */
    public function setRenderWidth($width,$size=cropsizeconfig::CROPSIZE_ALL)
    {
        if($size === cropsizeconfig::CROPSIZE_ALL){
            $this->renderWidth['all'] = $width;
        }
        else{
            $this->renderWidth[$size] = $width;
        }
    }

    /**
     * Referenzelement zuweisen für den Typ USERSUBLIST
     *
     * @param elementconfig $elementconfig
     * @return void
     */
    public function setRefElementObject(elementconfig $elementconfig)
    {
        $this->refElementObj = $elementconfig;
    }

    /**
     * FeldKonfiguration individuell übersteuern
     *
     * @param array $usrConfig
     * @return void
     */
    public function setUserConfig(array $usrConfig)
    {
        $this->usrConfig = $usrConfig;
    }

    /**
     * @return null
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return null
     */
    public function getUsrConfig()
    {
        return $this->usrConfig;
    }

    /**
     * @return elementconfig
     */
    public function getRefElementObj(): elementconfig
    {
        return $this->refElementObj;
    }



    /**
     * Rückgabe der internen Feldbezeichnung
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }


    /**
     * Rückgabe der Tabelle
     *
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Rückgabe Spaltenname der Tabelle
     *
     * @return string
     */
    public function getColumn($maskName=false)
    {
        if($maskName===true){
            return $this->label;
        }
        else{
            return $this->column;
        }
    }

    /**
     * Rückgabe Typ
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Rückgabe Referenzelement
     *
     * @return elementconfig
     */
    public function getRefElement()
    {
        return $this->refElementObj;
    }

    /**
     * @return array
     */
    public function getCropSize(): array
    {
        return $this->cropSize;
    }

    /**
     * @return null
     */
    public function getRenderWidth()
    {
        return $this->renderWidth;
    }

    /**
     * @return bool
     */
    public function isNoSqlExport(): bool
    {
        return $this->noSqlExport;
    }

    /**
     * @param bool $noSqlExport
     */
    public function setNoSqlExport(bool $noSqlExport): void
    {
        $this->noSqlExport = $noSqlExport;
    }




    /**
     * Hilfetext für das Feld
     *
     * @param $helpTxt
     */
    public function setDescription(string $description)
    {
        $this->helptxt = $description;
    }

    /**
     * Rückgabe Hilfetext
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->helptxt;
    }

    /**
     * Indizierung für das Feld ausschalten
     */
    public function setNoIndex()
    {
        $this->noIndex = true;
    }

    /**
     * @return bool
     */
    public function getNoIndex()
    {
        return $this->noIndex;
    }

    /**
     * @return mixed
     */
    public function getMd5Konfig()
    {
        return $this->md5Konfig;
    }

    /**
     * @param mixed $md5Konfig
     */
    public function setMd5Konfig($md5Konfig): void
    {
        $this->md5Konfig = $md5Konfig;
    }

    /**
     * @return mixed
     */
    public function getMd5Element()
    {
        return $this->md5Element;
    }

    /**
     * @param mixed $md5Element
     */
    public function setMd5Element($md5Element): void
    {
        $this->md5Element = $md5Element;
    }

     /**
     * @return mixed
     */
    public function getDbColumnSql()
    {
        return $this->dbColumnSql;
    }

    /**
     * @param mixed $dbColumnSql
     */
    public function setDbColumnSql($dbColumnSql): void
    {
        $this->dbColumnSql = $dbColumnSql;
    }




    /**
     * Konfiguration ins Typo3 schreiben
     *
     * @return void
     */
    public function writeConfig()
    {
        if ($this->configWritten === false) {

            $config = null;

            switch ($this->type) {
                case fieldconfig::FILETYPE_TEXT:
                    $config = $this->getConfigText();
                    break;
                case fieldconfig::FILETYPE_NUMBER:
                    $config = $this->getConfigNumber();
                    break;
                case fieldconfig::FILETYPE_TEXTMULTILINE:
                    $config = $this->getConfigTextMultiline();
                    break;
                case fieldconfig::FILETYPE_RICHTEXT:
                    $config = $this->getConfigRichText();
                    break;
                case fieldconfig::FILETYPE_MEDIA:
                    $config = $this->getConfigMedia();
                    break;
                case fieldconfig::FILETYPE_SELECT:
                    $config = $this->getConfigSelect();
                    break;
                case fieldconfig::FILETYPE_CHECKBOX:
                    $config = $this->getConfigCheckbox();
                    break;
                case fieldconfig::FILETYPE_DATUMUHRZEIT:
                    $config = $this->getConfigDateTime();
                    break;
                case fieldconfig::FILETYPE_DATUM:
                    $config = $this->getConfigDate();
                    break;
                case fieldconfig::FILETYPE_UHRZEIT:
                    $config = $this->getConfigTime();
                    break;
                case fieldconfig::FILETYPE_LINK:
                    $config = $this->getConfigLink();
                    break;
                case fieldconfig::FILETYPE_PAGEREFERENCE:
                    $config = $this->getPageReferece();
                    break;
                    case fieldconfig::FILETYPE_FILELINK:
                    $config = $this->getConfigFileLink();
                    break;
                case fieldconfig::FILETYPE_USERSUBLIST:
                    $config = $this->getConfigUserSubList();
                    break;
                case fieldconfig::FILETYPE_FORMULARLINK:
                    $config = $this->getConfigUserFormularlink();
                    break;
            }

            if ($config!==null || is_array($this->usrConfig)){

                $col = trim($this->column);

                if(is_array($this->usrConfig)){


                    $temporaryColumn = [
                        $col => $this->usrConfig
                    ];
                }
                else {

                    $temporaryColumn = [
                        $col =>
                            [
                                'exclude' => 0,
                                'label' => $this->label,
                                'config' => $config,
                                'description' => trim($this->helptxt)
                            ]
                    ];
                }

                if($this->table == foobarsitepackage::TABLE_TTCONTENT) {
                    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
                        $this->table,
                        $temporaryColumn
                    );
                }
                else{
                    //$GLOBALS['TCA'][$table]['columns']
                    if(!isset(foobarsitepackage::$arrTx_TableConfig[$this->table]['columns'])){
                        foobarsitepackage::$arrTx_TableConfig[$this->table]['columns'] = [];
                    }
                    foobarsitepackage::$arrTx_TableConfig[$this->table]['columns'] = array_merge(foobarsitepackage::$arrTx_TableConfig[$this->table]['columns'], $temporaryColumn);
                }

                $this->writeCropSize();

            }

            $this->configWritten = true;
        }
    }

    /**
     * Bildzuschnitt ins Typo3 schreiben
     *
     * @return void
     */
    protected function writeCropSize()
    {


        $arrGroessen = (new cropsizeconfig())->getSizesText();

        if(is_array($this->cropSize) && count($this->cropSize)){
            $arrSets = [];


            foreach ($this->cropSize as $vNr=>$arrCrop){

                $key = 'crop'.$vNr;
                $titel = 'Zuschnitt: '.$vNr;

                foreach ($arrCrop as $cropsize) {
                    if(!isset($cropsize[2])){ // Keine Größe definiert
                        foreach ($arrGroessen as $groesse=>$cropTitle){
                            $arrSets[$groesse][$key] = [
                                'title' => $titel,
                                'value' => $cropsize[0] / $cropsize[1]
                            ];
                        }
                    }
                    else{ // Größe definiert
                        $arrSets[$cropsize[2]][$key] = [
                            'title' => $titel,
                            'value' => $cropsize[0] / $cropsize[1]
                        ];
                    }
                }
            }

            $defaultCropSettings = [];




            foreach ($arrSets as $groesse=>$arrCrops){

                $defaultCropSettings[$groesse]['title'] = 'Zuschnitt';
                $defaultCropSettings[$groesse]['allowedAspectRatios'] = [];

                foreach ($arrCrops as $zuschnitt=>$arrCropsize){
                    $defaultCropSettings[$groesse]['allowedAspectRatios'][$zuschnitt] = $arrCropsize;
                }

                $defaultCropSettings[$groesse]['selectedRatio'] = 'NaN';
                $defaultCropSettings[$groesse]['cropArea'] = [
                    'x' => 0.0,
                    'y' => 0.0,
                    'width' => 1.0,
                    'height' => 1.0
                ];
            }

            //$GLOBALS['TCA']['TCA']['tt_content']['1111'][$this->getColumn()] =  $defaultCropSettings;
            if($this->table == foobarsitepackage::TABLE_TTCONTENT){

                foreach ($defaultCropSettings as $groesse=>$defaultCropSetting){
                    $defaultCropSetting['title'] = $arrGroessen[$groesse];
                    $GLOBALS['TCA']['tt_content']['columns'][$this->column]['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'][$groesse] = $defaultCropSetting;
                }

            }
            else{

                foreach ($defaultCropSettings as $groesse=>$defaultCropSetting){
                    $defaultCropSetting['title'] = $arrGroessen[$groesse];
                    foobarsitepackage::$arrTx_TableConfig[$this->table]['columns'][$this->column]['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'][$groesse] = $defaultCropSetting;
                }
            }


        }
   }

   public function getCropVariants()
   {
       $ret = [];


       $breakPoints = (new cropsizeconfig())->getBreakpoints();

       $merkSize = 0;
       foreach ($breakPoints as $key=>$breakPoint){
           if($merkSize==0){
               $imgWidth = cropsizeconfig::IMGFULLWIDTH;
           }
           else{
               $imgWidth = $merkSize;
           }

           if(isset($this->renderWidth['all'])&& (float) $this->renderWidth['all'] > 0){

               if(isset($this->renderWidth[$key]) && (float) $this->renderWidth[$key] > 0 ){
                   if($this->renderWidth[$key] > 1){
                       $imgWidth = $this->renderWidth[$key];
                   }
                   else{
                       $imgWidth = $imgWidth * $this->renderWidth[$key];
                   }
               }
               else{
                   if((float) $this->renderWidth['all'] > 1){
                       $imgWidth = $this->renderWidth['all'];
                   }
                   else{
                       $imgWidth = $imgWidth * $this->renderWidth['all'];
                   }
               }

           }


           $ret[$key] = ['breakpoint'=>$breakPoint,
                         'renderwidth'=>$imgWidth];

           $merkSize = $breakPoint;
       }


       return $ret;
   }

    protected function getConfigText()
    {
        return [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'default' => ''
        ];
    }

    protected function getConfigNumber()
    {
        return [
            'type' => 'input',
            'size' => 20,
            'eval' => 'int',
            'default' => ''
        ];
    }

    protected function getConfigTextMultiline()
    {
        return [
            'type' => 'text',
            'default' => ''
        ];
    }

    protected function getConfigRichText($type='default')
    {
        return [
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'enableRichtext' => true,
            'richtextConfiguration' => $type
        ];
    }

    protected function getConfigMedia()
    {
        return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                $this->getColumn(),
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN => [
                                'showitem' => '
                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette'
                            ]
                        ]
                    ]
                ],
                $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext']
            );
    }

    protected function getConfigSelect()
    {
       $arrItems = [];
       $default = null;
       if(is_array($this->options)){
           foreach ($this->options as $key=>$value){
               if($default===null){
                   $default = $key;
               }
               $arrItems[] = [$value, trim($key)];
           }
       }

        return [
            'default' => $default,
            'type'=>'select',
            'items'=> $arrItems,
            'size' => 1,
            'maxitems' => 1
        ];
    }

    protected function getConfigCheckbox()
    {
        return [
            'type' => 'check'
        ];
    }

    protected function getConfigDateTime()
    {
        return [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => [
                'upper' => mktime(0, 0, 0, 1, 1, 2038)
            ]
        ];
    }

    protected function getConfigDate()
    {
        return [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
            'range' => [
                'upper' => mktime(0, 0, 0, 1, 1, 2038)
            ]
        ];
    }

    protected function getConfigTime()
    {
        return [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'time',
            'default' => 0,
        ];
    }

    protected function getConfigLink()
    {
        return  [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'title' => 'Link',
                    ],
                ],
            ],
            'softref' => 'typolink'
        ];
    }

    
    protected function getPageReferece()
    {
        return  [
            'type' => 'group',
            'allowed' => 'pages',
            'maxitems' => 1,
            'minitems' => 1,
            'size' => 1,
            'internal_type' => 'db'
        ];
    }

    protected function getConfigFileLink()
    {
        return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            $this->getColumn(), [
            'appearance' => [
                'createNewRelationLinkTitle' => 'Dateizuordnung'
            ],
            // custom configuration for displaying fields in the overlay/reference table
            // to use the imageoverlayPalette instead of the basicoverlayPalette
            'overrideChildTca' => [
                'types' => [
                    '0' => [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                        'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                        'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                    ]
                ],
            ],
        ], $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']);
    }

    protected function getConfigUserSubList()
    {
        return foobarsitepackage::getSubFieldTCAConfig(
            $this->refElementObj
        );
    }

    protected function getConfigUserFormularlink()
    {
        return foobarsitepackage::getSubFieldTCAFormular();
    }
}
