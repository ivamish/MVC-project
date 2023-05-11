<?php


namespace app\controllers;


class MainController
{
    public function index()
    {
        $test = 123;
        view('index', compact('test'));
    }
}