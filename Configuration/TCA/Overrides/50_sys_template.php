<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'theme_velocasa';

    /**
     * Default TypoScript for ThemeVelocasa
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Theme velocasa'
    );
	
	// Include all
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
		$extensionKey,
		'Configuration/TypoScript',
		'--- All t3kit Configuration'
	);

	// Include Content Elements Configuration
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
		$extensionKey,
		'Configuration/TypoScript/ContentElement',
		'--- Content Elements Configuration'
	);

	// Include Page Configuration
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
		$extensionKey,
		'Configuration/TypoScript/Page',
		'--- Page Configuration'
	);

	// Include General Config
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
		$extensionKey,
		'Configuration/TypoScript/Config',
		'--- General Config'
	);

	// Include Plugin Config
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
		$extensionKey,
		'Configuration/TypoScript/Plugin',
		'--- Plugin Config'
	);
});
