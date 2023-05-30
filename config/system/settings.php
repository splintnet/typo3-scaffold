<?php
return [
    'BE' => [
        'debug' => false,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$SGE1b2c0NkpoTE1JQ0h4MA$GiAzmQoxBiSg4MLNDwXGG5r8O2asIpDS0hpFfypvBMI',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'typo3_example',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => 'root',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'root',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'belogin_images' => [
            'IPmask' => '',
            'folder' => 'fileadmin/images/',
            'source' => 'google',
            'unsplashUrl' => 'https://source.unsplash.com/1600x900/?nature',
        ],
        'bootstrap_package' => [
            'disableCssProcessing' => '0',
            'disableGoogleFontCaching' => '0',
            'disablePageTsBackendLayouts' => '0',
            'disablePageTsContentElements' => '0',
            'disablePageTsRTE' => '0',
            'disablePageTsTCADefaults' => '0',
            'disablePageTsTCEFORM' => '0',
            'disablePageTsTCEMAIN' => '0',
        ],
        'cs_seo' => [
            'cropDescription' => '0',
            'evaluationDoktypes' => '1',
            'evaluators' => 'Title,Description,H1,H2,Images,Keyword',
            'forceMinDescription' => '140',
            'inPageModule' => '0',
            'maxDescription' => '156',
            'maxH2' => '6',
            'maxNavTitle' => '50',
            'maxTitle' => '57',
            'minDescription' => '140',
            'minTitle' => '40',
            'modFileColumns' => 'title,description',
            'showDescriptionsInTCA' => '1',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'indexed_search' => [
            'catdoc' => '/usr/bin/',
            'debugMode' => '0',
            'deleteFromIndexAfterEditing' => '1',
            'disableFrontendIndexing' => '0',
            'enableMetaphoneSearch' => '1',
            'flagBitMask' => '192',
            'fullTextDataLength' => '0',
            'ignoreExtensions' => '',
            'indexExternalURLs' => '0',
            'maxAge' => '0',
            'maxExternalFiles' => '5',
            'minAge' => '24',
            'pdf_mode' => '20',
            'pdftools' => '/usr/bin/',
            'ppthtml' => '/usr/bin/',
            'unrtf' => '/usr/bin/',
            'unzip' => '/usr/bin/',
            'useMysqlFulltext' => '0',
            'xlhtml' => '/usr/bin/',
        ],
        'mask' => [
            'backend' => '',
            'backend_layouts_folder' => '',
            'backendlayout_pids' => '0',
            'content' => '',
            'content_elements_folder' => '',
            'json' => '',
            'layouts' => '',
            'layouts_backend' => '',
            'loader_identifier' => '',
            'partials' => '',
            'partials_backend' => '',
            'preview' => '',
        ],
        'news' => [
            'advancedMediaPreview' => '1',
            'archiveDate' => 'date',
            'categoryBeGroupTceFormsRestriction' => '0',
            'categoryRestriction' => '',
            'contentElementRelation' => '1',
            'dateTimeNotRequired' => '0',
            'hidePageTreeForAdministrationModule' => '0',
            'manualSorting' => '0',
            'prependAtCopy' => '1',
            'resourceFolderImporter' => '/news_import',
            'rteForTeaser' => '0',
            'showAdministrationModule' => '1',
            'slugBehaviour' => 'unique',
            'storageUidImporter' => '1',
            'tagPid' => '1',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
        ],
        'webp' => [
            'convert_all' => '1',
            'converter' => 'Plan2net\\Webp\\Converter\\MagickConverter',
            'exclude_directories' => '',
            'hide_webp' => '1',
            'mime_types' => 'image/jpeg,image/png,image/gif',
            'parameters' => 'image/jpeg::-quality 85 -define webp:lossless=false|image/png::-quality 75 -define webp:lossless=true|image/gif::-quality 85 -define webp:lossless=true',
            'silent' => '0',
            'use_system_settings' => '1',
        ],
    ],
    'FE' => [
        'debug' => false,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '3a9f426e773021a870d00f174dc7878b912060a65b5973a0103dfa5cfa946d724541df3fac59031f86babf449de4ed99',
        'exceptionalErrors' => 4096,
        'sitename' => 'TYPO3 Project',
        'systemMaintainers' => [
            1,
        ],
        'trustedHostsPattern' => '.*.*',
    ],
];
