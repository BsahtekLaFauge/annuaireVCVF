<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VFVC.' . $_EXTKEY,
	'Pi1',
	'Contacts'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VFVC.' . $_EXTKEY,
	'Pi2',
	'Search'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'VFVC.' . $_EXTKEY,
	'Pi3',
	'Organisme'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'AnnuaireVFVC');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_vfvcannuairevfvc_domain_model_contact', 'EXT:vfvc_annuairevfvc/Resources/Private/Language/locallang_csh_tx_vfvcannuairevfvc_domain_model_contact.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vfvcannuairevfvc_domain_model_contact');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_vfvcannuairevfvc_domain_model_organisme', 'EXT:vfvc_annuairevfvc/Resources/Private/Language/locallang_csh_tx_vfvcannuairevfvc_domain_model_organisme.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vfvcannuairevfvc_domain_model_organisme');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_vfvcannuairevfvc_domain_model_fonction', 'EXT:vfvc_annuairevfvc/Resources/Private/Language/locallang_csh_tx_vfvcannuairevfvc_domain_model_fonction.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vfvcannuairevfvc_domain_model_fonction');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_vfvcannuairevfvc_domain_model_service', 'EXT:vfvc_annuairevfvc/Resources/Private/Language/locallang_csh_tx_vfvcannuairevfvc_domain_model_service.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vfvcannuairevfvc_domain_model_service');
