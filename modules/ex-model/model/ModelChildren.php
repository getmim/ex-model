<?php
/**
 * ModelChildren
 * @package ex-model
 * @version 0.0.1
 */

namespace ExModel\Model;

class ModelChildren extends \Mim\Model
{

    protected static $table = 'model_children';

    protected static $chains = [
        'parent' => [
            'model' => 'ExModel\\Model\\ModelParent',
            'field' => 'id'
        ]
    ];

    protected static $q = ['type_char', 'type_varchar'];
}
