<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'foobarsitepackage',
        'Configuration/TypoScript',
        'FooBar Sitepackage'
    );
});
