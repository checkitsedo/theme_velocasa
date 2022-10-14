<?php
defined('TYPO3') or die('Access denied.');

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:theme_velocasa/Configuration/TsConfig/Page/All.tsconfig">');


/*
 * ###########################
 * Include default velocasa PageTS config
 * ===========================
 */

// BE layouts
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:theme_velocasa/Configuration/TSconfig/Page/Mod/WebLayout/BackendLayouts.tsconfig'"
);

// RTE
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:theme_velocasa/Configuration/TSconfig/Page/RTE.tsconfig'"
);

// TCAdefaults
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:theme_velocasa/Configuration/TSconfig/Page/TCAdefaults.tsconfig'"
);

// TCEFORM
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:theme_velocasa/Configuration/TSconfig/Page/TCEFORM.tsconfig'"
);

// TCEMAIN
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:theme_velocasa/Configuration/TSconfig/Page/TCEMAIN.tsconfig'"
);
