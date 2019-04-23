<?php
/**
 * Created by PhpStorm.
 * User: nurgali_y.krg
 * Date: 18.04.2019
 * Time: 15:48
 */

namespace app\controllers;

use app\models\AppModel;
use app\widgets\currensy\Currensy;
use ishop\App;
use ishop\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        Currensy::getCurrencies();
        setcookie('currency', 'EUR', time() + 3600*21*7, '/');
        App::$app->setProperty('currencies', Currensy::getCurrencies());
        App::$app->setProperty('currencies', Currensy::getCurrency(App::$app->getProperty('currencies')));

    }
}

