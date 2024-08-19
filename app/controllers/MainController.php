<?php

namespace app\controllers;

use app\models\Main;
use chrn\Controller;
use RedBeanPHP\R;


class MainController extends AppController
{
    public function indexAction()
    {
        $slides = R::findAll('slider');
        $this->set(compact('slides'));
    }
}