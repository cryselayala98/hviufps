 <?php
 $codigo=$segmento['codigo'];
$opcion=$segmento['value'];


    switch ($opcion) {
        case "DatosBasicos":

            //if (isset($_GET['est'])) {
            //    $est = $_GET['est'];
            //    if ($est == "ok") {
             //       ?><!--
                    <div class="alert alert-success">
                       <strong>Datos Guardados Exitosamente!!</strong> </div-->
                    <?php
             // }
         //   }
foreach($info->result() as $infoB) {

?>
<div class="container-fluid">
  <div class="row">
  
            <div>
                <div class="col-xs-4 col-md-6"><hr><p><b>Codigo: </b> <?php echo $infoB -> codigo. " "; ?></p> </div>
            </div>  
            <div>
                <div class="col-xs-4 col-md-6"><hr><p><b>Nombre: </b>  <?php echo $infoB -> nombre . " "; ?> </p></div>
            </div>
            <div>
               
                <div class="col-xs-4 col-md-6"><hr><p><b>Apellido: </b> <?php echo $infoB -> apellido . " "; ?> </p></div>
            </div>
            <div>
               
                <div class="col-xs-4 col-md-6"><hr><p><b>Correo: </b> <?php echo $infoB -> correo . " "; ?> </p></div>
            </div>
            <div>
               
               <div class="col-xs-4 col-md-6"><hr> <p><b>Identificacion: </b> <?php echo $infoB -> documento_id  . " "; ?> </p></div>
            </div>
            <div>
               
               <div class="col-xs-4 col-md-6"><hr> <p><b>Mi Nombre En Citaciones: </b>  <?php echo $infoB -> nombre_citaciones  . " "; ?> </p>
            </div>
            </div>
            <div>
                
                <div class="col-xs-4 col-md-6"><hr><p><b>Nacionalidad: </b>  <?php echo $infoB -> Nacionalidad  . " "; ?> </p>
            </div>
            </div>
            <div>
               
                <div class="col-xs-4 col-md-6"><hr><p><b>Tipo de Identificaión: </b>  <?php echo $infoB -> Tipo_documento  . " "; ?> </p></div>
            </div>
            <div>
                
               <div class="col-xs-4 col-md-6"><hr> <p><b>Lugar De Expedición: </b>  <?php echo $infoB -> lugar_expedicion  . " "; ?> </p>
            </div>
            </div>
            <div>
                
               <div class="col-xs-4 col-md-6"><hr> <p><b>Sexo: </b>  <?php echo $infoB -> sexo  . " "; ?> </p></div>
            </div>
            <div>
               
               <div class="col-xs-4 col-md-6"><hr> <p><b>Estado Civil: </b>  <?php echo $infoB -> estado_civil . " "; ?> </p></div>
            </div>
            <div>
               
               <div class="col-xs-4 col-md-6"> <hr><p><b>Lugar De Nacimiento: </b>  <?php echo $infoB -> lugar_nacimiento  . " "; ?> </p></div>
            </div>
            <div>
               
                <div class="col-xs-4 col-md-6"><hr><p><b>Fecha De Nacimiento: </b>  <?php echo $infoB -> fecha_nacimiento  . " "; ?> </p></div>
            </div>
</div>
</div>
            <button type="button" class="btn btn-danger"> <a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>">
                    Editar Datos Basicos</a></button>
            <?php
        }
            break;

        case "Proyectos":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Proyecto</a>
            <?php
           if($info!=false){
           foreach ($info->result() as $infoProyecto) { 
                ?>
                <div class="info">
                
                
                <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id proyecto:</b> <?php echo $infoProyecto -> idProyecto ?></p> </div>
                    <div class="col-xs-4 col-md-6"><p><b>tipo:</b> <?php echo $infoProyecto-> tipo ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>nombre proyecto:</b> <?php echo $infoProyecto -> nombre ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>fecha inicio:</b> <?php echo $infoProyecto -> fecha_inicio ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p> <b> fecha fin:</b> <?php echo $infoProyecto -> fecha_fin ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>resumen:</b> <?php echo $infoProyecto ->  resumen ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> codigo investigador</b> <?php echo $infoProyecto -> investigadorCodigo ?> </p></div></div>
                    
              <button type="button" class="btn btn-danger"> <a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $infoProyecto -> idProyecto ?>">
                    Editar Proyecto</a></button>
                    <br>
                    <br>


                <?php
                
           }} 
                break;
        case "Empresas":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Empresa</a>
            <?php

            if($info!=false){
                foreach ($info->result() as $empresa) {  
                    ?>
                    
                    <hr>
                        <div class="info">
                        <div class="col-xs-4 col-md-6"><p><b>Nit</b>: <?php echo $empresa -> nit ?> </p></div>
                        <div class="col-xs-4 col-md-6"><p><b> tipo:</b> <?php echo  $empresa -> tipo ?> </p></div>
                        <div class="col-xs-4 col-md-6"><hr><p> <b>nombre proyecto:</b> <?php echo $empresa -> nombre ?> </p></div>
                        <div class="col-xs-4 col-md-6"><hr><p><b> fecha registro:</b> <?php echo $empresa -> fecha_registro  ?></p></div>
                        <div class="col-xs-4 col-md-6"><hr><p> <b>numero productos:</b> <?php echo $empresa -> num_productos ?> </p></div>
                        <div class="col-xs-4 col-md-6"><hr><p><b> detalle:</b> <?php echo $empresa -> detalle?> </p></div>
                        <div class="col-xs-4 col-md-6"><hr><p> <b>codigo investigador</b>
                        <?php echo $empresa -> investigadorCodigo ?> </p> </div></div>
                    <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $empresa -> nit ?>">Editar Empresa</a></button>
                        
                
                    <?php
                }
            }

            break;
        case "FormacionesAcademicas":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Formacion Academica</a>
            <?php
            if($info!=false){
            foreach ($info->result() as $formacion) {

                ?>
                <hr>
                <div class="info">
                    <div class="col-xs-4 col-md-6"><p><b>id Formacion:</b> <?php echo $formacion-> idFormacion?></p></div>
                    <div class="col-xs-4 col-md-6"><p><b> tipo:</b> <?php echo $formacion ->  tipo_formacion  ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> Categoria:</b> <?php echo $formacion -> categoria ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> institucion:</b> <?php echo $formacion -> institucion ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre de la formacion:</b> <?php echo $formacion -> nombre_formacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>fecha inicio:</b> <?php echo $formacion -> fecha_inicio  ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>fecha fin</b> <?php echo $formacion -> fecha_fin?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>Proyecto investigativo realizado</b> <?php echo $formacion -> proyecto_invest_realizado ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> codigo investigador </b><?php echo $formacion -> investigadorCodigo  ?> </p> </div></div>
                 <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $formacion-> idFormacion?>">
                    Editar Formacion</a></button>

                <?php
            }}
            break;
        case "FormacionesComplementarias":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Formacion Complementaria</a>
            <?php
            if($info!=false){
            foreach ($info->result() as $formacion) {

               ?>
               <hr>
               <div class="info">
                    <div class="col-xs-4 col-md-6"><p><b>id Formacion:</b> <?php echo $formacion-> idFormacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><p><b>tipo:</b> <?php echo $formacion ->  tipo_formacion ?></p></div> 
                    <div class="col-xs-4 col-md-6"><hr><p><b> Categoria:</b> <?php echo $formacion -> categoria ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>institucion:</b> <?php echo $formacion -> institucion  ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre de la formacion:</b> <?php echo $formacion -> nombre_formacion ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> fecha inicio: </b><?php echo $formacion -> fecha_inicio  ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> fecha fin </b><?php echo $formacion -> fecha_fin ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>codigo investigador </b><?php echo $formacion -> investigadorCodigo ?> </p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $formacion-> idFormacion ?>">
                    Editar Formacion</a></button>
               
              
                <?php

            }}
            break;
        case "OtrasPublicaciones":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Otra Publicacion</a>
            <?php
            if($info!=false){
            foreach ($info->result() as $otra) {
                ?>
                <hr>
                <div class="info">
                    <div class="col-xs-4 col-md-6"><p><b>id otra publicacion:</b> <?php echo $otra -> idOtra_Publicacion?> </p></div>
                    <div class="col-xs-4 col-md-6"><p> <b>tipo:</b> <?php echo $otra -> Tipo ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b>Nombre publicacion:</b> <?php echo $otra -> nombre_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>pais:</b> <?php echo $otra -> pais ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>descripcion:</b> <?php echo $otra -> descripcion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>año publicacion: </b><?php echo $otra -> año_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>codigo investigador </b><?php echo $otra -> investigadorCodigo ?> </p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $otra -> idOtra_Publicacion?>">
                    Editar publicacion</a></button>
                
                
              
                <?php
            }}
            break;
        case "Idiomas":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Idioma</a>
            <?php
            if($info!=false){
            foreach ($info->result() as $infoIdioma) {
                ?>
                
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><p><b>Nombre idioma: </b><?php echo $infoIdioma -> nombre ?> </p></div>
                    <div class="col-xs-4 col-md-6"><p><b> Nivel habla:</b> <?php echo $infoIdioma -> nivel_habla ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> Nivel escribe: </b><?php echo $infoIdioma -> nivel_escribe ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>Nivel Lee:</b> <?php echo $infoIdioma -> nivel_lee ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> Nivel entiende:</b> <?php echo $infoIdioma -> nivel_entiende ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>codigo investigador </b><?php echo $infoIdioma -> investigadorCodigo ?> </p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $infoIdioma -> nombre ?>">
                    Editar informacion idioma</a></button>
                
                <?php
            }}
            break;

        case "Software":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Software</a>
            <?php
            if($info!=false){
            $i=-1;
            foreach ($info-> result() as $infoSoftware) {
                $i+=1;
                ?>
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id software: </b><?php echo $infoSoftware -> idProduccion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><p><b> tipo software: </b><?php echo $infoSoftware -> nombre_produccion ?></p></div> 
                    <div class="col-xs-4 col-md-6"><hr><p> <b>autores: </b><?php echo $autoresP[$i] ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b> nombre: </b><?php echo $infoSoftware -> nombre ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre comercial:</b> <?php echo $infoSoftware -> nombre_comercial ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>registro:</b> <?php echo $infoSoftware -> contrato_registro ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>lugar publicacion:</b> <?php echo $infoSoftware -> lugar_publicacion ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> año de publicacion: </b><?php echo $infoSoftware -> año_publicacion ?></p></div> 
                    <div class="col-xs-4 col-md-6"><hr><p> <b>url: </b><?php echo $infoSoftware -> url ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>detalle:</b> <?php echo $infoSoftware -> detalle ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>id investigador:</b> <?php echo $infoSoftware -> investigadorCodigo ?></p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $infoSoftware -> idProduccion ?>">
                    Editar informacion software</a></button>
                
               


                
                <?php
            }}
            break;
        case "TrabajosTecnicos":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Trabajo Tecnico</a>
            <?php
            if($info!=false){
              $i=-1;
            foreach ($info->result() as $infoTT) {
                 $i+=1;
                ?>
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id Trabajo Tecnico:</b> <?php echo $infoTT -> idProduccion ?></p></div>
                    <div class="col-xs-4 col-md-6"><p><b> tipo :</b> <?php echo $infoTT -> nombre_produccion ?> </p></div>
                    <div class="col-xs-4 col-md-6"> <hr><p> <b>autores:</b> <?php echo $autoresP[$i] ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b> nombre: </b><?php echo $infoTT -> nombre ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre comercial:</b> <?php echo $infoTT -> nombre_comercial ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> registro:</b> <?php echo $infoTT -> contrato_registro ?> </p></div>
                    <div class="col-xs-4 col-md-6"> <hr><p> <b>lugar publicacion: </b><?php echo $infoTT -> lugar_publicacion ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>año de publicacion:</b> <?php echo $infoTT -> año_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> meses de duracion:</b> <?php echo $infoTT -> meses_duracion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b>detalle: </b><?php echo $infoTT -> detalle ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> id investigador:</b> <?php echo $infoTT -> investigadorCodigo ?></p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?=$infoTT -> idProduccion?>">
                    Editar informacion trabajo tecnico</a></button>
                
                <?php
            }}
            break;
        case "ProductosTecnologicos":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Producto Tecnologico</a>
            <?php
            if($info!=false){
              $i=-1;
            foreach ($info->result() as $infoT1) {
                 $i+=1;
                ?>
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id Trabajo Producto:</b> <?php echo $infoT1 -> idProduccion ?></p></div>
                    <div class="col-xs-4 col-md-6"><p> <b>tipo :</b> <?php echo $infoT1 -> nombre_produccion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>autores:</b> <?php echo $autoresP[$i] ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre:</b> <?php echo $infoT1 -> nombre ?></p></div>
                    <div class="col-xs-4 col-md-6"> <hr><p><b> nombre</b> comercial: <?php echo $infoT1 -> nombre_comercial ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>registro: </b><?php echo $infoT1 -> contrato_registro ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> lugar publicacion:</b> <?php echo $infoT1 -> lugar_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>año de publicacion:</b> <?php echo $infoT1 -> año_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>meses de duracion: </b><?php echo $infoT1 -> meses_duracion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>areas:</b> <?php echo  $infoT1 -> areas ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>sectores:</b> <?php echo $infoT1 -> sectores ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>detalle:</b> <?php echo $infoT1 -> detalle ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> id investigador:</b> <?php echo $infoT1 -> investigadorCodigo ?></p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?=$infoT1 -> idProduccion?>">
                    Editar informacion Producto Tecnologico</a></button>
                
             
                <?php
            }}
            break;
        case "ProcesosTecnicas":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Proceso tecnico</a>
            <?php
            if($info!=false){
              $i=-1;
            foreach ($info->result() as $infoTT) {
                 $i+=1;
                ?>
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id proceso:</b> <?php echo $infoTT -> idProduccion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><p><b>tipo :</b> <?php echo $infoTT -> nombre_produccion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>autores:</b> <?php echo $autoresP[$i] ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b> nombre:</b> <?php echo $infoTT -> nombre ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre comercial:</b> <?php echo $infoTT -> nombre_comercial ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b>registro: </b><?php echo $infoTT -> contrato_registro ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>lugar publicacion:</b> <?php echo $infoTT -> lugar_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>año de publicacion:</b> <?php echo $infoTT -> año_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> areas: </b><?php echo $infoTT -> areas ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>sectores: </b><?php echo $infoTT -> sectores ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>palabras clave:</b> <?php echo $infoTT -> detalle ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b>id investigador: </b><?php echo $infoTT -> investigadorCodigo ?></p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?=$infoTT -> idProduccion?>">
                    Editar informacion Proceso</a></button>
            
                <?php
            }}
            break;
        case "NormasyRegulaciones":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Normas y Regulaciones</a>
            <?php
            if($info!=false){
              $i=-1;
            foreach ($info->result() as $infoTT) {
                 $i+=1;
                ?>
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id proceso:</b> <?php echo $infoTT -> idProduccion ?></p></div>
                    <div class="col-xs-4 col-md-6"><p><b>tipo :</b> <?php echo $infoTT -> nombre_produccion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> autores: </b><?php echo $autoresP[$i] ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre: </b><?php echo $infoTT -> nombre ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre comercial: </b><?php echo $infoTT -> nombre_comercial ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b> registro: <?php echo $infoTT -> contrato_registro ?> </b></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>lugar publicacion:</b> <?php echo $infoTT -> lugar_publicacion ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b>año de publicacion:</b> <?php echo $infoTT -> año_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>meses de duracion: </b><?php echo $infoTT -> meses_duracion ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>tid investigador:</b> <?php echo $infoTT -> investigadorCodigo ?></p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?=$infoTT -> idProduccion?>">
                    Editar informacion Norma</a></button>
                
                
                <?php
            }}
            break;
        case "OtrasPublicacionesTecnicas":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Otra Publicacionn Tecnica</a>
            <?php
            if($info!=false){
              $i=-1;
            foreach ($info->result() as $infoTT) {
                 $i+=1;
                ?>
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><hr><p><b>id proceso:</b> <?php echo $infoTT -> idProduccion ?></p></div>
                    <div class="col-xs-4 col-md-6"> <p><b>tipo :</b> <?php echo $infoTT -> nombre_produccion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>autores:</b> <?php echo $autoresP[$i] ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p> <b>nombre:</b> <?php echo $infoTT -> nombre ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>lugar publicacion:</b> <?php echo $infoTT -> lugar_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>año de publicacion: </b><?php echo $infoTT -> año_publicacion ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>finalidad:</b> <?php echo $infoTT -> detalle ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> id investigador:</b> <?php echo $infoTT -> investigadorCodigo ?></p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?=$infoTT -> idProduccion?>">
                    Editar informacion Publicacion</a></button>
                
                
                <?php
            }}
            break;
        case "Articulos":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Articulo</a>
            <?php
            if($info!=false){
                  $i=-1;
            foreach ($info->result() as $infoArticulo) {
                 $i+=1;
                ?>
                <div class="info">
                    <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id articulo:</b> <?php echo $infoArticulo -> idArticulo ?> </p></div>
                    <div class="col-xs-4 col-md-6"><p><b> Nombre : </b><?php echo $infoArticulo -> nombre ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>autores:</b> <?php echo $autoresA[$i] ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>idioma publicacion :</b> <?php echo $infoArticulo -> idioma_publicacion ?> </p></div> 
                    <div class="col-xs-4 col-md-6"><hr><p> <b>pais: </b><?php echo $infoArticulo -> pais ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> codigo revista:</b> <?php echo $infoArticulo -> Revista_codigo ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre revista: </b><?php echo $infoArticulo -> nombreRev ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>volumen de la revista:</b> <?php echo $infoArticulo -> vol_revista ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>editorial:</b> <?php echo $infoArticulo -> editorial ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>DOI:</b> <?php echo $infoArticulo -> DOI ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> Url:</b> <?php echo $infoArticulo -> url ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>paginas:</b> <?php echo $infoArticulo -> pagina_inicial  . "-" . $infoArticulo -> pag_final ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> año:</b> <?php echo $infoArticulo -> año ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>palabras clave:</b> <?php echo $infoArticulo -> palabras_clave ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b>id investigador: </b><?php echo $infoArticulo -> investigadorCodigo ?></p></div>
</div>
                    
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $infoArticulo -> idArticulo ?>">
                    Editar informacion articulo </a></button>
                
                
                <?php
            }}
            break;

        case "PublicacionesNoCientificas":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Publicacion No Cientifica</a>
            <?php
            if($info!=false){
                  $i=-1;
            foreach ($info->result() as $infoArticulo) {
                 $i+=1;
                ?>
                
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id articulo:</b> <?php echo $infoArticulo -> idArticulo ?></p></div>
                    <div class="col-xs-4 col-md-6"><p> <b>Nombre :</b> <?php echo $infoArticulo -> nombre ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>autores: </b><?php echo $autoresA[$i] ?>  </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b> pais: </b><?php echo $infoArticulo -> pais ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>codigo revista:</b> <?php echo $infoArticulo -> Revista_codigo ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>nombre revista: </b><?php echo $infoArticulo -> nombreRev ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> volumen de la revista: </b><?php echo $infoArticulo -> vol_revista ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> editorial: </b><?php echo $infoArticulo -> editorial ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> DOI:</b> <?php echo $infoArticulo -> DOI ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>Url:</b> <?php echo $infoArticulo -> url ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b>paginas: </b><?php echo $infoArticulo -> pagina_inicial . "-" . $infoArticulo -> pag_final ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>año:</b> <?php echo $infoArticulo -> año ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p><b> palabras clave: </b><?php echo $infoArticulo -> palabras_clave ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>id investigador:</b> <?php echo $infoArticulo -> investigadorCodigo ?></p></div></div>
                <button type="button" class="btn btn-danger"><a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $infoArticulo -> idArticulo ?>">
                    Editar informacion articulo </a></button>
                
              
                <?php
            }}
            break;
        case "ExperienciasProfesionales":
            ?>
            <a href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/$opcion" ?>> Registrar Experiencia Profesional</a>
            <?php
            if($info!=false){
            foreach ($info->result() as $infoExperiencia) {

                ?>
                <div class="info">
                   <hr>
                    <div class="col-xs-4 col-md-6"><p><b>id experiencia </b>: <?php echo $infoExperiencia -> id_experiencia ?></p></div>
                    <div class="col-xs-4 col-md-6"><p><b> nombre: </b><?php echo $infoExperiencia -> nombre ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b>institucion:</b> <?php echo $infoExperiencia ->  institucion ?>  </p></div>
                    <div class="col-xs-4 col-md-6"><hr> <p><b>horas dedicacion:</b> <?php echo  $infoExperiencia -> horas_dedicacion_semanal ?></p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b> fecha inicio:</b> <?php echo $infoExperiencia -> fecha_inicio ?> </p></div>
                    <div class="col-xs-4 col-md-6"><hr><p> <b> fecha fin: </b><?php echo $infoExperiencia -> fecha_fin ?> </p></div>

                    <div class="col-xs-4 col-md-6"><hr><p> <b>id investigador: </b><?php echo $codigo ?></p></div></div>
                <button type="button" class="btn btn-danger"> <a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/<?=$opcion?>/<?php echo $infoExperiencia -> id_experiencia ?>">
                    Editar experiencia profesional </a></button>
                <?php
                $idEx= $infoExperiencia -> id_experiencia;
                ?>
                <button type="button" class="btn btn-danger"> 
                <a style="color: white;" href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/Actividad/$idEx" ?>> Registrar Actividad</a></button>
                

                <?php

                //mostrar actividades

                $existenActividades = false;
                if($actividades!=false){
                foreach ($actividades as $infoActividad) {
                    if($infoActividad -> id_experiencia == $infoExperiencia -> id_experiencia){
                        $idEx= $infoExperiencia -> id_experiencia;
                        
                    if (!$existenActividades) {?>
                       
                        <hr> 
<br>
                         <p>--ACTIVIDADES--</p><?php
                            $existenActividades = true;
                        }
                        ?>
                        <a  href=<?="http://localhost/hviufps/index.php/Welcome/Registrar/$codigo/Actividad/$idEx" ?>> Registrar Actividad</a>
                        
                    <div class="info">
                       <hr>
                        <div class="col-xs-4 col-md-6"><p><b>id actividad :</b> <?php echo $infoActividad -> id_actividad ?></p></div>
                            <div class="col-xs-4 col-md-6"><p><b> cargo: </b><?php echo $infoActividad -> cargo ?></p></div> 
                            <div class="col-xs-4 col-md-6"><hr><p><b> titulo:</b> <?php echo $infoActividad -> Titulo ?></p></div>
                            <div class="col-xs-4 col-md-6"><hr><p><b> fecha inicio:</b> <?php echo $infoActividad -> Fecha_Inicio ?></p></div>
                            <div class="col-xs-4 col-md-6"><hr><p><b> fecha fin: </b><?php echo $infoActividad -> Fecha_Fin ?></p></div>
                            <div class="col-xs-4 col-md-6"><hr> <p><b>tipo:</b> <?php echo $infoActividad -> tipo ?></p> </div>

                            <div class="col-xs-4 col-md-6"><hr><p> <b>id investigador:</b> <?php echo $infoExperiencia ->  investigadorCodigo ?></p></div></div>
                    <button type="button" class="btn btn-danger"> <a id="letra" href="http://localhost/hviufps/index.php/Welcome/editar/<?=$codigo?>/Actividad/<?php echo $infoActividad -> id_actividad ?>">
                        Editar actividad </a></button>
                        <br>
                        <br>
                    <?php
                }}}
            }}
            break;
    
}
    ?>
                

                    </div>
                </div>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>


</body>
</html>





