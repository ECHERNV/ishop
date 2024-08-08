<?php

namespace app\models;

use RedBeanPHP\R;

class Main extends \chrn\Model
{
    public function getNames(): array
    {
        return R::findAll('names');
    }
}