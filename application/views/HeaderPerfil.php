
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mi perfil</title>

<link rel="stylesheet" type="text/css" href="http://localhost/hviufps/Librerias/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://localhost/hviufps/Librerias/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/hviufps/Librerias/estilos/estilos.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
</head>
<body>

<nav class="navbar navbar-default navbar-static-top " role="navigation" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="titulo">
            <h3><b>HviUFPS</b></h3>
        </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li id="lista"><a href="#">Inicio</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" id="list" data-toggle="dropdown">Usuario <b class="caret"></b></a>
                <ul class="dropdown-menu ">
                   
                    <li><a href="http://localhost/hviufps/index.php/Welcome/index">Cerrar Sesion</a></li>
                </ul>
            </li>
        </ul>
        <div class="col-sm-3 col-md-3 navbar-right" >
           
        </div>
    </div>
</nav>
<?php

$codigo=$segmento['codigo'];
$opcion=$segmento['value'];


?>

<div class="container-fluid">
            <div class="row">

            	<?php require_once ("ComponentesPerfil.php");?>
                <div class="col-sm-9 col-md-9">


                    <div class="well">

