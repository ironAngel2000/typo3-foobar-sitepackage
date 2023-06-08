<?php

defined('TYPO3_MODE') || die();

// Hier eigene Tabellen eintragen

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(\FooBar\foobarSitePackage\foobarsitepackage::TABLE_TXFOOBARSITE);

