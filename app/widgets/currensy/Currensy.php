<?php

namespace app\widgets\currensy;


use ishop\App;
use RedBeanPHP\R;

class Currensy
{
    protected $tpl;
    protected $currensies;
    protected $currensy;

    public function __construct()
    {
        $this->tpl = __DIR__ . '/currency_tpl/currency.php';
        $this->run();
    }
    protected function run(){
        $this->currensies = App::$app->getProperty('currensies');
        $this->currensies = App::$app->getProperty('$currency');
        echo $this->getHtml();
    }
    public static function getCurrencies(){
        //return R::findAll('currency');
        return R::getAssoc("SELECT code, title, symbol_left, symbol_right, value, base FROM currency ORDER BY base DESC");
    }
    public static function getCurrency($currencies){
        if (isset($_COOKIE['currency']) && array_key_exists($_COOKIE['currency'], $currencies)){
            $key = $_COOKIE['currency'];
        } else {
            $key = key($currencies);
        }
        $currency = $currencies[$key];
        $currency['code'] = $key;
        return $currency;
    }
    protected function  getHtml(){
        ob_start();
        require_once $this->tpl;
        return ob_get_clean();
    }
}