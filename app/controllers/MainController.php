<?php

namespace app\controllers;

use chrn\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->setMeta('Главная страница', 'Описание', 'Ключи');
        $this->set(['test' => 'pidor']);
    }
}