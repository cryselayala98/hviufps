<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="http://localhost/hviufps/Librerias/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/hviufps/Librerias/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/hviufps/Librerias/estilos/estilosIndex.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <title>HVIUFPS</title>
       
    </head>
    <body>

    	
     
     <div class="container-fluid">
            <div class="row">
        <div class="col-sm-2 col-md-2 " >
    <div class="tituloh">
    <h1 >HVIUFPS</h1>
    </div>
</div>
                
                <div class="col-sm-2 col-md-4">
                    <div class="logo">
            <img src="http://localhost/hviufps/Librerias/images/fondo.png" width="40px" height="40px">
            </div>
                </div>

       
</div>

       
            
<section class="login-block">
<div class="container">
<div class="row">
    

<div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://localhost/hviufps/Librerias/images/foto1.png" >
            </div>

            <div class="item">
                <img src="http://localhost/hviufps/Librerias/images/foto2.jpg"  >
            </div>

            <div class="item">
                <img src="http://localhost/hviufps/Librerias/images/foto3.png" >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
    <div class="col-md-3 col-md-offset-1">
    <div class="panel-login">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-6s">
                    <a href="#" class="active" id="login-form-link">Ingresar</a>

                    <div class="col-xs-6">
                        <a href="#" id="register-form-link">Registrarse</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">



<?php $attributesI = array('id' => 'login-form', 'style' => 'display:block;', 'role' => 'form');?>
<?= form_open('/Welcome/iniciarSesion', $attributesI)?>

<?php

$codigoI= array(
'name'=>'codigoIniciarSesion',
'placeholder'=>'Codigo',
'type'=>'text',
'class'=>'form-control',
'required' => 'required'
);
$passwordI= array(
'name'=>'contraseñaIniciarSesion',
'placeholder'=>'Contraseña',
'type'=>'password',
'class'=>'form-control',
'required' => 'required'
);
$submitI= array(
'name'=>'iniciarSesion',
'type'=>'submit',
'class'=>'form-control btn btn-login',
'id' => 'login-submit',
'tabindex' => '4'
);

?>

                        <div class="form-group">
                            <?= form_input($codigoI) ?> 
                        </div>
                        <div class="form-group">
                            <?= form_input($passwordI) ?> 
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <?=form_submit('','Iniciar Sesion', $submitI)?>
                                    
                                </div>
                            </div>
                        </div>
                    <?= form_close()?>

    <?php $attributesR = array('id' => 'register-form', 'style' => 'display:none;', 'role' => 'form');?>
        <?= form_open('/Welcome/registrarInvestigador', $attributesR)?>
                   
                
                        <div class="form-group">
                            <?php

$nombreR= array(
'name'=>'nombre_Registrar',
'placeholder'=>'Nombre',
'type'=>'text',
'class'=>'form-control',
'required' => 'required',
'autofocus' => 'autofocus'
);?>   <?= form_input($nombreR) ?> 
                            
                        </div>
                        <div class="form-group">
                                <?php

$apellidoR= array(
'name'=>'apellido_Registrar',
'placeholder'=>'Apellidos',
'type'=>'text',
'class'=>'form-control',
'required' => 'required'
);?>   <?= form_input($apellidoR) ?> 

                            
                        </div>
                        <div class="form-group">
                                <?php

$codigoR= array(
'name'=>'codigo_Registrar',
'placeholder'=>'Codigo',
'type'=>'text',
'class'=>'form-control',
'required' => 'required'
);?>  <?= form_input($codigoR) ?> 
                            
                        </div>
                        <div class="form-group">
                                <?php

$emailR= array(
'name'=>'email_Registrar',
'placeholder'=>'Correo',
'type'=>'email',
'class'=>'form-control',
'required' => 'required'
);?>   <?= form_input($emailR) ?> 
                          
                        </div>
                        <div class="form-group">
                                <?php

$codigoI= array(
'name'=>'contraseña_Registrar',
'placeholder'=>'Contraseña',
'type'=>'password',
'class'=>'form-control',
'required' => 'required'
);?>    <?= form_input($codigoI) ?> 
                       
                        </div>
                        <div class="form-group">

                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">

                                <?php

$submitR= array(
'name'=>'registrarInvestigador',
'type'=>'submit',
'id'=>'register-submit',
'tabindex'=>'4',
'class'=>'form-control btn btn-register'

);?>    <?=form_submit('','Registrarse', $submitR)?>
                                    
                                </div>
                            </div>
                        </div>
                  <?= form_close()?>
                            
            <?php  
            if($aviso!="ok"){
                echo $aviso;
            }
            ?>                
          
                            
                            
                </div>
            </div>
        </div>

    </div>


</div>
</div>
</div>
</section>
         <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




        
    </div>

<footer class="nb-footer">
<div class="text-center" >
<ul class="list-inline">
<li><a href="#"><img src="http://localhost/hviufps/Librerias/images/logoUfps.png" width="60px" height="60px" alt=""></a></li>
<li><a href="#"><img src="http://localhost/hviufps/Librerias/images/sistemas_ufps.png" width="60px" height="60px" alt=""></a></li>
</ul>
<div class="text-center">
<p>&copy;HVIUFPS Todos los derechos reservados.</p>
<div class="creditos">
    Diseñado por<br>Angie González-Crisel Ayala-Maryuri Monsalve
    <br>
    <br>
</div>
</div>
</div>

</footer>

<script src="http://localhost/hviufps/Librerias/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/hviufps/Librerias/js/js.js"></script>
    
</body>
</html>
