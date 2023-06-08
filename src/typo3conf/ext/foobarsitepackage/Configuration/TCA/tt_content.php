<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 26.02.2019
 * Time: 11:46
 */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'FooBar Sitepackage',
        'foobarsitepackage',
//        'EXT:kms_sitepackages/Resources/Public/Icons/ContentElements/foobarelement.gif'
    ),
    'CType',
    'foobarsitepackage'
);

// Konfiguration Schreiben
$foobarsitepackage = new  \FooBar\foobarSitePackage\foobarsitepackage(true);

// ke_search - Indexer registrieren
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . 'foobarsitepackageIndexer';
