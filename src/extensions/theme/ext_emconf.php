<?php

/**
 * Extension Manager/Repository config file for ext "theme".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Theme',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.3.0-12.5.99',
            'fluid_styled_content' => '12.3.0-12.5.99',
            'rte_ckeditor' => '12.3.0-12.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Splintnet\\Theme\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jonas Imping',
    'author_email' => 'info@splintnet.de',
    'author_company' => 'Splintnet',
    'version' => '1.0.0',
];
