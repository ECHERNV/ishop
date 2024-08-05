<?php

if (PHP_MAJOR_VERSION < 8) {
    die('НЕ ТА ВЕРСИЯ PHP ДОЛБАЁБ, НАДО 8');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';

new \chrn\App();

//var_dump(\chrn\App::$app->getProperties());

//throw new Exception('Возникла ошибка!');

debug(\chrn\Router::getRoutes());