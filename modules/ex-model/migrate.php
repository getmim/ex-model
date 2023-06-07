<?php

return [
    'ExModel\\Model\\ModelChildren' => [
        'fields' => [
            'id' => [
                'type' => 'INTEGER',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'parent' => [
                'type' => 'INTEGER',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 3000
            ],
            'type_char' => [
                'type' => 'CHAR',
                'length' => '100',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 4000
            ],
            'type_enum' => [
                'type' => 'ENUM',
                'options' => ['ONE', 'TWO', 'THREE'],
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 5000
            ],
            'type_longtext' => [
                'type' => 'LONGTEXT',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 6000
            ],
            'type_set' => [
                'type' => 'SET',
                'options' => ['ONE', 'TWO', 'THREE'],
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 7000
            ],
            'type_text' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 8000
            ],
            'type_tinytext' => [
                'type' => 'TINYTEXT',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 9000
            ],
            'type_varchar' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 10000
            ],
            'type_bigint' => [
                'type' => 'BIGINT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 11000
            ],
            'type_boolean' => [
                'type' => 'BOOLEAN',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 12000
            ],
            'type_decimal' => [
                'type' => 'DECIMAL',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 13000
            ],
            'type_double' => [
                'type' => 'DOUBLE',
                'length' => '12,3',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 14000
            ],
            'type_float' => [
                'type' => 'FLOAT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 15000
            ],
            'type_integer' => [
                'type' => 'INTEGER',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 16000
            ],
            'type_mediumint' => [
                'type' => 'MEDIUMINT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 17000
            ],
            'type_smallint' => [
                'type' => 'SMALLINT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 18000
            ],
            'type_tinyint' => [
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 19000
            ],
            'type_date' => [
                'type' => 'DATE',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 20000
            ],
            'type_datetime' => [
                'type' => 'DATETIME',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 21000
            ],
            'type_time' => [
                'type' => 'TIME',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 22000
            ],
            'type_year' => [
                'type' => 'YEAR',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 23000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 24000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 25000
            ]
        ]
    ],
    'ExModel\\Model\\ModelParent' => [
        'fields' => [
            'id' => [
                'type' => 'INTEGER',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 4000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 5000
            ]
        ]
    ]
];
