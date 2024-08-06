<?php

namespace app\controllers\admin;

use chrn\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        echo '<h1>Admin Area</h1>';
    }
}