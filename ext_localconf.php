<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VFVC.' . $_EXTKEY,
	'Pi1',
	array(
		'Contact' => 'list, show, search',
		'Organisme' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Contact' => '',
		'Organisme' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VFVC.' . $_EXTKEY,
	'Pi2',
	array(
		'Contact' => 'list, show, search',
		'Organisme' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Contact' => '',
		'Organisme' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VFVC.' . $_EXTKEY,
	'Pi3',
	array(
		'Contact' => 'list, show, search',
		'Organisme' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Contact' => '',
		'Organisme' => '',
		
	)
);
