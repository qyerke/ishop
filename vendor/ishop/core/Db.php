<?php
/**
 * Created by PhpStorm.
 * User: nurgali_y.krg
 * Date: 19.04.2019
 * Time: 16:09
 */

namespace ishop;

use \RedBeanPHP\R as R;

class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        R::setup($db['dsn'], $db['user'], $db['pass']);
        if (!R::testConnection()){
            throw new \Exception('Соединение не установлено с БД', 500);
        }
        R::freeze(true);
        if(DEBUG){
            R::debug(true, 1);

        }
    }
}