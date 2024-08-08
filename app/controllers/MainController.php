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
        $this->set(compact('names'));
    }
}

123