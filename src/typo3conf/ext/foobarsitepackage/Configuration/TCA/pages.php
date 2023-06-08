<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 26.02.2019
 * Time: 10:57
 */

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'foobarsitepackage',
    'Configuration/PageTS/BackendLayouts.tsconfig',
    'Backend Layouts: Homepage/Default'
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'foobarsitepackage',
    'Configuration/PageTS/Elements.tsconfig',
    'Pflege Elemente'
);


