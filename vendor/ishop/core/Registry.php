<?php
/**
 * Created by PhpStorm.
 * User: nurgali_y.krg
 * Date: 15.04.2019
 * Time: 17:37
 */

namespace ishop;


class Registry
{
    use TSingletone;

    private static $properties = [];

    public function setProperty($name, $value){
        self::$properties[$name] = $value;
    }
    public function getProperty($name){
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }
    public function getProperties(){
        return self::$properties;
    }
}