<?php
/**
 * Created by PhpStorm.
 * User: nurgali_y.krg
 * Date: 18.04.2019
 * Time: 15:48
 */

namespace app\controllers;

use app\models\AppModel;
use ishop\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}