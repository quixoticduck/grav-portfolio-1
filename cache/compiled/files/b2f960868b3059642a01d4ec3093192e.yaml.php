<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Clara/GitHub/clara-site/htmlgrav/system/blueprints/pages/modular_new.yaml',
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
                    'title' => 'PLUGIN_ADMIN.ADD_MODULAR_CONTENT'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.PAGE_TITLE',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'validate' => [
                        'type' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PAGE',
                    'classes' => 'fancy',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                    '@data-default' => '\\Grav\\Plugin\\admin::route',
                    'options' => [
                        '' => 'PLUGIN_ADMIN.DEFAULT_OPTION_SELECT'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'select',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_ADMIN.MODULAR_TEMPLATE',
                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                    'default' => 'default',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'modular' => [
                    'type' => 'hidden',
                    'default' => 1,
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
