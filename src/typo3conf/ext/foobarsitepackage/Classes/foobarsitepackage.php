<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 26.02.2019
 * Time: 10:43
 */

namespace FooBar\foobarSitePackage;

use Doctrine\DBAL\DBALException;
use Exception;
use FooBar\foobarSitePackage\Config\dnyDbFields;
use FooBar\foobarSitePackage\Config\elementconfig;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\Config\palettconfig;
use FooBar\foobarSitePackage\Config\elements;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Schema\SchemaMigrator;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Database\Schema\SqlReader;
use FooBar\foobarSitePackage\Config\cropsizeconfig;
use TYPO3\CMS\Backend\Configuration\SiteTcaConfiguration;

class foobarsitepackage
{
    const TABLE_TTCONTENT = 'tt_content';
    const TABLE_TXFOOBARSITE = 'tx_foobarsitepackage_inhblockitem';
    const TABLE_TXDBCONFIG = 'tx_foobarsitepackage_dbconfig';
    const TABLE_TXDBZUORDNUNG = 'tx_foobarsitepackage_dbzuordnung';

    public static $arrTx_TableConfig;
    public static $cntrlTypes = 1;
    public static $configurationDirectory = '';


    public static $arrTsConfig = [];
    public static $arrTypoScript = [];

    protected $elements ;

    protected $globalFileds;

    protected $ext_tables_file;

    public function __construct($writeConfig=false)
    {
        $confFolder = str_replace('/Classes','',__DIR__).'/SitepackageConfig/';
        if(!is_dir($confFolder)) {
            mkdir($confFolder);
        }
        self::$configurationDirectory = $confFolder;

        $this->ext_tables_file = str_replace('/Classes','/',__DIR__).'ext_tables.sql';    

        $this->globalFileds = [];

        if($writeConfig===true) {

            if(file_exists($this->ext_tables_file)) {
                unlink($this->ext_tables_file);
            }

            foobarsitepackage::$arrTx_TableConfig = [];

            foobarsitepackage::$arrTx_TableConfig[foobarsitepackage::TABLE_TXFOOBARSITE] = [];

            // Alle Bestehenden Typo3 Items aus der Auswahl entfernen
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['columns']['CType']['config']['items'] = [];

            $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['columns']['CType']['config']['items'][] = ['Standard','--div--'];
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['columns']['CType']['config']['items'][] = ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14','list','content-plugin'];

            $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['columns']['CType']['exclude'] = 0;
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['columns']['colPos']['exclude'] = 0;
            //$GLOBALS['TCA']['tt_content']['types'] = [];

            //Steuertabellen ausblenden
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TXDBCONFIG]['ctrl']['hideTable'] = 1;
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TXDBZUORDNUNG]['ctrl']['hideTable'] = 1;
            
            foobarsitepackage::$arrTx_TableConfig[foobarsitepackage::TABLE_TXFOOBARSITE]['columns']['CType']['config']['type'] = 'select';
            foobarsitepackage::$arrTx_TableConfig[foobarsitepackage::TABLE_TXFOOBARSITE]['columns']['CType']['config']['items'][0] = [
                    'Liste',
                '--div--'
            ];


            //Verknüpfung Tabellen tt_content mit tx_foobarsitepackage_inhblockitem
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['columns'] = array_replace_recursive(
                $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['columns'],
                [
                    foobarsitepackage::TABLE_TXFOOBARSITE => [
                        'label' => 'Eintrag',
                        'config' => [
                            'type' => 'inline',
                            'foreign_table' => foobarsitepackage::TABLE_TXFOOBARSITE,
                            'foreign_field' => 'tt_content',
                            'appearance' => [
                                'useSortable' => true,
                                'showSynchronizationLink' => true,
                                'showAllLocalizationLink' => true,
                                'showPossibleLocalizationRecords' => true,
                                'showRemovedLocalizationRecords' => false,
                                'expandSingle' => true,
                                'collapseAll' => true,
                                'enabledControls' => [
                                    'localize' => true,
                                ]
                            ],
                            'behaviour' => [
                                'mode' => 'select',
                                'localizeChildrenAtParentLocalization' => true,
                            ]
                        ]
                    ]
                ]
            );

