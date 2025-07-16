<?php

namespace app\controllers;

use chrn\App;

class LanguageController extends AppController
{

    public function changeAction()
    {
        $lang = $_GET['lang'] ?? null;
        if ($lang) {
            if (array_key_exists($lang, App::$app->getProperty('languages'))) {

                // отрезаю базовый URL
                $url = trim(str_replace(PATH, '',$_SERVER['HTTP_REFERER']), '/');

                // разбиваю на 2 части. 1 - возможный язык,
                $url_parts = explode('/', $url, 2);

                // ищу первую часть (старый язык) в массиве языков
                if (array_key_exists($url_parts[0], App::$app->getProperty('languages'))) {
                    // если есть, присваиваеваем первой части новый язык, если он не базовый
                    if ($lang != App::$app->getProperty('language')['code']) {
                        $url_parts[0] = $lang;
                    }   else    {
                        // если язык базовый, тогда удаляем из URL
                        array_shift($url_parts);
                    }

                }   else    {
                    // если есть, присваиваеваем первой части новый язык, если он не базовый
                    if ($lang !=App::$app->getProperty('language')['code']) {
                        array_unshift($url_parts, $lang);
                    }
                }

                    $url = PATH . '/' . implode('/', $url_parts);
                    redirect($url);
            }
        }
        redirect();
    }

}