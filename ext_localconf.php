<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VFVC.' . $_EXTKEY,
	'Pi1',
	array(
		'Contact' => 'list, show, search',
		
	),
	// non-cacheable actions
	array(
		'Contact' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VFVC.' . $_EXTKEY,
	'Pi2',
	array(
		'Contact' => 'list, show, search',
		
	),
	// non-cacheable actions
	array(
		'Contact' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VFVC.' . $_EXTKEY,
	'Pi3',
	array(
		'Contact' => 'list, show, search',
		
	),
	// non-cacheable actions
	array(
		'Contact' => '',
		
	)
);
