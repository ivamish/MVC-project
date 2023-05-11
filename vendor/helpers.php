<?php

function print_arr(array $arr) : void
{
    echo "<pre>" . print_r($arr, 1) . "</pre>";
}

function view(string $view, $vars = []) : void
{
    $path = APP . '/views/' . implode('/', explode('.', $view)) . ".php";
    ob_start();
    extract($vars);
    require_once $path;
    echo ob_get_clean();
}