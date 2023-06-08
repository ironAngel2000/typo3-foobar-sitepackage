<?php
namespace FooBar\foobarSitePackage;

use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\dnyDbFields;

class foobarsitepackage 
{

    const TABLE_TTCONTENT = 'tt_content';
    const TABLE_TXFOOBARSITE = 'tx_foobarsitepackage_inhblockitem';
    const TABLE_TXDBCONFIG = 'tx_foobarsitepackage_dbconfig';

    private $elemntsConfigs = [];

    public static $configurationDirectory = '';
    public static $arrTsConfig = [];
    public static $arrTx_TableConfig = [];

    private $tsElementConfigDir = '';
    private $tsconfigConfigDir = '';

    public function __construct(private $writeConfig = false)
    {
        $confFolder = str_replace('/Classes','',__DIR__).'/SitepackageConfig/';
        if(!is_dir($confFolder)) {
            mkdir($confFolder);
        }
        self::$configurationDirectory = $confFolder;

        $tsConfigFolder = str_replace('/Classes','/Configuration/TypoScript/',__DIR__);
        if(!is_dir($tsConfigFolder)) {
            mkdir($tsConfigFolder);
        }
        $this->tsElementConfigDir = $tsConfigFolder;

        $tsconfigConfigDir = str_replace('/Classes','/Configuration/TsConfig/',__DIR__);
        if(!is_dir($tsconfigConfigDir)) {
            mkdir($tsconfigConfigDir);
        }
        $this->tsconfigConfigDir = $tsconfigConfigDir;


        echo '<pre>';

        $this->readElementsConfig();

    }

   /**
     * TCA Konfiguration für Formular Element als Kindelement
     *
     * @return array
     */
    public static function getSubFieldTCAFormular()
    {

        $fileFieldTCAConfig = [
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'useSortable' => true,
                'useCombination' => true,
                'levelLinksPosition' => 'top',
                'showAllLocalizationLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'showSynchronizationLink' => 1,
                'enabledControls' => [
                    'info' => true,
                    'new' => true,
                    'dragdrop' => true,
                    'sort' => true,
                    'hide' => false,
                    'delete' => true,
                ],
            ],
            'foreign_table' => foobarsitepackage::TABLE_TTCONTENT,
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'subselectelement',
            'overrideChildTca' => [
                'columns' => [
                    'colPos' => [
                        'config' => [
                            'default' => 999
                        ],
                    ],
                    'CType' => [
                        'config' => [
                            'default' => "form_formframework",
                        ],
                    ],
                ],
            ],
            'type' => 'inline',
        ];
        return $fileFieldTCAConfig;
    }




    protected function readElementsConfig()
    {
         //Elemente Definition Aufrufen
         $this->elements = [];

         $dir = __DIR__;
         $dir = str_replace('/Classes','/Configuration/myelements/',$dir);
 
         $files = glob($dir.'*.php');
 
         if(is_array($files) && count($files)) {
             foreach ($files as $confFile) {
                 $this->elemntsConfigs[] = include  $confFile;
             }
         }

         //if($this->writeConfig){
            $this->getAllElementsFields();

            $typoScriptContent = '';

            foreach($this->elemntsConfigs as $objElement) {
               if($objElement instanceof elements) {
   
                   $objElement->writeConfFiles();

                   $elemConfig = $objElement->getElementConfig();

                   if(is_array($elemConfig)) foreach ( $elemConfig as &$configElement){
           
                       $elementName = $configElement->getItemName();

                       $typoScriptContent .= $objElement->getTypoScriptConfig()."\r\n"."\r\n";
                       
                       break;
                   }                   
               }
           }

           $typoScriptFile = $this->tsElementConfigDir.'MyElements.typoscript';
           if(isset($typoScriptFile)) {
            unlink($typoScriptFile);
           }

           file_put_contents($typoScriptFile, $typoScriptContent);

           $this->writeTsConfigFiles();
           
         //}

 

         /*
         if($thwriteConfig===true) {
             $this->writeSqlSchemaSystem();
         }
 
         $this->getElementDatabaseFields();
 
         if($writeConfig===true) {
             $this->writeSqlSchemaContent();
         }
 
         // Wenn writeConfig true Konfiguration schreiben
         if($writeConfig===true){
             $this->writeConfig();
         }
         */
    }

    protected function getAllElementsFields()
    {
        foreach($this->elemntsConfigs as $objElement) {
            if($objElement instanceof elements) {
                dnyDbFields::setDbFields($objElement);
            }
        }
    }

    private $tsContent = '';
    protected function writeTsConfigFiles()
    {
        $tsConfigFile = $this->tsconfigConfigDir.'foobarsitepackage.tsconfig';
        if(isset($tsConfigFile)) {
             unlink($tsConfigFile);
        }

        $content = "<?php\n\n";
        $content .= "\$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['navFrameArticles'] = [\n";

        $this->tsContent = '';

        $this->arrayToTsConfig(self::$arrTsConfig, 1);

        $content .= $this->tsContent;

        $content .= "];\n";

        file_put_contents($tsConfigFile, $content);
    }

    private function arrayToTsConfig($array, $level = 0)
    {
        foreach($array as $key => $sectionValue) {

            $this->tsContent .= str_repeat("\t",$level)."'{$key}' => ";

            if(is_array($sectionValue)) {
                $this->tsContent .= "[\r\n";
                    $this->arrayToTsConfig($sectionValue, ($level + 1));
                $this->tsContent .= str_repeat("\t",$level)."],\n";
            } else {
                $this->tsContent .= "'{$sectionValue}',\n";
            }
        }
    }

}