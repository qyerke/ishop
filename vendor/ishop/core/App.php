<?php
/**
 * Created by PhpStorm.
 * User: nurgali_y.krg
 * Date: 15.04.2019
 * Time: 17:31
 */

namespace ishop;

class App
{
    public static $app;

    function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
    }
    protected function getParams(){
        $params = require_once CONF . '/params.php';
        if(!empty($params)){
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }}