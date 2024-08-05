<?php

namespace chrn;

abstract class Controller
{





    public array $data = [];
    public array $meta = ['title' => '', 'description' => '', 'keywords' => ''];
    public false|string $layout = '';
    public string $view = '';
    public object $model;


    public function __construct(public $route = [])
    {

    }

}