            $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['ctrl']['label'] = 'header';
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TTCONTENT]['ctrl']['label_alt'] = '';

        }

        //Elemente Definition Aufrufen
        $this->elements = [];

        $dir = __DIR__;
        $dir = str_replace('/Classes','/Configuration/myelements/',$dir);

        $files = glob($dir.'*.php');

        if(is_array($files) && count($files)) {
            foreach ($files as $confFile) {
                $this->elements[] = include  $confFile;
            }
        }

        if($writeConfig===true) {
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

    }


    /**
     * TCA Konfiguration für Kindelement
     *
     * @param elementconfig $objElement
     * @return array
     */
    public static function getSubFieldTCAConfig(elementconfig $objElement)
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
                            'default' => $objElement->getItemName(),
                        ],
                    ],
                ],
            ],
            'type' => 'inline',
        ];
        return $fileFieldTCAConfig;
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

    /**
     * TCA - Tabllenarray ausgaben für Elementtabelle
     *
     * @param $tabelle
     * @return mixed
     */
    public function getTx_TableConfig($tabelle)
    {
        return foobarsitepackage::$arrTx_TableConfig[$tabelle];
    }

    /**
     * Systemfelder für TCA festlegen
     *
     * @param $table
     * @param string $parentTable
     */
    protected function writeTableSystemFields($table, $parentTable = foobarsitepackage::TABLE_TTCONTENT)
    {

        foobarsitepackage::$arrTx_TableConfig[$table]['ctrl'] = [
            'label' => 'header',
            'sortby' => 'sorting',
            'crdate' => 'crdate',
            'cruser_id' => 'cruser_id',
            'title' => 'Element',
            'delete' => 'deleted',
            'versioningWS' => true,
            'origUid' => 't3_origuid',
            'hideTable' => true,
            'hideAtCopy' => true,
            'prependAtCopy' => 'Element Kopieren',
            'transOrigPointerField' => 'l10n_parent',
            'transOrigDiffSourceField' => 'l10n_diffsource',
            'languageField' => 'sys_language_uid',
            'enablecolumns' => [
                'disabled' => 'hidden',
                'starttime' => 'starttime',
                'endtime' => 'endtime',
            ],
            'type' => 'elemtype'
        ];

        foobarsitepackage::$arrTx_TableConfig[$table]['interface'] = [
            'showRecordFieldList' => '
                    '.$parentTable.',
                '
        ];


        foobarsitepackage::$arrTx_TableConfig[$table]['types'] = [
            1 => [
                'showitem' => '
                --palette--;Einstellungen;general, elemtype;Neues Element - Bitte Speichern!,
                --palette--;;hiddenLanguagePalette,
                '
            ],
        ];

        $tx_ttCont = new fieldconfig('Elternemelent',$table);
        $tx_ttCont->setColumn($parentTable);
        $tx_ttCont->setUserConfig([
            'exclude' => true,
            'label' => 'Elternemelent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => $parentTable,
                'foreign_table_where' => 'AND '.$parentTable.'.pid=###CURRENT_PID### AND '.$parentTable.'.CType like "%foobarsitepackage_%"',
                'maxitems' => 1,
                'default' => 0
            ],
        ]);

        $tx_sys_language_uid = new fieldconfig('Sprache',$table);
        $tx_sys_language_uid->setColumn('sys_language_uid');
        $tx_sys_language_uid->setUserConfig([
            'exclude' => 1,
            'label' => 'Sprache',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    [
                        'alle Sprachen',
                        -1
                    ],
                    [
                        'Standard',
                        0
                    ]
                ],
                'allowNonIdValues' => true,
            ]
        ]);

        $tx_l10n_parent = new fieldconfig('Zuordnung',$table);
        $tx_l10n_parent->setColumn('l10n_parent');
        $tx_l10n_parent->setUserConfig([
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'Zuordnung',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0
                    ]
                ],
                'foreign_table' => $table,
                'foreign_table_where' => 'AND '.$table.'.pid=###CURRENT_PID### AND '.$table.'.sys_language_uid IN (-1,0)',
                'default' => 0
            ]
        ]);

        $tx_l10n_diffsource = new fieldconfig('diffsource',$table);
        $tx_l10n_diffsource->setColumn('l10n_diffsource');
        $tx_l10n_diffsource->setUserConfig([
            'config' => [
                'type' => 'passthrough'
            ]
        ]);

        $tx_l10n_mode = new fieldconfig('l10n_mode',$table);
        $tx_l10n_mode->setColumn('l10n_mode');
        $tx_l10n_mode->setUserConfig([
            'exclude' => true,
            'label' => 'l10n_mode',
            'config' => [
                'type' => 'input',
                'default' => 0
            ]
        ]);

        $tx_ttCont->writeConfig();
        $tx_sys_language_uid->writeConfig();
        $tx_l10n_parent->writeConfig();
        $tx_l10n_diffsource->writeConfig();
        $tx_l10n_mode->writeConfig();


    }

    protected function setDefaultFields()
    {
        $this->writeTableSystemFields(foobarsitepackage::TABLE_TXFOOBARSITE);

        $GLOBALS['TCA'][foobarsitepackage::TABLE_TXFOOBARSITE]['columns']['categories'] = [
            'config' => [
                'label' => 'Categories',
                'exclude' => FALSE,
                'fieldConfiguration' => array(
                    'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.title ASC',
                ),
                'l10n_mode' => 'exclude',
                'l10n_display' => 'hideDiff',
            ]
         ];

        $tx_hidden = new fieldconfig('hidden',foobarsitepackage::TABLE_TXFOOBARSITE);
        $tx_hidden->setColumn('hidden');
        $tx_hidden->setUserConfig([
            'exclude' => true,
            'label' => 'Ausblenden',
            'config' => [
                'default' => 0,
                'type' => 'check',
                'items' => [
                    '0' =>[
                        '0' => 'Eingeblendt'
                    ],
                    '1' => [
                        '0' => 'Augeblendet'
                    ]
                ]
            ]
        ]);

        $tx_starttime = new fieldconfig('starttime',foobarsitepackage::TABLE_TXFOOBARSITE);
        $tx_starttime->setColumn('starttime');
        $tx_starttime->setUserConfig([
            'exclude' => true,
            'label' => 'Startzeit',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ]);

        $tx_endtime = new fieldconfig('endtime',foobarsitepackage::TABLE_TXFOOBARSITE);
        $tx_endtime->setColumn('endtime');
        $tx_endtime->setUserConfig([
            'exclude' => true,
            'label' => 'Endzeit',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ]);


        //CType über Userfunction
        $tx_ctype = new fieldconfig('elemtype',foobarsitepackage::TABLE_TXFOOBARSITE);
        $tx_ctype->setColumn('elemtype');
        $tx_ctype->setUserConfig([
            'exclude' => 1,
            'label' => 'Neues Element - bitte speichern',
            'config' => [
                'type' => 'user',
                'renderType' => 'usrElementsCType',
            ]
        ]);



        $tx_hidden->writeConfig();
        $tx_starttime->writeConfig();
        $tx_endtime->writeConfig();
        $tx_ctype->writeConfig();

    }


    public function writeConfig()
    {
        $this->setDefaultFields();

        if(is_array($this->elements)){
            foreach ($this->elements as $objelement){
                if($objelement instanceof elements){
                    $objelement->writeConfFiles();
                }
            }
        }
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


    public function getTypoScriptConfig()
    {

        $typopScriptConf = 'tt_content{'."\r\n";
        if(is_array($this->elements)){
            foreach ($this->elements as $objelement){
                if($objelement instanceof elements){
                    $typopScriptConf .= $objelement->getTypoScriptConfig();
                }
            }
        }

        $typopScriptConf .= '}';

        return $typopScriptConf;
    }

    /**
     * @return elements
     */
    public function getElements()
    {
        return $this->elements;
    }


    private $arrElementDbFields = [];

    private function getElementDatabaseFields()
    {

       if(is_array($this->elements)){
          foreach ($this->elements as &$objElement){

               $elemConfig = null;

               if($objElement instanceof elements){
                   dnyDbFields::setDbFields($objElement);
               } // endif

           }
       }
    }


    private function getPagesSql() : string
    {
        $sqlDump = "
            CREATE TABLE pages (
                nav_icon int(11) unsigned DEFAULT '0',
                thumbnail int(11) unsigned DEFAULT '0',
            );      
              
        ";

        if(!isset($GLOBALS['TCA']['pages'])){
            $GLOBALS['TCA']['pages'] = [];
        }

        return $sqlDump;
    }

    private function getSysLanguageSql() : string
    {
        $sqlDump = "
            CREATE TABLE sys_language (
                nav_title varchar(255) DEFAULT '' NOT NULL,
                locale varchar(20) DEFAULT '' NOT NULL,
                hreflang varchar(20) DEFAULT '' NOT NULL,
                direction varchar(3) DEFAULT '' NOT NULL,
            );     
               
        ";


        if(!isset($GLOBALS['TCA']['sys_language'])){
            $GLOBALS['TCA']['sys_language'] = [];
        }

        return $sqlDump;
    }

    private function getTtContentSql() : string
    {
        $sqlDump = "
            CREATE TABLE tt_content (
                tx_foobarsitepackage_inhblockitem int(11) unsigned DEFAULT '0',
                panel_class  varchar(255) DEFAULT '' NOT NULL,
                quote_source varchar(255) DEFAULT '' NOT NULL,
                quote_link varchar(1024) DEFAULT '' NOT NULL,
                subselectelement int(11) unsigned DEFAULT '0' NOT NULL,
        ";


        if(isset(dnyDbFields::$arrElementDbFields[foobarsitepackage::TABLE_TTCONTENT]) && is_array(dnyDbFields::$arrElementDbFields[foobarsitepackage::TABLE_TTCONTENT])){
            foreach (dnyDbFields::$arrElementDbFields[foobarsitepackage::TABLE_TTCONTENT] as $arrEntry){
                $sqlDump.= $arrEntry[1].", \r\n";
            }
        }


        $sqlDump .= "
            );
        
        ";

        if(!isset($GLOBALS['TCA']['tt_content'])){
            $GLOBALS['TCA']['tt_content'] = [];
        }

        return $sqlDump;
    }


    private function getTxfoobarsitepackageSql() : string
    {
        $sqlDump = "
            CREATE TABLE tx_foobarsitepackage_inhblockitem (
                uid int(11) unsigned NOT NULL auto_increment,
                pid int(11) DEFAULT '0' NOT NULL,
                tt_content int(11) unsigned DEFAULT '0',
                tstamp int(11) unsigned DEFAULT '0' NOT NULL,
                crdate int(11) unsigned DEFAULT '0' NOT NULL,
                cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
                deleted smallint unsigned DEFAULT '0' NOT NULL,
                hidden smallint unsigned DEFAULT '0' NOT NULL,
                starttime int(11) unsigned DEFAULT '0' NOT NULL,
                endtime int(11) unsigned DEFAULT '0' NOT NULL,
                sorting int(11) DEFAULT '0' NOT NULL,
                fe_group varchar(255) DEFAULT '' NOT NULL,
                CType varchar(255) DEFAULT '' NOT NULL,
                categories int(11) DEFAULT '0' NOT NULL,
                selected_categories text COLLATE utf8mb4_unicode_ci,
                category_field varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
                elemtype  varchar(255) DEFAULT '' NOT NULL,
                sys_language_uid int(11) DEFAULT '0' NOT NULL,
                l10n_mode int(11) DEFAULT '0' NOT NULL,
                l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
                l10n_diffsource mediumblob NULL,
                l10n_state text NULL,
                t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_id int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_label varchar(255) DEFAULT '' NOT NULL,
                t3ver_state smallint DEFAULT '0' NOT NULL,
                t3ver_stage int(11) DEFAULT '0' NOT NULL,
                t3ver_count int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_tstamp int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_move_id int(11) unsigned DEFAULT '0' NOT NULL,
                t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,
                header varchar(255) DEFAULT '' NOT NULL,
            
        ";

        if(isset(dnyDbFields::$arrElementDbFields[foobarsitepackage::TABLE_TXFOOBARSITE]) && is_array(dnyDbFields::$arrElementDbFields[foobarsitepackage::TABLE_TXFOOBARSITE])){
            foreach (dnyDbFields::$arrElementDbFields[foobarsitepackage::TABLE_TXFOOBARSITE] as $arrEntry){
                $sqlDump.= $arrEntry[1].", \r\n";
            }
        }

        $sqlDump .= "
        
                PRIMARY KEY (uid),
                KEY parent (pid),
                KEY t3ver_oid (t3ver_oid,t3ver_wsid),
                KEY language (l10n_parent,sys_language_uid)
            );
        ";


        if(!isset($GLOBALS['TCA'][foobarsitepackage::TABLE_TXFOOBARSITE])){
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TXFOOBARSITE] = [];
        }


        return $sqlDump;
    }


    private function getTxDbConfigSQL()
    {
       $unique = ' UNIQUE KEY fieldKey (fieldKey,dbfield,dbtable) ';

        $sqlDump = "
            CREATE TABLE ".foobarsitepackage::TABLE_TXDBCONFIG." (
                uid int(11) unsigned NOT NULL auto_increment,
                fieldKey varchar(64) DEFAULT '' NOT NULL,
                dbfield varchar(64) DEFAULT '' NOT NULL,
                dbtable varchar(64) DEFAULT '' NOT NULL,
                CType varchar(255) DEFAULT '' NOT NULL,
                infofield text,

                ".$unique."
        );";

        $this->checkTableExists(foobarsitepackage::TABLE_TXDBCONFIG, $sqlDump);

        if(!isset($GLOBALS['TCA'][foobarsitepackage::TABLE_TXDBCONFIG])){
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TXDBCONFIG] = [];
        }

       

        return $sqlDump;
    }

    private function getTxDbZuordnungSQL()
    {
        $unique = ' UNIQUE KEY fieldKey (fieldKey,dbfield,dbtable) ';

        $sqlDump = "
            CREATE TABLE ".foobarsitepackage::TABLE_TXDBZUORDNUNG." (
                uid int(11) unsigned NOT NULL auto_increment,
                fieldKey varchar(64) DEFAULT '' NOT NULL,
                dbfield varchar(64) DEFAULT '' NOT NULL,
                dbtable varchar(64) DEFAULT '' NOT NULL,
                CType varchar(255) DEFAULT '' NOT NULL,
                configKey varchar(64) DEFAULT '' NOT NULL,
                infofield text,

                 ".$unique."
        );";

        $this->checkTableExists(foobarsitepackage::TABLE_TXDBZUORDNUNG, $sqlDump);

        if(!isset($GLOBALS['TCA'][foobarsitepackage::TABLE_TXDBZUORDNUNG])){
            $GLOBALS['TCA'][foobarsitepackage::TABLE_TXDBZUORDNUNG] = [];
        }

        return $sqlDump;
    }


    private function checkTableExists($tablename, $sqlCreate, $keySql='')
    {

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable($tablename);

        $sql = "SHOW TABLES LIKE '".$tablename."';";

        $statement = $queryBuilder->executeQuery($sql);

        $tablefound = false;


        while ($record = $statement->fetch(\PDO::FETCH_ASSOC)) {
            if(is_array($record)){
                $tablefound = true;
            }
        }

        if($tablefound === false){

            if(stripos($sqlCreate,'auto_increment')!==false){
                $sqlCreate = str_replace('auto_increment',' ',$sqlCreate);
                $queryBuilder->executeQuery($sqlCreate);
    
                $primary = 'ALTER TABLE `'.trim($tablename).'` MODIFY `uid` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT';
                $queryBuilder->executeQuery($primary);
            }
            else{
                $queryBuilder->executeQuery($sqlCreate);
            }
        }

    }


    public function writeSqlSchemaSystem()
    {
        $sqlDump = [];
        $sqlDump[] = $this->getTxDbConfigSQL();
        $sqlDump[] = $this->getTxDbZuordnungSQL();
        $sqlDump[] = $this->getPagesSql();
        $sqlDump[] = $this->getSysLanguageSql();

        $this->sqlUpdateSuggestions($sqlDump);

    }

    public function writeSqlSchemaContent()
    {
        $sqlDump = [];
        $sqlDump[] = $this->getTtContentSql();
        $sqlDump[] = $this->getTxfoobarsitepackageSql();

        $this->sqlUpdateSuggestions($sqlDump);

    }


    private function sqlUpdateSuggestions($sqlDump)
    {
        $strQuery = implode(PHP_EOL, $sqlDump);
        file_put_contents($this->ext_tables_file, $strQuery . PHP_EOL . PHP_EOL, FILE_APPEND);
    }

    /**
     * @return array
     */
    public function getAllFields($arrTypeFilter = [])
    {
        $ret = [];

        if(is_array($this->elements)){
            foreach ($this->elements as $objElement){
                if($objElement instanceof elements){
                    $arrElemConf = $objElement->getElementConfig();

                    foreach ($arrElemConf as $objElemConf){

                        if($objElemConf instanceof elementconfig){

                            $arrPaletten = $objElemConf->getPaletten();

                            if(count($arrPaletten)){

                                foreach ($arrPaletten as $objPalette) {

                                    if ($objPalette instanceof palettconfig) {

                                        $aktTable = trim($objPalette->getTable());

                                        $arrRows = $objPalette->getFields();

                                        if(is_array($arrRows)){

                                            foreach ($arrRows as $arrFields){

                                                if(is_array($arrFields)){

                                                    foreach ($arrFields as $objField){

                                                        if(count($arrTypeFilter)){
                                                            foreach ($arrTypeFilter as $filterType){
                                                                if($objField->getType()==$filterType){
                                                                    $ret[$aktTable][] = $objField;
                                                                }
                                                            }
                                                        }
                                                        else{
                                                            $ret[$aktTable][] = $objField;
                                                        }

                                                    } //foreach ($arrFields as $objField)

                                                } // if(is_array($arrFields))

                                            } //foreach ($arrRows as $arrFields)

                                        } //if(is_array($arrRows))

                                    } //if ($objPalette instanceof palettconfig)

                                } //foreach ($arrPaletten as $objPalette)

                            } //if(count($arrPaletten))

                        }

                    }

                }
            }
        }

        return $ret;
    }

    public function getElementsTSConfig()
    {
        $tsConfig = '';
        $arrElemConf = [];

        if(is_array(foobarsitepackage::$arrTsConfig)){
            foreach (foobarsitepackage::$arrTsConfig as $arrConf){

                if(is_array($arrConf)){
                    foreach ($arrConf as $colKey=>$arrConfElem){
                        if(!isset($arrElemConf[$colKey])){
                            $arrElemConf[$colKey] = [];
                        }
                        $arrElemConf[$colKey][] = $arrConfElem;
                    }
                }
            }
        }

        foreach ($arrElemConf as $colKey=>$arrElements){
            $tsConfig .= '[globalVar = GP:colPos=='.$colKey.']'."\r\n";

            $subConfig = [];
            $subConfig['mod']['wizards']['newContentElement']['wizardItems'] = [];
            $strShow = '';

            $subEmConf = [];
            foreach ($arrElements as $arrElementConfig){

                foreach ($arrElementConfig as $key=>$selfConfig){
                    switch (trim($key)){
                        case 'foobar':
                            if(!isset($subEmConf[$key])){
                                $subEmConf[$key]['header'] = $selfConfig['header'];
                            }
                            foreach ($selfConfig['elements'] as $elementName => $elementConfig){
                                $subEmConf[$key]['elements'][trim($elementName)] = $elementConfig;

                                if(isset($elementConfig['iconIdentifier'])){

                                    if(trim($elementConfig['iconIdentifier'])!==''){

                                        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

                                        $fileName = $elementConfig['iconIdentifier'].'.svg';

                                        $iconRegistry->registerIcon($elementConfig['iconIdentifier'], \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                                            ['source' => 'EXT:kmssitepackage/Resources/Public/Icons/ContentElements/' . $fileName]);

                                    }

                                }
                                if(trim($strShow)!==''){
                                    $strShow .= ', ';
                                }
                                $strShow .= trim($elementName);
                            }
                            break;
                        default:
                            if(!isset($subEmConf[$key])){
                                $subEmConf[$key] = $selfConfig;
                            }
                            break;
                    }
                }
            }

            if(trim($strShow)!==''){
                $subEmConf['foobar']['show'] = $strShow;
            }

            $subConfig['mod']['wizards']['newContentElement']['wizardItems'] = $subEmConf;
            $tsConfig .= $this->array2tsconfig($subConfig);
            $tsConfig .= '[end]'."\r\n";
        }
        return $tsConfig;
    }

}
