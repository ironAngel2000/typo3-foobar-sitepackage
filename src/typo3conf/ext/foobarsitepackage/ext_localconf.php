<?php
defined('TYPO3_MODE') || die();

spl_autoload_register(function ($class_name) {

    $arrClassname = explode('\\',$class_name);

    $dir = '';
    $stDir = false;
    foreach ($arrClassname as $segment){
        if($stDir===true){
            if(trim($segment)!==trim(end($arrClassname))) {
                $dir .= '/';
                $dir .= strtolower($segment);
            }
        }
        elseif(trim($segment)==='foobarSitePackage'){
            $stDir = true;
        }
    }

    $basedir =$_SERVER['DOCUMENT_ROOT'].'/typo3conf/ext/foobarsitepackage';

    $file = $basedir.'/Classes'.$dir.'/'.end($arrClassname).'.php';
    if(is_file($file)){
        require_once $file;
    }

});

$foobarsitepackage =  new \FooBar\foobarSitePackage\foobarsitepackage();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['defaultCategorizedTables'] = '';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:foobarsitepackage/Configuration/RTE/Default.yaml';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][mktime(1,1,1,3,6,2019)] = [
    'nodeName' => 'usrElementsCType',
    'priority' => 40,
    'class' => \FooBar\foobarSitePackage\Processor\usrElementsCType::class
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][mktime(1,1,1,3,13,2019)] = [
    'nodeName' => 'usrListType',
    'priority' => 40,
    'class' => \FooBar\foobarSitePackage\Processor\usrListType::class,
    'table' => \FooBar\foobarSitePackage\foobarsitepackage::TABLE_TXFOOBARSITE
];

// Konfiguration initialisieren
$foobarsitepackage =  new \FooBar\foobarSitePackage\foobarsitepackage();

//TSConfig einbinden
$tsConfig = $foobarsitepackage->getElementsTSConfig();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($tsConfig);


//TypoScript einbinden
$setupTs = $foobarsitepackage->getTypoScriptConfig();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup($setupTs);

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$arrElement = $foobarsitepackage->getElements();
if(is_array($arrElement)){
    foreach ($arrElement as $objElement){
        $arrConfig = $objElement->getElementConfig();
        if(is_array($arrConfig)){
            foreach ($arrConfig as $objConfig){

                $iconRegistry->registerIcon(
                    $objConfig->getItemName(),
                    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
                    ['source' => 'EXT:foobarsitepackage/Resources/Public/Icons/myElements.gif']
                );

            }
        }
    }
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['defaultCategorizedTables'] = 'pages,tt_content,sys_file_metadata,'.\FooBar\foobarSitePackage\foobarsitepackage::TABLE_TXFOOBARSITE;


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'FooBar Sitepackage',
    'foobarsitepackage',
    [],
    []
);

$TYPO3_CONF_VARS['SYS']['displayErrors'] = '2';
$TYPO3_CONF_VARS['SYS']['devIPmask'] = '*';

if (TYPO3_MODE === 'BE') {
    $pageRenderer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);
    $pageRenderer->loadRequireJsModule('/typo3conf/ext/foobarsitepackage/Resources/Public/JavaScript/MyBackendLib');
    $pageRenderer->loadRequireJsModule('/typo3conf/ext/foobarsitepackage/Resources/Public/JavaScript/JQueryInit');
    $pageRenderer->loadRequireJsModule('/typo3conf/ext/foobarsitepackage/Resources/Public/JavaScript/DocumentLoad');
}


// ke_serach Hooks einbinden
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerAdditionalFields'][] = 'FooBar\foobarsitepackage\keSearch\keSearchHook';

// register custom indexer hook
// adjust this to your namespace and class name
// adjust the autoloading information in composer.json, too!
$customIndexerClassName = 'FooBar\foobarsitepackage\keSearch\foobarsitepackageIndexer'; // Indizierung tx_foobarsitepackage_inhblockitem
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] = $customIndexerClassName;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] = $customIndexerClassName;

// register hooks for indexing additional fields
$additionContentClassName = 'FooBar\foobarsitepackage\keSearch\AdditionalContentFields'; // Übersteuerung tt_content
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyPageContentFields'][] = $additionContentClassName;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyContentFromContentElement'][] = $additionContentClassName;

if(TYPO3_MODE === 'BE'){
// Datenbankschreiben
//    $foobarsitepackage->writeSqlSchemaContent();
}
