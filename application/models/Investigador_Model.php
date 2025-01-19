<?php

if (!defined('BASEPATH'))  exit('No se permite acceso directo al script');

class Investigador_Model extends CI_Model{

public function __construct() {

parent::__construct();
$this->load->database();

	}

	function validarInicio($data){


			 $this->db->select('i.codigo');
			 $this->db->from('investigador i');
			 $this->db->where('i.codigo',$data['codigo']  );
			 $this->db->where('i.contraseña', $data['contraseña']);
			$consulta=$this->db->get();
			if($consulta->num_rows() > 0){

		return $consulta;

	} return false;
	}

	function registrarInvestigador($data){

		try {
	$this->db->insert('investigador', array(

		'codigo'=> $data['codigo'],
		'contraseña'=> $data['contraseña'],
		'nombre'=> $data['nombre'],
		'apellido'=> $data['apellido'],
		'correo'=> $data['correo']
			));

	} catch (Exception $e) {
		return false;	
		}
		return true;
	}

	function actualizarDatosBasicos($data){

$this->db->where('codigo',  $data['codigo']);
$this->db->update('investigador', $data); 

	}

function cargar($id, $opcion){


switch ($opcion) {
	case 'DatosBasicos':
	$this->db->select('*');
			 $this->db->from('investigador');
			 $this->db->where('codigo', $id  );
		break;
	case 'Proyectos':
	$this->db->select('*');
		$this->db->from('proyecto');
			 $this->db->where('investigadorCodigo',$id  );
		break;

			case 'Empresas':
			$this->db->select('*');
		$this->db->from('empresa');
			 $this->db->where('investigadorCodigo',$id  );
		break;

			case 'FormacionesAcademicas':
			$this->db->select('*');
		$this->db->from('formacion');
			 $this->db->where('investigadorCodigo',$id  );
			 $this->db->where('tipo_formacion','Academica' );
		break;

			case 'FormacionesComplementarias':
			$this->db->select('*');
		$this->db->from('formacion');
			 $this->db->where('investigadorCodigo',$id  );
			 $this->db->where('tipo_formacion','Complementaria' );
		break;

			case 'Idiomas':
			$this->db->select('*');
		$this->db->from('idioma');
		$this->db->where('investigadorCodigo',$id  );
		break;

			case 'Software':
			$this->db->select('*');
		 $this->db->from('produccion p');
		 $this->db->join('investigador_has_produccion b', 'b.Produccion_idProduccion=p.idProduccion');
		 $this->db->join('tipo_produccion t', 'p.Tipo_Produccion_codigo=t.codigo');
		 $this->db->where('b.investigadorCodigo', $id );
		 $this->db->where('t.nombre_produccion','Software' );
		break;

		case 'TrabajosTecnicos':
		$this->db->select('*');
		 $this->db->from('produccion p');
		 $this->db->join('investigador_has_produccion b', 'b.Produccion_idProduccion=p.idProduccion');
		 $this->db->join('tipo_produccion t', 'p.Tipo_Produccion_codigo=t.codigo');
		 $this->db->where('b.investigadorCodigo', $id );
		 $this->db->where('t.nombre_produccion','Trabajos Tecnicos' );
		break;

		case 'ProcesosTecnicas':
		$this->db->select('*');
		$this->db->from('produccion p');
		 $this->db->join('investigador_has_produccion b', 'b.Produccion_idProduccion=p.idProduccion');
		 $this->db->join('tipo_produccion t', 'p.Tipo_Produccion_codigo=t.codigo');
		 $this->db->where('b.investigadorCodigo', $id );
		 $this->db->where('t.nombre_produccion','Procesos o Tecnicas' );
		break;

		case 'OtrasPublicacionesTecnicas':
		$this->db->select('*');
		$this->db->from('produccion p');
		 $this->db->join('investigador_has_produccion b', 'b.Produccion_idProduccion=p.idProduccion');
		 $this->db->join('tipo_produccion t', 'p.Tipo_Produccion_codigo=t.codigo');
		 $this->db->where('b.investigadorCodigo', $id );
		 $this->db->where('t.nombre_produccion','Otra Publicacion Tecnica');
		break;

		case 'ProductosTecnologicos':
		$this->db->select('*');
		$this->db->from('produccion p');
		 $this->db->join('investigador_has_produccion b', 'b.Produccion_idProduccion=p.idProduccion');
		 $this->db->join('tipo_produccion t', 'p.Tipo_Produccion_codigo=t.codigo');
		 $this->db->where('b.investigadorCodigo', $id );
		 $this->db->where('t.nombre_produccion','Productos Tecnologicos' );
		break;

		case 'NormasyRegulaciones':
		$this->db->select('*');
		$this->db->from('produccion p');
		 $this->db->join('investigador_has_produccion b', 'b.Produccion_idProduccion=p.idProduccion');
		 $this->db->join('tipo_produccion t', 'p.Tipo_Produccion_codigo=t.codigo');
		 $this->db->where('b.investigadorCodigo', $id );
		 $this->db->where('t.nombre_produccion','Normas y Regulaciones' );
		break;

		case 'OtrasPublicaciones':
		$this->db->select('*');
		$this->db->from('otra_publicacion');
			 $this->db->where('investigadorCodigo',$id  );
		break;

		case 'Articulos':

		$this->db->select('a.idArticulo, a.tipo, a.nombre, a.idioma_publicacion, a.pais, a.vol_revista, a.pagina_inicial, a.pag_final, a.año, a.palabras_clave, a.Revista_codigo, t.nombre AS nombreRev, t.editorial, t.DOI, t.url, b.investigadorCodigo');

		$this->db->from('articulo a');
		$this->db->join('investigador_has_articulo b', 'b.Articulo_idArticulo=a.idArticulo');
		 $this->db->join('revista t', 'a.Revista_codigo= t.codigo');
		 $this->db->where('b.investigadorCodigo', $id );
		 $this->db->where('a.tipo','Articulo' );
		break;

		case 'PublicacionesNoCientificas':

$this->db->select('a.idArticulo, a.tipo, a.nombre, a.idioma_publicacion, a.pais, a.vol_revista, a.pagina_inicial, a.pag_final, a.año, a.palabras_clave, a.Revista_codigo, t.nombre AS nombreRev, t.editorial, t.DOI, t.url, b.investigadorCodigo');

		$this->db->from('articulo a');
		$this->db->join('investigador_has_articulo b', 'b.Articulo_idArticulo=a.idArticulo');
		 $this->db->join('revista t', 'a.Revista_codigo= t.codigo');
		 $this->db->where('b.investigadorCodigo', $id );
		 $this->db->where('a.tipo','Publicacion No Cientifica' );

		break;

		case 'ExperienciasProfesionales':
		$this->db->select('*');
		$this->db->from('experiencia_profesional');
		$this->db->where('investigadorCodigo',$id  );
		break;
	
}
$consulta=$this->db->get();

			 if($consulta->num_rows() > 0){

		return $consulta;

	} return false;


}
public function cargarRevistas(){
		$this->db->select('nombre');
		$this->db->from('revista');
		$consulta=$this->db->get();

			 if($consulta->num_rows() > 0){

		return $consulta;

	} return false;
}

public function cargarAutores(){//cargar todos los investigadores
	$this->db->select('i.nombre, i.codigo, i.apellido');
	$this->db->from('investigador i');
	$consulta=$this->db->get();

	if($consulta->num_rows() > 0){
			
		return $consulta;
	} 
}
public function cargarAutoresP1($codigoP){
	$this->db->select('i.nombre, i.codigo, i.apellido');
	$this->db->from('investigador i');
	$this->db->join('investigador_has_produccion b', 'b.investigadorCodigo=i.codigo');
	$this->db->where('b.Produccion_idProduccion', $codigoP );
	$consulta=$this->db->get();

	if($consulta->num_rows() > 0){
			
		return $consulta;
	} 
	  return false;
}

public function cargarAutoresP($codigoP){


		$this->db->select('i.nombre_citaciones');
		$this->db->from('investigador i');
		 $this->db->join('investigador_has_produccion b', 'b.investigadorCodigo=i.codigo');
		 $this->db->where('b.Produccion_idProduccion', $codigoP );
		$consulta=$this->db->get();

		if($consulta->num_rows() > 0){
			$cad="";
		 foreach ($consulta->result() as $info) {
			if($cad!=""){
				$cad.=", ";
			}
			$cad.=$info -> nombre_citaciones;


		 }
		return $cad;
	} 
	  return false;
 
}

public function cargarAutoresA($idArticulo){


		$this->db->select('i.nombre_citaciones');
		$this->db->from('investigador i');
		 $this->db->join('investigador_has_articulo b', 'b.investigadorCodigo=i.codigo');
		 $this->db->where('b.Articulo_idArticulo', $idArticulo );
		$consulta=$this->db->get();

 if($consulta->num_rows() > 0){
			$cad="";
		 foreach ($consulta->result() as $info) {
			if($cad!=""){
				$cad.=", ";
			}
			$cad.=$info -> nombre_citaciones;


		 }
		return $cad;
	} 
	  return false;
}

public function cargarInfoActividad($experienciaId){

$this->db->select('*');
		$this->db->from('actividad');
		$this->db->where('id_experiencia',$experienciaId  );
		$consulta=$this->db->get();

			 if($consulta->num_rows() > 0){

		return $consulta;

	} return false;

}

public function registrar($value, $data){ 

try{

	if($value=='Proyectos'){

		$this->db->insert('proyecto', array(

		'tipo' => $data['tipo'],
		'nombre' => $data['nombre'],
		'fecha_inicio' => $data['Fecha_Inicio'],
		'fecha_fin' => $data['Fecha_Fin'],
		'resumen' =>  $data['resumen'],
		'investigadorCodigo'=>$data['investigadorCodigo']

			));
	}else if($value=='Empresas'){
$this->db->insert('empresa', array(


		'nit'=>$data['nit'] ,
		'tipo'=>$data['tipo'] ,
		'nombre'=>$data['nombre'] ,
		'fecha_registro'=>$data['fecha_registro'],
		'num_productos'=>$data['num_productos'],
		'detalle'=>$data['detalle'] ,
		'investigadorCodigo'=>$data['investigadorCodigo'],

			));

	}else if($value=='FormacionesAcademicas' || $value=='FormacionesComplementarias'){

$this->db->insert('formacion', array(

		'tipo_Formacion'=>$data['tipo_Formacion'] ,
		'categoria'=>$data['categoria'],
		'institucion'=>$data['institucion'] ,
		'nombre_formacion'=>$data['nombre_formacion'],
	   'fecha_inicio'=> $data['fecha_inicio'] ,
		'fecha_fin'=>$data['fecha_fin'] ,
		'proyecto_invest_realizado'=>$data['proyecto_invest_realizado'] ,
		'investigadorCodigo'=>$data['investigadorCodigo']
			));
	}else if($value=='Idiomas'){

		$this->db->insert('idioma', array(

		'nombre'=>$data['nombre'] ,
		'nivel_habla'=>$data['nivel_habla'],
		'nivel_escribe'=>$data['nivel_escribe'] ,
		'nivel_lee'=>$data['nivel_lee'] ,
		'nivel_entiende'=>$data['nivel_entiende'],
		'investigadorCodigo'=>$data['investigadorCodigo']
			));
	}else if($value=='Software'|| $value=='TrabajosTecnicos'|| $value=='ProcesosTecnicas'|| $value=='OtrasPublicacionesTecnicas'|| $value=='ProductosTecnologicos'|| $value=='NormasyRegulaciones' ){

		$tipo_p=1;
		if($value=='TrabajosTecnicos')$tipo_p=2;
		else if($value=='ProductosTecnologicos')$tipo_p=3;
		else if($value=='ProcesosTecnicas')$tipo_p=4;
		else if($value=='NormasyRegulaciones')$tipo_p=5;
		else if($value=='OtrasPublicacionesTecnicas')$tipo_p=6;

		$this->db->insert('produccion', array(

		'tipo'=>$data['tipo'] ,
		'nombre'=>$data['nombre'] ,
		'nombre_comercial'=>$data['nombre_comercial'] ,
		'contrato_registro'=>$data['contrato_registro'] ,
		'lugar_publicacion'=>$data['lugar_publicacion'] ,
		'año_publicacion'=>$data['año_publicacion'] ,
		'meses_duracion'=>$data['meses_duracion'] ,
		'url'=>$data['url'] ,
		'areas'=>$data['areas'],
		'sectores'=>$data['sectores'] ,
		'detalle'=>$data['detalle'] ,
		'Tipo_Produccion_codigo'=>$tipo_p
			));

		$idProduccion ='';

		$this->db->select('idProduccion');
		$this->db->from('produccion ');
		$this->db->where('nombre', $data['nombre'] );
		$consulta=$this->db->get();

		foreach ($consulta->result() as $infoP) {
			$idProduccion= $infoP -> idProduccion;
		}

		$this->db->insert('investigador_has_produccion', array(

			'investigadorCodigo'=>$data['investigadorCodigo'],
			'Produccion_idProduccion'=> $idProduccion

			));

		

	}else if($value=='OtrasPublicaciones'){

		$this->db->insert('otra_publicacion', array(

		'Tipo'=>$data['Tipo'],
		'nombre_publicacion'=>$data['nombre_publicacion'] ,
		'pais'=>$data['pais'] ,
		'descripcion'=>$data['descripcion'] ,
		'año_publicacion'=>$data['año_publicacion'] ,
		'investigadorCodigo'=>$data['investigadorCodigo']
		
			));

	}else if($value=='Articulos' || $value=='PublicacionesNoCientificas'){
		
//buscar la revista

		$this->db->select('codigo');
		$this->db->from('revista');
		$this->db->where('nombre', $data['Revista_codigo'] );

		$consulta = $this->db->get();

		$this->db->insert('articulo', array(

		'tipo'=>$data['tipo'],
		'nombre'=>$data['nombre'] ,
		'idioma_publicacion'=>$data['idioma_publicacion'],
		'pais'=>$data['pais'] ,
		'Revista_codigo'=>$consulta -> result ()[0] -> codigo ,
		'vol_revista'=>$data['vol_revista'] ,
	   'pagina_inicial'=> $data['pagina_inicial'] ,
		'pag_final'=>$data['pag_final'] ,
		'año'=>$data['año'] ,
		'palabras_clave'=>$data['palabras_clave'] ,
			));

		$idArticulo ='';
		$this->db->select('idArticulo');
		$this->db->from('articulo ');
		$this->db->where('nombre', $data['nombre'] );
		$consulta=$this->db->get();

		foreach ($consulta->result() as $infoA) {
			$idArticulo= $infoA -> idArticulo;
		}

		$this->db->insert('investigador_has_articulo', array(

			'investigadorCodigo'=>$data['investigadorCodigo'],
			'Articulo_idArticulo'=> $idArticulo

			));

	}else if($value=='ExperienciasProfesionales'){

		$this->db->insert('experiencia_profesional', array(

		'nombre'=>$data['nombre'] ,
		'institucion'=>$data['institucion'],
	   'horas_dedicacion_semanal'=> $data['horas_dedicacion_semanal'] ,
		'fecha_inicio'=>$data['fecha_inicio'] ,
	   'fecha_fin'=>$data['fecha_fin'] ,
		'investigadorCodigo'=>$data['investigadorCodigo']
			));

	}else if($value=='Actividad'){

		$this->db->insert('actividad', array(

		'tipo' => $data['tipo'] ,
        'cargo' => $data['cargo'] ,
        'Titulo' => $data['Titulo'] ,
        'Fecha_Inicio' => $data['Fecha_Inicio'] ,
        'Fecha_Fin' => $data['Fecha_Fin'] ,
        'id_experiencia' => $data['id_experiencia']

			));

	}else if($value=='Revista'){

		$this->db->insert('revista', array(

		'codigo'=> $data['codigo'],
		'nombre'=> $data['nombre'],
		'editorial'=> $data['editorial'],
		'DOI'=> $data['DOI'],
		'url'=> $data['url']
			));

	}

} catch (Exception $e) {
		return false;	
		}
		return true;

}



public function editar($value, $data, $codigo){ 

try{
if($value=='DatosBasicos'){

$this->db->where('codigo', $codigo);
$this->db->update('investigador', array(

	'nombre_citaciones' =>$data['nombre_citaciones'] ,
       'Nacionalidad' => $data['Nacionalidad'] ,
       'Tipo_documento' => $data['Tipo_documento'],
        'lugar_expedicion' =>$data['lugar_expedicion'] ,
       'sexo' => $data['sexo'] ,
       'estado_civil' => $data['estado_civil'],
        'lugar_nacimiento' =>$data['lugar_nacimiento'],
       'fecha_nacimiento' => $data['fecha_nacimiento'],
       'contraseña' => $data['contraseña'],
       'nombre' => $data['nombre'],
       'apellido' => $data['apellido'],
       'correo' => $data['correo'],
       'documento_id' => $data['documento_id']

			));

}
	else if($value=='Proyectos'){

		$this->db->where('idProyecto', $data['idProyecto']);
		$this->db->update('proyecto', array(

		'tipo' => $data['tipo'],
		'nombre' => $data['nombre'],
		'fecha_inicio' => $data['Fecha_Inicio'],
		'fecha_fin' => $data['Fecha_Fin'],
		'resumen' =>  $data['resumen'],
		'investigadorCodigo'=>$data['investigadorCodigo']

			));
	}else if($value=='Empresas'){
$this->db->where('nit', $data['nit']);
$this->db->update('empresa', array(


		'nit'=>$data['nit'] ,
		'tipo'=>$data['tipo'] ,
		'nombre'=>$data['nombre'] ,
		'fecha_registro'=>$data['fecha_registro'],
		'num_productos'=>$data['num_productos'],
		'detalle'=>$data['detalle'] ,
		'investigadorCodigo'=>$data['investigadorCodigo'],

			));

	}else if($value=='FormacionesAcademicas' || $value=='FormacionesComplementarias'){
$this->db->where('idFormacion', $data['idFormacion']);
$this->db->update('formacion', array(

		//'tipo_Formacion'=>$data['tipo_Formacion'] ,
		'categoria'=>$data['categoria'],
		'institucion'=>$data['institucion'] ,
		'nombre_formacion'=>$data['nombre_formacion'],
	   'fecha_inicio'=> $data['fecha_inicio'] ,
		'fecha_fin'=>$data['fecha_fin'] ,
		'proyecto_invest_realizado'=>$data['proyecto_invest_realizado'] ,
		'investigadorCodigo'=>$data['investigadorCodigo']
			));
	}else if($value=='Idiomas'){
$this->db->where('nombre', $data['nombre']);
$this->db->where('investigadorCodigo', $data['investigadorCodigo']);
		$this->db->update('idioma', array(

		'nombre'=>$data['nombre'] ,
		'nivel_habla'=>$data['nivel_habla'],
		'nivel_escribe'=>$data['nivel_escribe'] ,
		'nivel_lee'=>$data['nivel_lee'] ,
		'nivel_entiende'=>$data['nivel_entiende'],
		'investigadorCodigo'=>$data['investigadorCodigo']
			));
	}else if($value=='Software'|| $value=='TrabajosTecnicos'|| $value=='ProcesosTecnicas'|| $value=='OtrasPublicacionesTecnicas'|| $value=='ProductosTecnologicos'|| $value=='NormasyRegulaciones' ){

$this->db->where('idProduccion', $data['idProduccion']);
		$this->db->update('produccion', array(


		'tipo'=>$data['tipo'] ,
		'nombre'=>$data['nombre'] ,
		'nombre_comercial'=>$data['nombre_comercial'] ,
		'contrato_registro'=>$data['contrato_registro'] ,
		'lugar_publicacion'=>$data['lugar_publicacion'] ,
		'año_publicacion'=>$data['año_publicacion'] ,
		'meses_duracion'=>$data['meses_duracion'] ,
		'url'=>$data['url'] ,
		'areas'=>$data['areas'],
		'sectores'=>$data['sectores'] ,
		'detalle'=>$data['detalle'] ,
		
			));

	//	$idProduccion ='';

	//	$this->db->select('idProduccion');
	//	$this->db->from('produccion ');
	//	$this->db->where('nombre', $data['nombre'] );
	//	$consulta=$this->db->get();

	//	foreach ($consulta->result() as $infoP) {
	//		$idProduccion= $infoP -> idProduccion;
	//	}

	//	$this->db->update('investigador_has_produccion', array(

	//		'investigadorCodigo'=>$data['investigadorCodigo'],
		//	'Produccion_idProduccion'=> $idProduccion

		//	));

		

	}else if($value=='OtrasPublicaciones'){
		$this->db->where('idOtra_Publicacion', $data['idOtra_Publicacion']);
		$this->db->update('otra_publicacion', array(

		'Tipo'=>$data['Tipo'],
		'nombre_publicacion'=>$data['nombre_publicacion'] ,
		'pais'=>$data['pais'] ,
		'descripcion'=>$data['descripcion'] ,
		'año_publicacion'=>$data['año_publicacion'] ,
		'investigadorCodigo'=>$data['investigadorCodigo']
		
			));

	}else if($value=='Articulos' || $value=='PublicacionesNoCientificas'){

		$this->db->select('codigo');
		$this->db->from('revista');
		$this->db->where('nombre', $data['Revista_codigo'] );

		$consulta = $this->db->get();

		$this->db->where('idArticulo', $data['idArticulo']);
$this->db->update('articulo', array(

		'tipo'=>$data['tipo'],
		'nombre'=>$data['nombre'] ,
		'idioma_publicacion'=>$data['idioma_publicacion'],
		'pais'=>$data['pais'] ,
		'Revista_codigo'=>$consulta -> result ()[0] -> codigo ,
		'vol_revista'=>$data['vol_revista'] ,
	   'pagina_inicial'=> $data['pagina_inicial'] ,
		'pag_final'=>$data['pag_final'] ,
		'año'=>$data['año'] ,
		'palabras_clave'=>$data['palabras_clave'] ,
			));

	//	$idArticulo ='';
	//	$this->db->select('idArticulo');
	//	$this->db->from('articulo ');
	//	$this->db->where('nombre', $data['nombre'] );
	//	$consulta=$this->db->get();

	//	foreach ($consulta->result() as $infoA) {
	//		$idArticulo= $infoA -> idArticulo;
	//	}

	//	$this->db->update('investigador_has_articulo', array(

		//	'investigadorCodigo'=>$data['investigadorCodigo'],
		//	'Articulo_idArticulo'=> $idArticulo

		//	));

	}else if($value=='ExperienciasProfesionales'){
$this->db->where('id_experiencia', $data['id_experiencia']);
		$this->db->update('experiencia_profesional', array(

		'nombre'=>$data['nombre'] ,
		'institucion'=>$data['institucion'],
	   'horas_dedicacion_semanal'=> $data['horas_dedicacion_semanal'] ,
		'fecha_inicio'=>$data['fecha_inicio'] ,
	   'fecha_fin'=>$data['fecha_fin'] ,
		'investigadorCodigo'=>$data['investigadorCodigo']
			));

	}else if($value=='Actividad'){
$this->db->where('id_actividad', $data['id_actividad']);
		$this->db->update('actividad', array(

		'tipo' => $data['tipo'] ,
        'cargo' => $data['cargo'] ,
        'Titulo' => $data['Titulo'] ,
        'Fecha_Inicio' => $data['Fecha_Inicio'] ,
        'Fecha_Fin' => $data['Fecha_Fin'] ,
       
			));

	}else if($value=='Revista'){
$this->db->where('codigo', $data['codigo']);
		$this->db->update('revista', array(

		'idProyecto'=> $data['codigo'],
		'contraseÃ±a'=> $data['contraseÃ±a'],
		'nombre'=> $data['nombre'],
		'apellido'=> $data['apellido'],
		'correo'=> $data['correo']
			));

	}

} catch (Exception $e) {
		return false;	
		}
		return true;

}

public function cargarInfo($opcion, $id){

$tabla='';
$clave='';
$clave2=''; //clave 2 idiomas

if($opcion=='DatosBasicos'){
$tabla='investigador';
$clave='codigo';
	}
	else if($opcion=='Proyectos'){
$tabla='proyecto';
$clave='idProyecto';
	}
	else if($opcion=='Empresas'){
$tabla='empresa';
$clave='nit';
	}
	else if($opcion=='FormacionesAcademicas' || $opcion=='FormacionesComplementarias'){
$tabla='formacion';
$clave='idFormacion';
	}
	else if($opcion=='Idiomas'){
$tabla='idioma';
$clave= 'nombre';
$clave2= 'investigadorCodigo'; //ojo
	}
	else  if($opcion == 'Software' ||$opcion == 'TrabajosTecnicos'||$opcion =='ProcesosTecnicas' ||$opcion =='OtrasPublicacionesTecnicas' ||$opcion =='ProductosTecnologicos'  ||$opcion =='NormasyRegulaciones'){
$tabla='produccion';
$clave='idProduccion';
	}
	else if($opcion=='OtrasPublicaciones'){
$tabla='otra_publicacion';
$clave='idOtra_Publicacion';
	}
	else if($opcion=='Articulos' || $opcion=='PublicacionesNoCientificas'){
$tabla='articulo';
$clave='idArticulo';
	}
	else if($opcion=='ExperienciasProfesionales'){
$tabla='experiencia_profesional';
$clave='id_experiencia';
	}
	else if($opcion=='Actividad'){
$tabla='actividad';
$clave='id_actividad';
	}
	else if($opcion=='Revista'){
$tabla='revista';
$clave='codigo';
	}


	try {
		$this->db->select('*');
		$this->db->from($tabla);

		if($opcion=='Idiomas'){

		$this->db->where($clave, $id [0]);//nombre
		$this->db->where($clave2, $id[1] );//cod inves

		}else{

		$this->db->where($clave, $id );
			}
		$consulta=$this->db->get();
	
	} catch (Exception $e) {
		
	return false;	
		}
		return $consulta->result()[0] ;
	
}

}

?>