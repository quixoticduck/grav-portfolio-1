<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Clara/GitHub/clara-site/htmlgrav/user/plugins/login/blueprints.yaml',
    'modified' => 1461784048,
    'data' => [
        'name' => 'Login',
        'version' => '1.3.1',
        'description' => 'Enables user authentication and login screen.',
        'icon' => 'sign-in',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'admin, plugin, login',
        'homepage' => 'https://github.com/getgrav/grav-plugin-login',
        'bugs' => 'https://github.com/getgrav/grav-plugin-login/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'form',
            1 => 'email'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'login' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.BTN_LOGIN',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'hidden',
                                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'built_in_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.BUILTIN_CSS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'help' => 'PLUGIN_LOGIN.BUILTIN_CSS_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'route' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE',
                                    'help' => 'PLUGIN_LOGIN.ROUTE_HELP',
                                    'placeholder' => '/my-custom-login'
                                ],
                                'redirect' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN',
                                    'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN_HELP',
                                    'placeholder' => '/my-page'
                                ],
                                'parent_acl' => [
                                    'type' => 'toggle',
                                    'label' => 'Use parent access rules',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'help' => 'Check for parent access rules if no rules are defined',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'rememberme' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.SESSION',
                                    'fields' => [
                                        'rememberme.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_ADMIN.ENABLED',
                                            'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'rememberme.timeout' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADMIN.TIMEOUT',
                                            'help' => 'PLUGIN_ADMIN.TIMEOUT_HELP',
                                            'validate' => [
                                                'type' => 'number',
                                                'min' => 1
                                            ]
                                        ],
                                        'rememberme.name' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADMIN.NAME',
                                            'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'registration' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.USER_REGISTRATION',
                            'fields' => [
                                'user_registration.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ENABLED',
                                    'help' => 'PLUGIN_LOGIN.USER_REGISTRATION_ENABLED_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'route_register' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_REGISTER',
                                    'help' => 'PLUGIN_LOGIN.ROUTE_REGISTER_HELP',
                                    'placeholder' => '/register'
                                ],
                                'user_registration.redirect_after_registration' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION',
                                    'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION_HELP',
                                    'placeholder' => '/my-page'
                                ],
                                'registration_fields' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                                    'fields' => [
                                        'user_registration.fields' => [
                                            'type' => 'array',
                                            'value_only' => true,
                                            'label' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                                            'help' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS_HELP',
                                            'placeholder_key' => 'PLUGIN_LOGIN.REGISTRATION_FIELD_KEY',
                                            'placeholder_value' => 'PLUGIN_LOGIN.REGISTRATION_FIELD_VALUE'
                                        ],
                                        'user_registration.default_values' => [
                                            'type' => 'array',
                                            'label' => 'PLUGIN_LOGIN.DEFAULT_VALUES',
                                            'help' => 'PLUGIN_LOGIN.DEFAULT_VALUES_HELP',
                                            'placeholder_key' => 'PLUGIN_LOGIN.ADDITIONAL_PARAM_KEY',
                                            'placeholder_value' => 'PLUGIN_LOGIN.ADDITIONAL_PARAM_VALUE'
                                        ]
                                    ]
                                ],
                                'options' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.OPTIONS',
                                    'fields' => [
                                        'user_registration.options.validate_password1_and_password2' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2',
                                            'help' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.set_user_disabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SET_USER_DISABLED',
                                            'help' => 'PLUGIN_LOGIN.SET_USER_DISABLED_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.login_after_registration' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION',
                                            'help' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_activation_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_notification_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_welcome_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'oauth' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.OAUTH_SECTION',
                            'fields' => [
                                'oauth.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.OAUTH_ENABLE',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'oauth.user.autocreate' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.OAUTH_USER_AUTOCREATE',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'oauth.user.access' => [
                                    'type' => 'array',
                                    'label' => 'PLUGIN_LOGIN.OAUTH_ACCESS',
                                    'placeholder_key' => 'signin.login',
                                    'placeholder_value' => true
                                ],
                                'oauth.providers' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.OAUTH_PROVIDER_SECTION',
                                    'underline' => true,
                                    'fields' => [
                                        'oauth.providers.Facebook' => [
                                            'type' => 'section',
                                            'title' => 'PLUGIN_LOGIN.FACEBOOK',
                                            'fields' => [
                                                'oauth.providers.Facebook.enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_PROVIDER_FACEBOOK',
                                                    'highlight' => 1,
                                                    'default' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'oauth.providers.Facebook.credentials.key' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_CLIENT_ID',
                                                    'validate' => [
                                                        'type' => 'string'
                                                    ]
                                                ],
                                                'oauth.providers.Facebook.credentials.secret' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_CLIENT_SECRET',
                                                    'validate' => [
                                                        'type' => 'string'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'oauth.providers.Google' => [
                                            'type' => 'section',
                                            'title' => 'PLUGIN_LOGIN.GOOGLE',
                                            'fields' => [
                                                'oauth.providers.Google.enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_PROVIDER_GOOGLE',
                                                    'highlight' => 1,
                                                    'default' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'oauth.providers.Google.credentials.key' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_CLIENT_ID',
                                                    'validate' => [
                                                        'type' => 'string'
                                                    ]
                                                ],
                                                'oauth.providers.Google.credentials.secret' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_CLIENT_SECRET',
                                                    'validate' => [
                                                        'type' => 'string'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'oauth.providers.GitHub' => [
                                            'type' => 'section',
                                            'title' => 'PLUGIN_LOGIN.GITHUB',
                                            'fields' => [
                                                'oauth.providers.GitHub.enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_PROVIDER_GITHUB',
                                                    'highlight' => 1,
                                                    'default' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'oauth.providers.GitHub.credentials.key' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_CLIENT_ID',
                                                    'validate' => [
                                                        'type' => 'string'
                                                    ]
                                                ],
                                                'oauth.providers.GitHub.credentials.secret' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_CLIENT_SECRET',
                                                    'validate' => [
                                                        'type' => 'string'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'oauth.providers.Twitter' => [
                                            'type' => 'section',
                                            'title' => 'PLUGIN_LOGIN.TWITTER',
                                            'fields' => [
                                                'oauth.providers.Twitter.enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_PROVIDER_TWITTER',
                                                    'highlight' => 1,
                                                    'default' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'oauth.providers.Twitter.credentials.key' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_CLIENT_ID',
                                                    'validate' => [
                                                        'type' => 'string'
                                                    ]
                                                ],
                                                'oauth.providers.Twitter.credentials.secret' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_LOGIN.OAUTH_CLIENT_SECRET',
                                                    'validate' => [
                                                        'type' => 'string'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
