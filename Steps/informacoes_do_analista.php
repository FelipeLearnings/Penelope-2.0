<?php
/**
 * Created by PhpStorm.
 * User: Felipe Gerbelli
 * Date: 30/11/2016
 * Time: 15:50
 */

include '\xampp\htdocs\PenelopeV2.0\model\Model.php';
include '\xampp\htdocs\PenelopeV2.0\view\View.php';
include '\xampp\htdocs\PenelopeV2.0\controler\Controler.php';

$controler = new Controler();
$model = new Model();


?>

<html>
<head>
    <title>Commit</title>
    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/personal.css" rel="stylesheet">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/personal.js"></script>

    <link rel="shortcut icon" type="image/png" href="../images/icon/favicon.ico"/>
</head>

<body>
<div class="container">
    <!--Passo a Passo-->
    <div class="col-md-6 col-md-offset-3">
        <div class="row bs-wizard" style="border-bottom:0;">

            <div class="col-xs-3 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Passo 1</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">Informações Do Posto</div>
            </div>

            <div class="col-xs-3 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Passo 2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">Informações Do Analista</div>
            </div>

            <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                <div class="text-center bs-wizard-stepnum">Passo 3</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">Teste De Rede</div>
            </div>

            <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                <div class="text-center bs-wizard-stepnum">Passo 4</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">Comitar</div>
            </div>
        </div>
    </div>
    <!--Passo a Passo-->

    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 20px;">
            <form action="../phpUtils/formProcess.php">

                <?php

                $controler->index();

                ?>
                
            </form>
        </div>
    </div>
</div>
</body>

</html>