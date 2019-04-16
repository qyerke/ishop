<?php
/**
 * Created by PhpStorm.
 * User: nurgali_y.krg
 * Date: 15.04.2019
 * Time: 17:37
 */

namespace ishop;


trait TSingletone
{
    private static $instance;

    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}