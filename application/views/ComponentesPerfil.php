<?php
//session_start();
//$codigo ;

$link = "http://localhost/hviufps/index.php/Welcome/cargar/$codigo/";


?>      




<div class="col-sm-3 col-md-3 barra">
    <div class="panel-group" id="accordion">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a <?php echo "href=" . $link . "DatosBasicos" ?> ><span class="glyphicon glyphicon-folder-close">
                        </span>Datos Basicos</a>
                </h4>
            </div>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a <?php echo "href=" . $link . "Proyectos" ?> ><span class="glyphicon glyphicon-folder-close">
                        </span>Proyectos</a>
                </h4>
            </div>

        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a <?php echo "href=" . $link . "Empresas" ?> ><span class="glyphicon glyphicon-folder-close">
                        </span>Empresas</a>
                </h4>
            </div>

        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                        </span>Formaciones <span class="glyphicon glyphicon-chevron-down">
                        </span></a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "FormacionesAcademicas" ?>>Academicas</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "FormacionesComplementarias" ?>>Complementarias</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a <?php echo "href=" . $link . "Idiomas" ?> ><span class="glyphicon glyphicon-folder-close">
                        </span>Idiomas</a>
                </h4>
            </div>

        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-th">
                        </span>Producciones<span class="glyphicon glyphicon-chevron-down">
                        </span></a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "Software" ?>>Software</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "TrabajosTecnicos" ?>>Trabajos Tecnicos</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "ProductosTecnologicos" ?>>Productos Tecnologicos</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "ProcesosTecnicas" ?>  >Procesos o Tecnicas</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "NormasyRegulaciones" ?> >Normas y Regulaciones</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "OtrasPublicacionesTecnicas" ?> >Otras Publicaciones Tecnicas</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "OtrasPublicaciones" ?>>Otras Publicaciones</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-th">
                        </span>Articulos</a>
                    <span class="glyphicon glyphicon-chevron-down"></span>  
                </h4> 
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "Articulos" ?>>Articulos</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a <?php echo "href=" . $link . "PublicacionesNoCientificas" ?>>Publicaciones No Cientificas</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a <?php echo "href=" . $link . "ExperienciasProfesionales" ?> ><span class="glyphicon glyphicon-folder-close">
                        </span>Experiencias profesionales</a>
                </h4>
            </div>

        </div>

    </div>
</div>
