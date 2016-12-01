<?php

/**
 * Created by PhpStorm.
 * User: Felipe Gerbelli
 * Date: 30/11/2016
 * Time: 15:57
 */

class Model
{
    public function __construct()
    {
    }

    public $ibmDoPosto;
    public $nomeDoPosto;
    public $modeloDoPosto;

    
    public function definirValores($ibmDoPosto, $nomeDoPosto, $modeloDoPosto){
        $this->ibmDoPosto = $ibmDoPosto;
        $this->nomeDoPosto = $nomeDoPosto;
        $this->modeloDoPosto = $modeloDoPosto;
    }

    public function informacoesDoPosto(){

        return array(
            'Ibm Do Posto' => $this->ibmDoPosto,
            'Nome Do Posto' => $this->nomeDoPosto,
            'Modelo Do Posto' => $this->modeloDoPosto
        );
    }
}