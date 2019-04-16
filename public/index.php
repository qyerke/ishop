<?php

require_once '../config/init.php';
require_once LIBS . '/functions.php';

$app = new \ishop\App();

$app::$app->setProperty('admin_password', '123456');

echo debug($app::$app->getProperties());