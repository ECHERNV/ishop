<?php


use chrn\Router;

Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin-prefix' => 'admin']);
Router::add('^admin/(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$', ['admin-prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);

Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');

