<?php

defined('TYPO3_MODE') or die;


$ll = 'LLL:EXT:typo3gallery/Resources/Private/Language/.xlf';

return [
    'ctrl' => [
        'title' =>  $ll . 'gallery',
        'tx_typo3gallery_domain_model_gallery',
        'label' => 'title',
        'iconfile' => 'EXT:typo3gallery/Resources/Public/Icons/gallery_icon.gif',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
    ],

    'interface' => [
        'showRecordFieldList' => 'hidden, title'
    ],

    'columns' => [

        'title' => [

            'label' => $ll . 'tx_typo3gallery_domain_model_gallery.title',
            'description' => 'TODO: description',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'required,trim',
            ],

            'hidden' => [
                'label' => 'LLL:EXT:lang/Resources/Private/Languagelocallang_general.xlf.LGL.hidden',

                'config' => [
                    'type' => 'check',
                    'default' => 0
                ]
            ]
        ]
    ],

    'types' => [
        '0' => [
            'showitem' => 'hidden, title'
        ]
    ]

];


