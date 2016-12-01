<?php

include '\xampp\htdocs\PenelopeV2.0\model\Model.php';


if(isset($_POST['dadosDoPostoo'])){
    $model = new Model();
    $model->definirValores($_POST['ibmDoPosto'], $_POST['nomeDoPosto'], $_POST['modeloDoPosto']);
    header("Location: ../Steps/informacoes_do_analista.php");
    print_r($model);
}
