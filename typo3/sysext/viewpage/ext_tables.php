<?php
defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	// Module Web->View
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'web',
		'view',
		'after:layout',
		array(
			'ViewModule' => 'show'
		),
		array(
			'icon' => 'EXT:viewpage/Resources/Public/Icons/module-viewpage.png',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
			'access' => 'user,group'
		)
	);
}
