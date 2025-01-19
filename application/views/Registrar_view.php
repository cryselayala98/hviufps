<h1 class="text-center"><b>Hoja de Vida del Investigador - Registrar</b></h1>

     <?php

$codigo=$segmento['codigo'];
$opcion=$segmento['value'];
?>       
            <form class="form-horizontal" role="form" action="http://localhost/hviufps/index.php/RegistrarHojaVida/procesoRegistro/<?=$codigo?>/<?=$opcion?>" method="post">

    <?php
        switch ($opcion) {
                    case "Proyectos":
                        ?>

                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Proyecto</b></h3>
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="tipoP" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="nombreP" placeholder="Nombre del Proyecto" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="FechaI" class="col-lg-2 control-label">Fecha Inicio</label><div class="col-lg-6">
                                <input type="date" 
                                       class="form-control"
                                       name="Fecha_Inicio" placeholder="dd/mm/aaaa">
                            </div>
                        </div> 
                        <div class="form-group">    
                            <label for="FechaF" class="col-lg-2 control-label">Fecha Final</label><div class="col-lg-6">
                                <input type="date"
                                       class="form-control"
                                       name="Fecha_Fin" placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label for="resumen" class="col-lg-2 control-label">Resumen</label><div class="col-lg-6">
                                <textarea class="form-control" name="resumen" rows="5" id="resumen"></textarea>


                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-primary" value="Guardar">
                        </div>

                        <?php
                        break;

                    case "Empresas":
                        ?>

                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Empresa</b></h3>
                        </div>
                        <div class="form-group">
                            <label for="Nit" class="col-lg-2 control-label">Nit</label><div class="col-lg-6">

                                <input type="text" class="form-control"  name="nit" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="TipoEmpresa" class="col-lg-2 control-label">Tipo de Empresa</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="tipo_Empresa" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nombre" class="col-lg-2 control-label">Nombre de la Empresa</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="nombre_Empresa" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaR" class="col-lg-2 control-label">Fecha de Registro</label>
                            <div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_Registro" placeholder="dd/mm/aa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NumeroP" class="col-lg-2 control-label">Número de Productos</label><div class="col-lg-6">

                                <input type="text" class="form-control" name="num_Productos" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="detalle" class="col-lg-2 control-label">Detalle</label>
                            <div class="col-lg-6">
                        <textarea class="form-control" rows="5" name="detalleE" id="detalleE"> </textarea>
                            </div>

                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div> 
                        <?php
                        break;

                    case "FormacionesAcademicas":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Formación Academica</b></h3> 
                        </div>
                        <div class="form-group">
                            <label for="categoria" class="col-lg-2 control-label">Categoria</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="Categoria" placeholder="Categoria">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="institucion" class="col-lg-2 control-label">Institución</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="institucion" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombreFormacion" class="col-lg-2 control-label">Nombre de Formación</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="Nombre_Formacion" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="FechaI" class="col-lg-2 control-label">Fecha Inicio</label><div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_InicioFA" placeholder="dd/mm/aa">
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="FechaF" class="col-lg-2 control-label">Fecha Final</label><div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_FinFA" placeholder="dd/mm/aa"></div>
                        </div>

                        <div class="form-group">
                            <label for="proyectoRealizado" class="col-lg-2 control-label">Proyecto de Investigación Realizado</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="Proyecto_Invest_Realizado" placeholder="">  
                            </div>
                        </div>


                        <div class="text-center">
                            <input type="submit" class="btn btn-danger" value="Guardar">
                        </div>
                        <?php
                        break;

                    case "FormacionesComplementarias":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Formación Complementaria</b></h3> 
                        </div>
                        <div class="form-group">
                            <label for="categoria" class="col-lg-2 control-label">Categoria</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="CategoriaCO" placeholder="Categoria">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="institucion" class="col-lg-2 control-label">Institución</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="institucionCO" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombreFormacion" class="col-lg-2 control-label">Nombre de Formación</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="Nombre_FormacionCO" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="FechaI" class="col-lg-2 control-label">Fecha Inicio</label><div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_InicioFC" placeholder="dd/mm/aa">
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="FechaF" class="col-lg-2 control-label">Fecha Final</label><div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_FinFC" placeholder="dd/mm/aa"></div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;

                    case "Idiomas":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Idioma</b></h3>
                        </div>
                        <div class="form-group"> 
                            <label for="Nombre" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nombre_Idioma" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nivel" class="col-lg-2 control-label">Nivel  de Habla</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nivel_Habla" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NivelE" class="col-lg-2 control-label">Nivel  de Escritura</label>
                            <div class="col-lg-6">                 
                                <input type="text" class="form-control" name="nivel_Escribe" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nivel" class="col-lg-2 control-label">Nivel  de Lectura</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nivel_Lee" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nivel" class="col-lg-2 control-label">Nivel  de Entendimiento</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nivel_entiende" placeholder="">
                            </div>


                        </div> 
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;

                    case "Software":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Software</b>
                            </h3>  
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo Software</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="tipoSoftware" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre del Software</label><div class="col-lg-6">

                                <input type="text" 
                                       class="form-control"
                                       name="nombreSoftware" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="nombreC1" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="ContratoRegistro1" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Lugar_Publicacion1" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Año_Publicacion1" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-lg-2 control-label">Url</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="url1" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Detalles</label><div class="col-lg-6">
                                <textarea class="form-control" rows="5" name="detalle1" id="detalles"> </textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>

                        <?php
                        break;
                    case "TrabajosTecnicos":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Trabajo Tecnico</b>
                            </h3>  
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="tipoTrabajoTecnico" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre del Trabajo Tecnico</label><div class="col-lg-6">

                                <input type="text" 
                                       class="form-control"
                                       name="nombre2" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="nombreC2" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="ContratoRegistro2" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Lugar_Publicacion2" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Año_Publicacion2" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mesesDuracion" class="col-lg-2 control-label">Meses de Duración</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Meses_Duracion2" placeholder="">  </div>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Detalle</label><div class="col-lg-6">
                                <textarea class="form-control" rows="5" name="detalle2" id="detalles"> </textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>

                        <?php
                        break;

                    case "ProductosTecnologicos":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Producto Tecnologico</b>
                            </h3>  
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo de Producto Tecnológico</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="tipoProductoTecnologico" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre de Producto Tecnológico</label><div class="col-lg-6">

                                <input type="text" 
                                       class="form-control"
                                       name="nombre3" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="nombreC3" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="ContratoRegistro3" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Lugar_Publicacion3" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Año_Publicacion3" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mesesDuracion" class="col-lg-2 control-label">Meses de Duración</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Meses_Duracion3" placeholder="">  </div>
                        </div>
                        <div class="form-group">
                            <label for="areas" class="col-lg-2 control-label">Areas</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Areas3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sectores"  class="col-lg-2 control-label">Sectores</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Sectores3" placeholder="">   
                            </div>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Detalles</label><div class="col-lg-6">
                                <textarea class="form-control" rows="5" name="detalle3" id="detalles"> </textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;

                    case "ProcesosTecnicas":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Procesos Tecnicas</b>
                            </h3>  
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo de Proceso</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="tipoProceso" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre de Proceso o técnica</label><div class="col-lg-6">

                                <input type="text" 
                                       class="form-control"
                                       name="nombre4" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="nombreC4" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="ContratoRegistro4" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Lugar_Publicacion4" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Año_Publicacion4" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="areas" class="col-lg-2 control-label">Areas</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Areas4" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sectores"  class="col-lg-2 control-label">Sectores</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Sectores4" placeholder="">   
                            </div>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Detalles</label><div class="col-lg-6">
                                <textarea class="form-control" rows="5" name="detalle4" id="detalles"> </textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;

                    case "NormasyRegulaciones":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Producción</b>
                            </h3>  
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo de Norma</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="tipoNorma" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre de la Norma</label><div class="col-lg-6">

                                <input type="text" 
                                       class="form-control"
                                       name="nombreP5" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="nombreC5" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="ContratoRegistro5" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Lugar_Publicacion5" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Año_Publicacion5" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mesesDuracion" class="col-lg-2 control-label">Meses de Duración</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Meses_Duracion5" placeholder="">  </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;

                    case "OtrasPublicacionesTecnicas":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Otras Publicaciones Tecnicas</b>
                            </h3>  
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo Otra Publicacion Tecnica</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="tipoOtra" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre de Otra Publicacion Tecnica</label><div class="col-lg-6">

                                <input type="text" 
                                       class="form-control"
                                       name="nombreP6" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Lugar_Publicacion6" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Año_Publicacion6" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Finalidad</label><div class="col-lg-6">
                                <textarea class="form-control" name="detalle6" rows="5" id="detalles"> </textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;

                    case "OtrasPublicaciones":
                        ?>

                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Otra publicación</b></h3> 
                        </div>
                        <div class="form-group"> 
                            <label for="Tipo" class="col-lg-2 control-label">Tipo</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="tipoOtraP" placeholder="Tipo de Publicacion">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreOtraP" class="col-lg-2 control-label">Nombre del Proyecto</label><div class="col-lg-6">

                                <input type="text" 
                                       class="form-control"
                                       name="nombreP7" placeholder="Nombre del Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pais" class="col-lg-2 control-label">Pais</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Pais7" placeholder="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="anoPublicacion" class="col-lg-2 control-label">Año de Publicación</label>
                            <div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Año_Publicacion7" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                            <div class="col-lg-6">
                                <textarea name="descripcion" class="form-control"  rows="5" id="descripcion"> </textarea>
                            </div>
                        </div> 
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;

                    case "Articulos":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Articulo</b></h3>
                        </div>
                        <div class="form-group">
                            <label for="Nombre" class="col-lg-2 control-label">Nombre</label><div class="col-lg-6">
                                <input type="text" name="nombre8"
                                       class="form-control"
                                       placeholder="Nombre Del Artículo" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="idioma" class="col-lg-2 control-label">Idioma de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Idioma_Publicacion8" placeholder="idioma de Publicación" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Pais" class="col-lg-2 control-label">Pais</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="pais8" placeholder="Pais" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="Palabras Claves" class="col-lg-2 control-label"><br>Revista</label>
                            <div class="col-lg-4">

                                <select name="revista1" class="selectpicker" data-live-search="true" tabindex="-98">
                                <?php
            foreach ($revistas-> result() as $value) {
                 ?>
                <option><?=$value -> nombre ?></option>
             <?php
                        }?>
                                </select>
                            </div>
                            <p><br></p>
                              <a data-toggle="modal" href="<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/"?>Revista" title="editar autores"><span class="glyphicon glyphicon-plus"  ></span></a>
                        </div>
                        <div class="form-group">
                            <label for="vol_revista" class="col-lg-2 control-label">Volumen de Revista</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Vol_Revista" placeholder="Volumen" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Paginai" class="col-lg-2 control-label">Pagina Inicial</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Pagina_Inicial" placeholder="Pagina Inicial">     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="PaginaF" class="col-lg-2 control-label">Pagina Final</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Pagina_Final" placeholder="Pagina Final">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="anio" class="col-lg-2 control-label">Año</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Año" placeholder="Año">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="Palabras Claves" class="col-lg-2 control-label">Palabras Claves</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Palabras_Clave" placeholder="separadas por ," >
                            </div>
                        </div> 
                            </div>
                        </div>    

                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;

                    case "PublicacionesNoCientificas":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Publicacion No cientifica</b></h3>
                        </div>
                        <div class="form-group">
                            <label for="Nombre" class="col-lg-2 control-label">Nombre</label><div class="col-lg-6">
                                <input type="text" name="nombre9"
                                       class="form-control"
                                       placeholder="Nombre Del Artículo" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="idioma" class="col-lg-2 control-label">Idioma de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Idioma_Publicacion2" placeholder="idioma de Publicación" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Pais" class="col-lg-2 control-label">Pais</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="pais9" placeholder="Pais" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Palabras Claves" class="col-lg-2 control-label"><br>Revista</label>
                            <div class="col-lg-4">

                                <select name="revista"  class="selectpicker" data-live-search="true" tabindex="-98">
                                <?php
            foreach ($revistas-> result() as $value) {
                 ?>
                <option><?=$value -> nombre ?></option>
             <?php
                        }?>
                                </select>
                            </div>
                            <p><br></p>
                              <a data-toggle="modal" href="<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/"?>Revista" title="editar autores"><span class="glyphicon glyphicon-plus"  ></span></a>
                        </div>
                        <div class="form-group">
                            <label for="vol_revista" class="col-lg-2 control-label">Volumen de Revista</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Vol_Revista2" placeholder="Volumen" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Paginai" class="col-lg-2 control-label">Pagina Inicial</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Pagina_Inicial2" placeholder="Pagina Inicial">     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="PaginaF" class="col-lg-2 control-label">Pagina Final</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Pagina_Final2" placeholder="Pagina Final" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="anio" class="col-lg-2 control-label">Año</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       name="Año2" placeholder="Año">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="Palabras Claves" class="col-lg-2 control-label">Palabras Claves</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       name="Palabras_Clave2" placeholder="separadas por ," >
                            </div>
                        </div>     

                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;
                    case "ExperienciasProfesionales":
                        ?>
                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Experiencia Profesional</b></h3>
                        </div>
                        <div class="form-group"> 
                            <label for="idExperiencia" class="col-lg-2 control-label">Nombre</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="Nombre_Experiencia_P" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="institucion" class="col-lg-2 control-label">Institución</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="Institucion" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="horas" class="col-lg-2 control-label">Horas de dedicacion Semanal</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="Horas_Dedicacion_Semanal" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaI" class="col-lg-2 control-label">fecha Inicio</label><div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_InicioExperiencia" placeholder="dd/mm/aa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaF" class="col-lg-2 control-label">fecha Fin</label><div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_FinExperiencia" placeholder="dd/mm/aa">
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>

                        <hr>
 <?php
                        break;
                    case "Actividad":

                        ?>
                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Actividad</b></h3>
                        </div>
                        <div class="form-group"> 
                            <label for="TipoActividad" class="col-lg-2 control-label">Tipo</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="tipo_Empresa" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cargo" class="col-lg-2 control-label">Cargo</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="cargo" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Titulo" class="col-lg-2 control-label">Titulo</label><div class="col-lg-6">
                                <input type="text" class="form-control" name="titulo" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaI" class="col-lg-2 control-label">fecha Inicio</label><div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_InicioActividad" placeholder="dd/mm/aa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaF" class="col-lg-2 control-label">fecha Fin</label><div class="col-lg-6">
                                <input type="date" class="form-control" name="Fecha_FinActividad" placeholder="dd/mm/aa"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Titulo" class="col-lg-2 control-label">Id - Experiencia</label><div class="col-lg-6">
                                <input type="text" class="form-control" value="<?=$act?>" readonly="readonly" name="idExperiencia" placeholder="">
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>
                        <?php
                        break;
             case "Revista":
                    ?>
<hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Revista</b></h3>


                        </div>

                        <div class="form-group">
                            <label for="Nombre" class="col-lg-2 control-label">Nombre Revista</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nombre_Revista" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="codigo" class="col-lg-2 control-label">Código Revista</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="codigo_Revista" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="editorial" class="col-lg-2 control-label">Editorial</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="editorial" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="doi" class="col-lg-2 control-label">DOI</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="DOI" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="urlRevista" class="col-lg-2 control-label">Url</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="Url_Revista" placeholder="">
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </div>

                    <?php
                    //fin del switch
                    break;
                }
                ?>

                 </form>

           
        </div>

    </div>



</div>
<hr>
<br>
<!--Model-->

                        

<footer class="nb-footer">
    <div class="text-center" >
        
        <div class="text-center">
            <p>&copy;HviUFPS Todos los derechos reservados.</p>
            <div class="creditos">
                Diseñado por<br> <a href="#">Angie González-Crisel Ayala-Maryuri Monsalve</a>
            </div>
        </div>
    </div>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>

</body>
</html>
