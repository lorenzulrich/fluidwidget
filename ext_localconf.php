<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin($_EXTKEY, 'SubRequest', array('SubRequest' => 'request'), array());