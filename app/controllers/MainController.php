<?php

namespace app\controllers;

use app\models\Main;
use chrn\Controller;
use RedBeanPHP\R;


/** @property Main $model  */
class MainController extends Controller
{
    public function indexAction()
    {
        $this->setMeta('Главная страница', 'Описание', 'Ключи');
        $names = $this->model->getNames();
        $one_name = R::getRow( 'SELECT * FROM names WHERE id = 2');
        $this->set(compact('names'));
    }
}