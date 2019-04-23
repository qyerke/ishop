<?php

namespace app\controllers;

use \RedBeanPHP\R;
use ishop\App;
use ishop\base\Controller;
use ishop\Cache;

class MainController extends AppController
{
    public function indexAction(){
        $brands = R::find('brand', 'LIMIT 3');
        $hits = R::find('product', "hit = '1' AND status = '1' LIMIT 8");
        $this->set(compact('brands','hits'));
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...');

    }
}