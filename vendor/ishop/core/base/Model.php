<?php
/**
 * Created by PhpStorm.
 * User: nurgali_y.krg
 * Date: 19.04.2019
 * Time: 16:15
 */

namespace ishop\base;


use ishop\Db;

class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    function __construct()
    {
        Db::instance();
    }
}