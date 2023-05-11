<?php

use vendor\Router;

Router::add('projects', ['ProjectsController' => 'index']);
Router::add('users', ['UserController' => 'index']);





// Индексная страница
Router::add('', ['MainController' => 'index']);