<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'theme_velocasa';

    /**
     * Default PageTS for ThemeVelocasa
     */
	// BE layouts
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
		$extensionKey,
		'Configuration/TSconfig/Page/Mod/WebLayout/BackendLayouts.tsconfig',
		'All BE layouts'
	);
	// Content Elements
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
		$extensionKey,
		'Configuration/TSconfig/Page/Mod/Wizards/T3kitContentElements.tsconfig',
		'All t3kit Content Elements'
	);
	// RTE
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
		$extensionKey,
		'Configuration/TSconfig/Page/RTE.tsconfig',
		'RTE'
	);
	// TCAdefaults
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
		$extensionKey,
		'Configuration/TSconfig/Page/TCAdefaults.tsconfig',
		'TCAdefaults'
	);
	// TCEFORM
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
		$extensionKey,
		'Configuration/TSconfig/Page/TCEFORM.tsconfig',
		'TCEFORM'
	);
	// TCEMAIN
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
		$extensionKey,
		'Configuration/TSconfig/Page/TCEMAIN.tsconfig',
		'TCEMAIN'
	);
});
