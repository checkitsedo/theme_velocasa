<?php

// Configure a "theme" field to have the possibility to choose
$GLOBALS['SiteConfiguration']['site']['columns']['theme'] = [
    'label' => 'Site Theme',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['Theme velocasa', 'theme_velocasa']
        ],
    ],
];

// add a new palette for custom fields for theme_velocasa specific options
$GLOBALS['SiteConfiguration']['site']['palettes']['theme_velocasa'] = [
    'showitem' => 'theme'
];

$GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] = str_replace(
    'base,',
    'base,--palette--;;theme_velocasa,',
    $GLOBALS['SiteConfiguration']['site']['types']['0']['showitem']
);
