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

            <div class="col-xs-3 bs-wizard-step disabled">
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
            <form action="../phpUtils/formProcess.php" method="post">
                <input type="hidden" name="dadosDoPostoo" value="true"/>
                <!--Bloco de IBM do posto-->
                <div class="text-center">
                    Ibm Do Posto
                    <div class="input-group col-md-12 text-center">
                        <span class="input-group-addon">ibm</span>
                        <input type="text" class="form-control text-center" id="ibmDoPosto" name="ibmDoPosto"
                               placeholder="Digite o IBM do posto (ex: 125487)">
                        <span class="input-group-addon">.acelera.raizen.com</span>
                    </div>
                    <br/>
                </div>
                <!--Bloco de IBM do posto-->

                <!--Bloco de Nome do posto-->
                <div class="text-center">
                    Nome Do Posto
                    <div class="col-md-12 input-group text-center">
                        <input type="text" class="form-control text-center" id="nomeDoPosto" name="nomeDoPosto"
                               placeholder="Nome do posto (ex: Posto Z+Z Shopping)">
                    </div>
                    <br/>
                </div>
                <!--Bloco de Nome do posto-->

                <!--Bloco de Nome do posto-->
                <div class="text-center">
                    Modelo Do Posto
                    <div class="input-group col-md-12 text-center">
                        <label for="modeloDoPosto"></label>
                        <select id="modeloDoPosto" name='modeloDoPosto' class='form-control'>
                            <option value='Full'>Full (Com TVs)</option>
                            <option value='Light'>Light (Sem TVs)</option>
                        </select>
                    </div>
                    <br/>
                </div>
                <!--Bloco de Nome do posto-->


                <!--Botão enviar-->
                <div class="input-group col-md-12 text-center">
                    <input id='enviarFormulario' class="btn btn-primary" type='submit' name='submit' value='Proximo'>
                </div>
                <!--Botão enviar-->

            </form>
        </div>
    </div>
</div>
</body>

</html>