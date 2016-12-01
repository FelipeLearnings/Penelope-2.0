<?php

/**
 * Created by PhpStorm.
 * User: Felipe Gerbelli
 * Date: 30/11/2016
 * Time: 15:57
 */
class Controler
{
    
    public function __construct()
    {
    }

    public function index()
    {
        $model = new Model;
        $view = new View;

        $view->renderizar($model->informacoesDoPosto());
    }
}