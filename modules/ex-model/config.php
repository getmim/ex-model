<?php

return [
    '__name' => 'ex-model',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/ex-model.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://github.com/iqbalfn'
    ],
    '__files' => [
        'modules/ex-model' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ExModel\\Model' => [
                'type' => 'file',
                'base' => 'modules/ex-model/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'model-parent' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'model-children' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'parent' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'ExModel\\Model\\ModelParent',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'model-parent'
                ],
                'type_char' => [
                    'type' => 'text'
                ],
                'type_enum' => [
                    'type' => 'text'
                ],
                'type_longtext' => [
                    'type' => 'text'
                ],
                'type_set' => [
                    'type' => 'text'
                ],
                'type_text' => [
                    'type' => 'text'
                ],
                'type_tinytext' => [
                    'type' => 'text'
                ],
                'type_varchar' => [
                    'type' => 'text'
                ],
                'type_bigint' => [
                    'type' => 'number'
                ],
                'type_boolean' => [
                    'type' => 'bool'
                ],
                'type_decimal' => [
                    'type' => 'number'
                ],
                'type_double' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'type_float' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'type_integer' => [
                    'type' => 'number'
                ],
                'type_mediumint' => [
                    'type' => 'number'
                ],
                'type_smallint' => [
                    'type' => 'number'
                ],
                'type_tinyint' => [
                    'type' => 'number'
                ],
                'type_date' => [
                    'type' => 'date'
                ],
                'type_datetime' => [
                    'type' => 'date'
                ],
                'type_time' => [
                    'type' => 'text'
                ],
                'type_year' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
