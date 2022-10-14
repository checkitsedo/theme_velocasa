<?php

// extend theme select box in site config
$GLOBALS['SiteConfiguration']['site']['columns']['theme']['config']['items'] = array_merge(
    $GLOBALS['SiteConfiguration']['site']['columns']['theme']['config']['items'],
    [ ['velocasa', 'theme_velocasa'] ]
);
