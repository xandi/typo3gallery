<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'AlexanderObert.' . $_EXTKEY,
    'Showcase',
	array(
            'Gallery' => 'index,show',
	),
	array(
            'Gallery' => 'index,show',
	)
);
