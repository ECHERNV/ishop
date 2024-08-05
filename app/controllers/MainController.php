<?php

namespace app\controllers;

use chrn\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        var_dump($this->model);
        echo __METHOD__;
    }
}