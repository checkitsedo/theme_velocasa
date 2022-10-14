<?php

/**
 * Extension Manager/Repository config file for ext "theme_velocasa".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Theme velocasa',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Checkitsedo\\ThemeVelocasa\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Dominik Senti',
    'author_email' => 'info@senti.lu',
    'author_company' => 'checkitsedo',
    'version' => '1.0.0',
];
