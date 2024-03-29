<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Clara/GitHub/clara-site/htmlgrav/system/blueprints/pages/new.yaml',
    'modified' => 1461784048,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADD_PAGE'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.PAGE_TITLE',
                    'help' => 'PLUGIN_ADMIN.PAGE_TITLE_HELP',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'help' => 'PLUGIN_ADMIN.FOLDER_NAME_HELP',
                    'validate' => [
                        'type' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                    '@data-default' => '\\Grav\\Plugin\\admin::getLastPageRoute',
                    'options' => [
                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'select',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_ADMIN.PAGE_FILE',
                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::types',
                    '@data-default' => '\\Grav\\Plugin\\admin::getLastPageName',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'visible' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.VISIBLE',
                    'help' => 'PLUGIN_ADMIN.VISIBLE_HELP',
                    'highlight' => '',
                    'default' => '',
                    'options' => [
                        '' => 'Auto',
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
