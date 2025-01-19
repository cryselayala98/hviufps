<h1 class="text-center"><b>Hoja de Vida del Investigador -  Editar</b></h1>

    
     <?php

$codigo=$segmento['codigo'];
$opcion=$segmento['value'];
?>       
            <form class="form-horizontal" role="form" action="http://localhost/hviufps/index.php/EditarHojaVida/procesoEditar/<?=$codigo?>/<?=$opcion?>" method="post">

    <?php

        switch ($opcion) {

 case "DatosBasicos":

                        ?>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Datos del Investigador</b></h3>
                        </div>

                        <div class="form-group">

                            <label for="nombre"  class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" value="<?= $info -> nombre ?>" class="form-control " name="nombreBasicos" placeholder="Nombre"></div>
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-lg-2 control-label">Apellido</label><div class="col-lg-6">
                                <input type="text" value="<?php echo $info -> apellido ?>" name="apellidoBasicos" class="form-control" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="citaciones" class="col-lg-2 control-label">Nombre de Citaciones </label><div class="col-lg-6">
                                <input type="text" value="<?php echo $info -> nombre_citaciones ?>" class="form-control" name="Nombre_Citaciones_Basicos" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nacionalidad" class="col-lg-2 control-label">Nacionalidad </label><div class="col-lg-10">


                                <select class="selectpicker" data-live-search="true"  name="NacionalidadBasicos" >
                                    <option> <?php
                                        if (empty($info -> Nacionalidad)) {
                                            $info -> Nacionalidad = "Nacionalidad";
                                        }

                                        echo $info -> Nacionalidad;
                                        ?></option>
                                    <option> Afganistán</option>    
                                    <option> Arabia Saudita</option>
                                    <option> Argentina</option>
                                    <option> Australia</option>
                                    <option> Bélgica</option>
                                    <option> Bolivia</option>
                                    <option> Brasil</option>
                                    <option> Camboya</option>
                                    <option> Canadá</option>
                                    <option> Chile</option>
                                    <option> China</option>
                                    <option> Colombia</option>
                                    <option> Corea</option>
                                    <option> Costa Rica</option>
                                    <option> Cuba</option>
                                    <option> Dinamarca</option>
                                    <option> Ecuador</option>
                                    <option> Egipto</option>
                                    <option> El Salvador</option>
                                    <option> Escocia</option>
                                    <option> España</option>
                                    <option> Estados Unidos</option>
                                    <option> Estonia</option>
                                    <option> Etiopia</option>
                                    <option> Filipinas</option>
                                    <option> Finlandia</option>
                                    <option> Francia</option>
                                    <option> Gales</option>
                                    <option> Grecia</option>
                                    <option> Guatemala</option>
                                    <option> Haití</option>
                                    <option> Holanda</option>
                                    <option> Honduras</option>
                                    <option> Indonesia</option>
                                    <option> Inglaterra</option>
                                    <option> Irak</option>
                                    <option> Irán</option>
                                    <option> Irlanda</option>
                                    <option> Israel</option>
                                    <option> Italia</option>
                                    <option> Japón</option>
                                    <option> Jordania</option>
                                    <option> Laos</option>
                                    <option> Letonia</option>
                                    <option> Lituania</option>
                                    <option> Malasia</option>
                                    <option> Marruecos</option>
                                    <option> México</option>
                                    <option> Nicaragua</option>
                                    <option> Noruega</option>
                                    <option> Panamá</option>
                                    <option> Paraguay</option>
                                    <option> Perú</option>
                                    <option> Portugal</option>
                                    <option> Puerto Rico</option>
                                    <option> Republica Dominicana</option>
                                    <option> Rusia</option>
                                    <option> Suecia</option>
                                    <option> Suiza</option>
                                    <option> Tailandia</option>
                                    <option> Taiwán</option>
                                    <option> Turquía</option>
                                    <option> Ucrania</option>
                                    <option> Uruguay</option>
                                    <option> Venezuela</option>
                                    <option> Vietnam</option>
                                </select>

                                <script>
                                    $('.selectpicker').selectpicker({
                                        style: 'btn-info',
                                        size: 4
                                    });

                                </script>


                            </div>
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <label for="expedicion" class="col-lg-2 control-label">Tipo de Identificación</label>
                                <div class="col-lg-6">
                                    <div class="radio-inline">
                                        <label><input type="radio" 
                                                      value="T.I." name="DocBasicos"
                                                      <?php
                                                      if ($info -> Tipo_documento == "T.I.") {
                                                          ?> checked<?php
                                                      }
                                                      ?>
                                                      >T.I</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio"
                                                      value="C.C" name="DocBasicos"

                                                      <?php
                                                      if ($info -> Tipo_documento == "C.C") {
                                                          ?> checked<?php
                                                      }
                                                      ?>

                                                      >C.C</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio"
                                                      value="Otro" name="DocBasicos" 

                                                      <?php
                                                      if ($info -> Tipo_documento == "Otro") {
                                                          ?> checked<?php
                                                      }
                                                      ?>

                                                      >Otro</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group">
                            <label for="documento" class="col-lg-2 control-label">N°Documento</label> <div class="col-lg-6">
                                <input type="text" name="documentoBasicos" value="<?php echo $info -> documento_id ?>" class="form-control" id="documento" placeholder="Documento de Identidad">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="expedicion" class="col-lg-2 control-label">Lugar de Expedición</label><div class="col-lg-6">
                                <input type="text" value="<?php echo $info -> lugar_expedicion ?>" class="form-control" name="Lugar_Expedicion_Basicos" placeholder="Lugar de Expedición">
                            </div>
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <label for="sexo" class="col-lg-2 control-label">Sexo:</label><div class="col-lg-10">


                                    <div class="radio-inline">

                                        <label><input type="radio" value="Femenino" name="sBasicos"

                                                      <?php
                                                      if ($info -> sexo == "Femenino") {
                                                          ?> checked<?php
                                                      }
                                                      ?>>Femenino</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio" value="Masculino" name="sBasicos"
                                            <?php
                                            if ($info -> sexo == "Masculino") {
                                                ?> checked<?php
                                                      }
                                                      ?> 
                                                      >Masculino</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="estado_Civil"  class="col-lg-2 control-label">Estado Civil:</label><div class="col-lg-6">

                                <div class="radio-inline">

                                    <label><input type="radio" value="Soltero" name="estadoCBasicos"
                                        <?php
                                        if ($info -> estado_civil == "Soltero") {
                                            ?> checked<?php
                                                  }
                                                  ?> 
                                                  >Soltero</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" value="Casado" name="estadoCBasicos"
                                        <?php
                                        if ($info -> estado_civil == "Casado") {
                                            ?> checked<?php
                                                  }
                                                  ?> 
                                                  >Casado</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" value="Divorciado" name="estadoCBasicos"
                                        <?php
                                        if ($info -> estado_civil == "Divorciado") {
                                            ?> checked<?php
                                                  }
                                                  ?> 
                                                  >Divorciado</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" value="Unión Libre" name="estadoCBasicos"
                                        <?php
                                        if ($info -> estado_civil == "Union Libre") {
                                            ?> checked<?php
                                                  }
                                                  ?> 
                                                  >Unión Libre</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" value="Viudo" name="estadoCBasicos"

                                                  <?php
                                                  if ($info -> estado_civil == "Viudo") {
                                                      ?> checked<?php
                                                  }
                                                  ?> 
                                                  >Viudo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugar_Nacimiento" class="col-lg-2 control-label">Lugar de Nacimiento</label><div class="col-lg-6">
                                <input type="text" class="form-control" value="<?php echo $info -> lugar_nacimiento ?>" 
                                       name="Lugar_Nacimiento_Basicos" placeholder="Lugar de Nacimiento">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaNacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label><div class="col-lg-6">
                                <!--de text a date-->
                                <input type="date" value="<?php echo $info -> fecha_nacimiento ?>"class="form-control"
                                       name="Fecha_Nacimiento_Basicos" placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Contraseña" class="col-lg-2 control-label">Contraseña</label><div class="col-lg-6">
                                <input type="password"  value="<?php echo $info -> contraseña ?>" placeholder="Contraseña" 
                                       name="claveBasicos" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Correo" class="col-lg-2 control-label">Correo Electronico</label><div class="col-lg-6">
                                <input type="email" value="<?php echo $info -> correo ?>" 
                                       name="correoBasicos" placeholder="Correo" class="form-control"required>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-danger" name="Editarbasicos" value="Guardar">
                        </div> 


                        <!--fin contenidos form-->





                        <?php
                        break;

                    case "Proyectos":
                        ?>

                        <hr>

                        <div class="form-group">

                            <h3 class="col-lg-2 control-label"><b>Proyecto</b></h3>
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Id Proyecto</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idProyecto?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idProyecto" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> tipo?>" 
                                       class="form-control"
                                       name="tipoP" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" 
                                 value="<?= $info-> nombre?>" 
                                       class="form-control"
                                       name="nombreP" placeholder="Nombre del Proyecto" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="FechaI" class="col-lg-2 control-label">Fecha Inicio</label><div class="col-lg-6">

                               

                                <input type="date"  
                                 value="<?= $info-> fecha_inicio?>" 
                                       class="form-control"
                                       name="Fecha_Inicio" placeholder="dd/mm/aaaa">
                            </div>
                        </div> 
                        <div class="form-group">    
                            <label for="FechaF" class="col-lg-2 control-label">Fecha Final</label><div class="col-lg-6">
                                <input type="date"
                                 value="<?= $info-> fecha_fin?>" 
                                       class="form-control"
                                       name="Fecha_Fin" placeholder="dd/mm/aa">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label for="resumen" class="col-lg-2 control-label">Resumen</label><div class="col-lg-6">
                                <textarea class="form-control" name="resumen" rows="5" id="resumen"><?= $info-> resumen?></textarea>


                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-danger" value="Guardar">
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

                                <input type="text" class="form-control" readonly="readonly" value="<?=$info -> nit?>" name="nit" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="TipoEmpresa" class="col-lg-2 control-label">Tipo de Empresa</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> tipo?>"  class="form-control" name="tipo_Empresa" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nombre" class="col-lg-2 control-label">Nombre de la Empresa</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> nombre?>"  class="form-control" name="nombre_Empresa" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaR" class="col-lg-2 control-label">Fecha de Registro</label>
                            <div class="col-lg-6">
                                <input type="date" value="<?=$info -> fecha_registro?>"  class="form-control" name="Fecha_Registro" placeholder="dd/mm/aa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NumeroP" class="col-lg-2 control-label">Número de Productos</label><div class="col-lg-6">

                                <input type="text" value="<?=$info -> num_productos?>"  class="form-control" name="num_Productos" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="detalle" class="col-lg-2 control-label">Detalle</label>
                            <div class="col-lg-6">
                        <textarea class="form-control" rows="5" name="detalleE" id="detalleE"><?=$info -> detalle?>  </textarea>
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Formacion academica</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idFormacion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idFormacion" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoria" class="col-lg-2 control-label">Categoria</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> categoria?>"  class="form-control" name="Categoria" placeholder="Categoria">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="institucion" class="col-lg-2 control-label">Institución</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> institucion?>"  class="form-control" name="institucion" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombreFormacion" class="col-lg-2 control-label">Nombre de Formación</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> nombre_formacion?>"  class="form-control" name="Nombre_Formacion" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="FechaI" class="col-lg-2 control-label">Fecha Inicio</label><div class="col-lg-6">
                                <input type="date" value="<?=$info -> fecha_inicio?>"  class="form-control" name="Fecha_InicioFA" placeholder="dd/mm/aa">
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="FechaF" class="col-lg-2 control-label">Fecha Final</label><div class="col-lg-6">
                                <input type="date" value="<?=$info -> fecha_fin?>"   class="form-control" name="Fecha_FinFA" placeholder="dd/mm/aa"></div>
                        </div>

                        <div class="form-group">
                            <label for="proyectoRealizado" class="col-lg-2 control-label">Proyecto de Investigación Realizado</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> proyecto_invest_realizado?>"  class="form-control" name="Proyecto_Invest_Realizado" placeholder="">  
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Formacion complementaria</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idFormacion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idFormacion" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoria" class="col-lg-2 control-label">Categoria</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> categoria?>"  class="form-control" name="CategoriaCO" placeholder="Categoria">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="institucion" class="col-lg-2 control-label">Institución</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> institucion?>" class="form-control" name="institucionCO" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombreFormacion" class="col-lg-2 control-label">Nombre de Formación</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> nombre_formacion?>" class="form-control" name="Nombre_FormacionCO" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="FechaI" class="col-lg-2 control-label">Fecha Inicio</label><div class="col-lg-6">
                                <input type="date" value="<?=$info -> fecha_inicio?>" class="form-control" name="Fecha_InicioFC" placeholder="dd/mm/aa">
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="FechaF" class="col-lg-2 control-label">Fecha Final</label><div class="col-lg-6">
                                <input type="date" value="<?=$info -> fecha_fin?>" class="form-control" name="Fecha_FinFC" placeholder="dd/mm/aa"></div>
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
                                <input type="text" readonly="readonly" class="form-control" value="<?=$info -> nombre?>" name="nombre_Idioma" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nivel" class="col-lg-2 control-label">Nivel  de Habla</label>
                            <div class="col-lg-6">
                                <input type="text" value="<?=$info -> nivel_habla?>" class="form-control" name="nivel_Habla" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NivelE" class="col-lg-2 control-label">Nivel  de Escritura</label>
                            <div class="col-lg-6">                 
                                <input type="text" value="<?=$info -> nivel_escribe?>" class="form-control" name="nivel_Escribe" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nivel" class="col-lg-2 control-label">Nivel  de Lectura</label>
                            <div class="col-lg-6">
                                <input type="text" value="<?=$info -> nivel_lee?>" class="form-control" name="nivel_Lee" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nivel" class="col-lg-2 control-label">Nivel  de Entendimiento</label>
                            <div class="col-lg-6">
                                <input type="text" value="<?=$info -> nivel_entiende?>" class="form-control" name="nivel_entiende" placeholder="">
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Software</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idProduccion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idProduccion" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo Software</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> tipo?>" class="form-control" name="tipoSoftware" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre del Software</label><div class="col-lg-6">

                                <input type="text" 
                                value="<?=$info -> nombre?>"
                                       class="form-control"
                                       name="nombreSoftware" placeholder="Nombre del Software">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> nombre_comercial?>"
                                       class="form-control"
                                       name="nombreC1" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> contrato_registro?>"
                                       class="form-control"
                                       name="ContratoRegistro1" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> lugar_publicacion?>"
                                       class="form-control"
                                       name="Lugar_Publicacion1" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> año_publicacion?>"
                                       class="form-control"
                                       name="Año_Publicacion1" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-lg-2 control-label">Url</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> url?>"
                                       class="form-control"
                                       name="url1" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-lg-2 control-label">Autores</label><div class="col-lg-6">
                                <textarea name="ap" readonly class="form-control" id="ap" rows="3" id="autoresP"
            ><?php if($autoresPq!=false){
            $f=false;
            foreach ($autoresPq->result() as $ap1) {
                if($f){
                    echo ", ";
                }$f=true;
              echo $ap1-> nombre." ".$ap1-> apellido." (".$ap1-> codigo.")";
            }}
            ?>
             </textarea>
             
                            </div>
                              <a data-toggle="modal" href="#autoresP" title="editar autores"><span class="glyphicon glyphicon-pencil"  ></span> </a>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Detalles</label><div class="col-lg-6">
                                <textarea class="form-control" rows="5" name="detalle1" id="detalles"><?=$info -> detalle?></textarea>
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Trabajo Tecnico</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idProduccion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idProduccion" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> tipo?>" class="form-control" name="tipoTrabajoTecnico" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"   class="col-lg-2 control-label">Nombre del Trabajo Tecnico</label><div class="col-lg-6">

                                <input type="text" 
                                       class="form-control"
                                       value="<?=$info -> nombre?>"
                                       name="nombre2" placeholder="Nombre del Trabajo Tecnico">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> nombre_comercial?>"
                                       class="form-control"
                                       name="nombreC2" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                    value="<?=$info -> contrato_registro?>"
                                       class="form-control"
                                       name="ContratoRegistro2" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> lugar_publicacion?>"
                                       class="form-control"
                                       name="Lugar_Publicacion2" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> año_publicacion?>"
                                       class="form-control"
                                       name="Año_Publicacion2" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mesesDuracion" class="col-lg-2 control-label">Meses de Duración</label><div class="col-lg-6">
                                <input type="text"
                                       class="form-control"
                                       value="<?=$info -> meses_duracion?>"
                                       name="Meses_Duracion2" placeholder="">  </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-lg-2 control-label">Autores</label><div class="col-lg-6">
                                <textarea name="ap" readonly class="form-control" id="ap" rows="3" id="autoresP"
            ><?php if($autoresPq!=false){
            $f=false;
            foreach ($autoresPq->result() as $ap1) {
                if($f){
                    echo ", ";
                }$f=true;
              echo $ap1-> nombre." ".$ap1-> apellido." (".$ap1-> codigo.")";
            }}
            ?>
             </textarea>
             
                            </div>
                              <a data-toggle="modal" href="#autoresP" title="editar autores"><span class="glyphicon glyphicon-pencil"  ></span> </a>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Detalle</label><div class="col-lg-6">
                                <textarea class="form-control" rows="5" name="detalle2" id="detalles"> <?=$info -> detalle?></textarea>
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Producto Tecnologico</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idProduccion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idProduccion" placeholder="Tipo de Proyecto">
                            </div> 
                          </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo de Producto Tecnológico</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> tipo?>" class="form-control" name="tipoProductoTecnologico" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre de Producto Tecnológico</label><div class="col-lg-6">

                                <input type="text"
                                value="<?=$info -> nombre?>"
                                       class="form-control"
                                       name="nombre3" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> nombre_comercial?>"
                                       class="form-control"
                                       name="nombreC3" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> contrato_registro?>"
                                       class="form-control"
                                       name="ContratoRegistro3" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> lugar_publicacion?>"
                                       class="form-control"
                                       name="Lugar_Publicacion3" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> año_publicacion?>"
                                       class="form-control"
                                       name="Año_Publicacion3" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mesesDuracion" class="col-lg-2 control-label">Meses de Duración</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> meses_duracion?>"
                                       class="form-control"
                                       name="Meses_Duracion3" placeholder="">  </div>
                        </div>
                        <div class="form-group">
                            <label for="areas" class="col-lg-2 control-label">Areas</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> areas?>"
                                       class="form-control"
                                       name="Areas3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sectores"  class="col-lg-2 control-label">Sectores</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> sectores?>"
                                       class="form-control"
                                       name="Sectores3" placeholder="">   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-lg-2 control-label">Autores</label><div class="col-lg-6">
                                <textarea name="ap" readonly class="form-control" id="ap" rows="3" id="autoresP"
            ><?php if($autoresPq!=false){
            $f=false;
            foreach ($autoresPq->result() as $ap1) {
                if($f){
                    echo ", ";
                }$f=true;
              echo $ap1-> nombre." ".$ap1-> apellido." (".$ap1-> codigo.")";
            }}
            ?>
             </textarea>
             
                            </div>
                              <a data-toggle="modal" href="#autoresP" title="editar autores"><span class="glyphicon glyphicon-pencil"  ></span> </a>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Detalles</label><div class="col-lg-6">
                                <textarea class="form-control" rows="5" name="detalle3" id="detalles"><?=$info -> detalle?></textarea>
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Proceso</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idProduccion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idProduccion" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo de Proceso</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> tipo?>" class="form-control" name="tipoProceso" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre de Proceso o técnica</label><div class="col-lg-6">

                                <input type="text" 
                                value="<?=$info -> nombre?>"
                                       class="form-control"
                                       name="nombre4" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> nombre_comercial?>"
                                       class="form-control"
                                       name="nombreC4" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> contrato_registro?>"
                                       class="form-control"
                                       name="ContratoRegistro4" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> lugar_publicacion?>"
                                       class="form-control"
                                       name="Lugar_Publicacion4" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> año_publicacion?>"
                                       class="form-control"
                                       name="Año_Publicacion4" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="areas" class="col-lg-2 control-label">Areas</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> areas?>"
                                       class="form-control"
                                       name="Areas4" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sectores"  class="col-lg-2 control-label">Sectores</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> sectores?>"
                                       class="form-control"
                                       name="Sectores4" placeholder="">   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-lg-2 control-label">Autores</label><div class="col-lg-6">
                                <textarea name="ap" readonly class="form-control" id="ap" rows="3" id="autoresP"
            ><?php if($autoresPq!=false){
            $f=false;
            foreach ($autoresPq->result() as $ap1) {
                if($f){
                    echo ", ";
                }$f=true;
              echo $ap1-> nombre." ".$ap1-> apellido." (".$ap1-> codigo.")";
            }}
            ?>
             </textarea>
             
                            </div>
                              <a data-toggle="modal" href="#autoresP" title="editar autores"><span class="glyphicon glyphicon-pencil"  ></span> </a>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Detalles</label><div class="col-lg-6">
                                <textarea class="form-control" rows="5" name="detalle4" id="detalles"> <?=$info -> detalle?></textarea>
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Norma</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idProduccion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idProduccion" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo de Norma</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> tipo?>" class="form-control" name="tipoNorma" placeholder="Tipo de Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre de la Norma</label><div class="col-lg-6">

                                <input type="text" 
                                value="<?=$info -> nombre?>"
                                       class="form-control"
                                       name="nombreP5" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="NombreC" class="col-lg-2 control-label">Nombre Comercial</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> nombre_comercial?>"
                                       class="form-control"
                                       name="nombreC5" placeholder="Nombre Comercial"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrato" class="col-lg-2 control-label">Contrato/Registro</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> contrato_registro?>"
                                       class="form-control"
                                       name="ContratoRegistro5" placeholder="" >     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> lugar_publicacion?>"
                                       class="form-control"
                                       name="Lugar_Publicacion5" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> año_publicacion?>"
                                       class="form-control"
                                       name="Año_Publicacion5" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mesesDuracion" class="col-lg-2 control-label">Meses de Duración</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> meses_duracion?>"
                                       class="form-control"
                                       name="Meses_Duracion5" placeholder="">  </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-lg-2 control-label">Autores</label><div class="col-lg-6">
                                <textarea name="ap" readonly class="form-control" id="ap" rows="3" id="autoresP"
            ><?php if($autoresPq!=false){
            $f=false;
            foreach ($autoresPq->result() as $ap1) {
                if($f){
                    echo ", ";
                }$f=true;
              echo $ap1-> nombre." ".$ap1-> apellido." (".$ap1-> codigo.")";
            }}
            ?>
             </textarea>
             
                            </div>
                              <a data-toggle="modal" href="#autoresP" title="editar autores"><span class="glyphicon glyphicon-pencil"  ></span> </a>
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Otra publicacion Tecnica</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idProduccion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idProduccion" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="Tipo" class="col-lg-2 control-label">Tipo Otra Publicacion Tecnica</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> tipo?>" class="form-control" name="tipoOtra" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreP"  class="col-lg-2 control-label">Nombre de Otra Publicacion Tecnica</label><div class="col-lg-6">

                                <input type="text" 
                                value="<?=$info -> nombre?>"
                                       class="form-control"
                                       name="nombreP6" placeholder="Nombre del Proyecto">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="lugarP" class="col-lg-2 control-label">Lugar de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> lugar_publicacion?>"
                                       class="form-control"
                                       name="Lugar_Publicacion6" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anioP" class="col-lg-2 control-label">Año de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> año_publicacion?>"
                                       class="form-control"
                                       name="Año_Publicacion6" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-lg-2 control-label">Autores</label><div class="col-lg-6">
                                <textarea name="ap" readonly class="form-control" id="ap" rows="3" id="autoresP"
            ><?php if($autoresPq!=false){
            $f=false;
            foreach ($autoresPq->result() as $ap1) {
                if($f){
                    echo ", ";
                }$f=true;
              echo $ap1-> nombre." ".$ap1-> apellido." (".$ap1-> codigo.")";
            }}
            ?>
             </textarea>
             
                            </div>
                              <a data-toggle="modal" href="#autoresP" title="editar autores"><span class="glyphicon glyphicon-pencil"  ></span> </a>
                        </div>
                        <div class="form-group">    
                            <label for="detalles" class="col-lg-2 control-label">Finalidad</label><div class="col-lg-6">
                                <textarea class="form-control" name="detalle6" rows="5" id="detalles"><?=$info -> detalle?></textarea>
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Norma</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idOtra_Publicacion?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idOtra_publicacion" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        
                        <div class="form-group"> 
                            <label for="Tipo" class="col-lg-2 control-label">Tipo</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> Tipo?>"
                                       class="form-control"
                                       name="tipoOtraP" placeholder="Tipo de Publicacion">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NombreOtraP" class="col-lg-2 control-label">Nombre del Proyecto</label><div class="col-lg-6">

                                <input type="text" 
                                value="<?=$info -> nombre_publicacion?>"
                                       class="form-control"
                                       name="nombreP7" placeholder="Nombre del Proyecto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pais" class="col-lg-2 control-label">Pais</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> pais?>"
                                       class="form-control"
                                       name="Pais7" placeholder="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="anoPublicacion" class="col-lg-2 control-label">Año de Publicación</label>
                            <div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> año_publicacion?>"
                                       class="form-control"
                                       name="Año_Publicacion7" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                            <div class="col-lg-6">
                                <textarea name="descripcion" class="form-control"  rows="5" id="descripcion"><?=$info -> descripcion?></textarea>
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Articulo</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idArticulo?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idArticulo" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        
                        <div class="form-group">
                            <label for="Nombre" class="col-lg-2 control-label">Nombre</label><div class="col-lg-6">
                                <input type="text" name="nombre8"
                                       class="form-control"
                                       value="<?=$info -> nombre?>"
                                       placeholder="Nombre Del Artículo" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="idioma" class="col-lg-2 control-label">Idioma de Publicación</label><div class="col-lg-6">
                                <input type="text" 
                                       class="form-control"
                                       value="<?=$info -> idioma_publicacion?>"
                                       name="Idioma_Publicacion8" placeholder="idioma de Publicación" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Pais" class="col-lg-2 control-label">Pais</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> pais?>"
                                       class="form-control"
                                       name="pais8" placeholder="Pais" required>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="Palabras Claves" class="col-lg-2 control-label"><br>Revista</label>
                            <div class="col-lg-4">

                                <select name="Revista_codigo"  class="selectpicker" data-live-search="true" tabindex="-98">
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
                                value="<?=$info -> vol_revista?>"
                                       class="form-control"
                                       name="Vol_Revista" placeholder="Volumen" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Paginai" class="col-lg-2 control-label">Pagina Inicial</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> pagina_inicial?>"
                                       class="form-control"
                                       name="Pagina_Inicial" placeholder="Pagina Inicial">     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="PaginaF" class="col-lg-2 control-label">Pagina Final</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> pag_final?>"
                                       class="form-control"
                                       name="Pagina_Final" placeholder="Pagina Final">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="anio" class="col-lg-2 control-label">Año</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> año?>"
                                       class="form-control"
                                       name="Año" placeholder="Año">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="Palabras Claves" class="col-lg-2 control-label">Palabras Claves</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> palabras_clave?>"
                                       class="form-control"
                                       name="Palabras_Clave" placeholder="separadas por ," >
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Publicacion</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> idArticulo?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="idArticulo" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="Nombre" class="col-lg-2 control-label">Nombre</label><div class="col-lg-6">
                                <input type="text" name="nombre9"
                                value="<?=$info -> nombre?>"
                                       class="form-control"
                                       placeholder="Nombre Del Artículo" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="Pais" class="col-lg-2 control-label">Pais</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> pais?>"
                                       class="form-control"
                                       name="pais9" placeholder="Pais" required>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="Palabras Claves" class="col-lg-2 control-label"><br>Revista</label>
                            <div class="col-lg-4">

                                <select name="Revista_codigo2"  class="selectpicker" data-live-search="true" tabindex="-98">
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
                                   value="<?=$info -> vol_revista?>"
                                       class="form-control"
                                       name="Vol_Revista2" placeholder="Volumen" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Paginai" class="col-lg-2 control-label">Pagina Inicial</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> pagina_inicial?>"
                                       class="form-control"
                                       name="Pagina_Inicial2" placeholder="Pagina Inicial">     
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="PaginaF" class="col-lg-2 control-label">Pagina Final</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> pag_final?>"
                                       class="form-control"
                                       name="Pagina_Final2" placeholder="Pagina Final" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="anio" class="col-lg-2 control-label">Año</label><div class="col-lg-6">
                                <input type="text"
                                value="<?=$info -> año?>"
                                       class="form-control"
                                       name="Año2" placeholder="Año">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="Palabras Claves" class="col-lg-2 control-label">Palabras Claves</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?=$info -> palabras_clave?>"
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Experiencia</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> id_experiencia?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="id_experiencia" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        <div class="form-group"> 
                            <label for="idExperiencia" class="col-lg-2 control-label">Nombre</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> nombre?>" class="form-control" name="Nombre_Experiencia_P" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="institucion" class="col-lg-2 control-label">Institución</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> institucion?>" class="form-control" name="Institucion" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="horas" class="col-lg-2 control-label">Horas de dedicacion Semanal</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> horas_dedicacion_semanal?>" class="form-control" name="Horas_Dedicacion_Semanal" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaI" class="col-lg-2 control-label">fecha Inicio</label><div class="col-lg-6">
                                <input type="date" value="<?=$info -> fecha_inicio?>" class="form-control" name="Fecha_InicioExperiencia" placeholder="dd/mm/aa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaF" class="col-lg-2 control-label">fecha Fin</label><div class="col-lg-6">
                                <input type="date" class="form-control" value="<?=$info -> fecha_fin?>" name="Fecha_FinExperiencia" placeholder="dd/mm/aa">
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
                            <label for="Tipo" class="col-lg-2 control-label">Id Actividad</label><div class="col-lg-6">
                                <input type="text" 
                                value="<?= $info-> id_actividad?>" 
                                       class="form-control"
                                       readonly="readonly"
                                       name="id_actividad" placeholder="Tipo de Proyecto">
                            </div>
                          </div>
                        <div class="form-group"> 
                            <label for="TipoActividad" class="col-lg-2 control-label">Tipo de Actividad</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> tipo?>" class="form-control" name="tipo_Actividad" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cargo" class="col-lg-2 control-label">Cargo</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> cargo?>" class="form-control" name="cargo" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Titulo" class="col-lg-2 control-label">Titulo</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> Titulo?>" class="form-control" name="titulo" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaI" class="col-lg-2 control-label">fecha Inicio</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> Fecha_Inicio?>" class="form-control" name="Fecha_InicioActividad" placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaF" class="col-lg-2 control-label">fecha Fin</label><div class="col-lg-6">
                                <input type="text" value="<?=$info -> Fecha_Fin?>" class="form-control" name="Fecha_FinActividad" placeholder="dd/mm/aaaa"> 
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
                            <label for="Nombre" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nombre_Revista" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="codigo" class="col-lg-2 control-label">Código</label>
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


 


<!--Modal autores--> 
                

    <div class="modal fade" id="autoresP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Modificar Informacion Autores</b></h5>
        
      </div>
      <div class="modal-body">
        <form>
                <div class="form-group">
                          
            <textarea  name = "ap1"class="form-control" id="ap1" rows="5" id="autoresP"
            ><?php
            $w="";
             if($autoresPq!=false){
            $f=false;
            foreach ($autoresPq->result() as $ap1) {
                if($f){
                    $w.= ", ";
                }$f=true;
              $w.= $ap1-> nombre." ".$ap1-> apellido." (".$ap1-> codigo.")";
            }}echo $w;
            ?></textarea>
                         
                        </div>
                       
           <b class="autor">Insertar otro autor<br></b>
             <select  data-live-search="true"  onChange="

          ap1.value=ap1.value+', '+this.options[this.selectedIndex].value" 
         class="selectpicker " id="sel2">
            <?php
            if($autoresAll!=false){
            foreach ($autoresAll->result() as $ap) {
               ?> 
               <option data-tokens="Espresso"><?php echo $ap-> nombre." ".$ap-> apellido." (".$ap-> codigo.")"?></option>

               <?php

            }}
            ?>
            </select>
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="modificarText1();">Modificar</button>
      </div>
    </div>
  </div>
</div>


     <script type="text/javascript">
                 function modificarText1(){
                    document.getElementById("ap").value = document.getElementById("ap1").value;
                 }
     </script>

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
