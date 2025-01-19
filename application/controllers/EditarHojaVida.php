<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditarHojaVida extends CI_Controller {

public function __construct() {

parent::__construct();
$this->load->model('Investigador_Model'); 
$this->load->helper('url');
}

public function procesoEditar(){

$codigo= $this->uri-> segment(3);  
$opcion= $this->uri-> segment(4);

$data=array();

switch ($opcion) {

        case 'DatosBasicos':

        $data['nombre_citaciones'] = $_POST['Nombre_Citaciones_Basicos'];
        $data['Nacionalidad'] = $_POST['NacionalidadBasicos'];
        $data['Tipo_documento'] = $_POST['DocBasicos'];
        $data['lugar_expedicion'] = $_POST['Lugar_Expedicion_Basicos'];
        $data['sexo'] = $_POST['sBasicos'];
        $data['estado_civil']=$_POST['estadoCBasicos'];
        $data['lugar_nacimiento']=$_POST['Lugar_Nacimiento_Basicos'];
        $data['fecha_nacimiento']=$_POST['Fecha_Nacimiento_Basicos'];
        $data['contraseña']=$_POST['claveBasicos'];
        $data['nombre']=$_POST['nombreBasicos'];
        $data['apellido']=$_POST['apellidoBasicos'];
        $data['correo']=$_POST['correoBasicos'];
        $data['documento_id']=$_POST['documentoBasicos'];

        break;

	case 'Proyectos':
        $data['idProyecto'] = $_POST['idProyecto'];
	$data['tipo'] = $_POST['tipoP'];
        $data['nombre'] = $_POST['nombreP'];
        $data['Fecha_Inicio'] = $_POST['Fecha_Inicio'];
        $data['Fecha_Fin'] = $_POST['Fecha_Fin'];
        $data['resumen'] =  htmlspecialchars($_POST['resumen']);
        $data['investigadorCodigo']=$codigo;

		break;

			case 'Empresas':

	$data['nit'] =$_POST['nit'];
	$data['tipo'] =$_POST['tipo_Empresa'];
        $data['nombre'] =$_POST['nombre_Empresa'];
        $data['fecha_registro'] =$_POST['Fecha_Registro'];
        $data['num_productos'] =$_POST['num_Productos'];
        $data['detalle'] = htmlspecialchars($_POST['detalleE']);
        $data['investigadorCodigo']=$codigo;
			
		break;

			case 'FormacionesAcademicas':
        $data['idFormacion'] =$_POST['idFormacion'];
	$data['tipo_Formacion'] ='Academica';
        $data['categoria'] =$_POST['Categoria'];
        $data['institucion'] =$_POST['institucion'];
        $data['nombre_formacion'] =$_POST['Nombre_Formacion'];
        $data['fecha_inicio'] =$_POST['Fecha_InicioFA'];
        $data['fecha_fin'] =$_POST['Fecha_FinFA'];
        $data['proyecto_invest_realizado'] =$_POST['Proyecto_Invest_Realizado'];
        $data['investigadorCodigo']=$codigo;
			
		break;

			case 'FormacionesComplementarias':
         $data['idFormacion'] =$_POST['idFormacion'];
	$data['tipo_Formacion'] ='Complementaria';
        $data['categoria'] =$_POST['CategoriaCO'];
        $data['institucion'] =$_POST['institucionCO'];
        $data['nombre_formacion'] =$_POST['Nombre_FormacionCO'];
        $data['fecha_inicio'] =$_POST['Fecha_InicioFC'];
        $data['fecha_fin'] =$_POST['Fecha_FinFC'];
        $data['proyecto_invest_realizado'] ='';
        $data['investigadorCodigo']=$codigo;
		
		break;

			case 'Idiomas':

	$data['nombre'] =$_POST['nombre_Idioma'];
        $data['nivel_habla'] =$_POST['nivel_Habla'];
        $data['nivel_escribe'] =$_POST['nivel_Escribe'];
        $data['nivel_lee'] =$_POST['nivel_Lee'];
        $data['nivel_entiende'] =$_POST['nivel_entiende'];
        $data['investigadorCodigo']=$codigo;
		
		break;

		//inicialmente al registrar una produccion yo solo voy a ser el auto, luego podre insertar otros autores

		case 'Software':
        $data['idProduccion'] =$_POST['idProduccion'];
	$data['tipo'] =$_POST['tipoSoftware'];
        $data['nombre'] =$_POST['nombreSoftware'];
        $data['nombre_comercial'] =$_POST['nombreC1'];
        $data['contrato_registro'] =$_POST['ContratoRegistro1'];
        $data['lugar_publicacion'] =$_POST['Lugar_Publicacion1'];
        $data['año_publicacion'] =$_POST['Año_Publicacion1'];
        $data['meses_duracion'] ='';
        $data['url'] =$_POST['url1'];
        $data['areas'] ='';
        $data['sectores'] ='';
        $data['detalle'] =htmlspecialchars($_POST['detalle1']);
        $data['investigadorCodigo']=$codigo;
		
		break;

		case 'TrabajosTecnicos':
        $data['idProduccion'] =$_POST['idProduccion'];
	$data['tipo'] =$_POST['tipoTrabajoTecnico'];
        $data['nombre'] =$_POST['nombre2'];
        $data['nombre_comercial'] =$_POST['nombreC2'];
        $data['contrato_registro'] =$_POST['ContratoRegistro2'];
        $data['lugar_publicacion'] =$_POST['Lugar_Publicacion2'];
        $data['año_publicacion'] =$_POST['Año_Publicacion2'];
        $data['meses_duracion'] =$_POST['Meses_Duracion2'];
        $data['url'] ='';
        $data['areas'] ='';
        $data['sectores'] ='';
        $data['detalle'] =htmlspecialchars($_POST['detalle2']);
        $data['investigadorCodigo']=$codigo;
		
		break;

		case 'ProcesosTecnicas':
        $data['idProduccion'] =$_POST['idProduccion'];
	$data['tipo'] =$_POST['tipoProceso'];
        $data['nombre'] =$_POST['nombre4'];
        $data['nombre_comercial'] =$_POST['nombreC4'];
        $data['contrato_registro'] =$_POST['ContratoRegistro4'];
        $data['lugar_publicacion'] =$_POST['Lugar_Publicacion4'];
        $data['año_publicacion'] =$_POST['Año_Publicacion4'];
        $data['meses_duracion'] ='';
        $data['url'] ='';
        $data['areas'] =$_POST['Areas4'];
        $data['sectores'] =$_POST['Sectores4'];
        $data['detalle'] =htmlspecialchars($_POST['detalle4']);
        $data['investigadorCodigo']=$codigo;
	
		break;

		case 'OtrasPublicacionesTecnicas':
        $data['idProduccion'] =$_POST['idProduccion'];
	$data['tipo'] =$_POST['tipoOtra'];
        $data['nombre'] =$_POST['nombreP6'];
        $data['nombre_comercial'] ='';
        $data['contrato_registro'] ='';
        $data['lugar_publicacion'] =$_POST['Lugar_Publicacion6'];
        $data['año_publicacion'] =$_POST['Año_Publicacion6'];
        $data['meses_duracion'] =$_POST['Meses_Duracion'];
        $data['url'] =$_POST['url'];
        $data['areas'] =$_POST['Areas'];
        $data['sectores'] =$_POST['Sectores'];
        $data['detalle'] =htmlspecialchars($_POST['detalle6']);
        $data['investigadorCodigo']=$codigo;
		
		break;

		case 'ProductosTecnologicos':
        $data['idProduccion'] =$_POST['idProduccion'];
	$data['tipo'] =$_POST['tipoProductoTecnologico'];
        $data['nombre'] =$_POST['nombre3'];
        $data['nombre_comercial'] =$_POST['nombreC3'];
        $data['contrato_registro'] =$_POST['ContratoRegistro3'];
        $data['lugar_publicacion'] =$_POST['Lugar_Publicacion3'];
        $data['año_publicacion'] =$_POST['Año_Publicacion3'];
        $data['meses_duracion'] =$_POST['Meses_Duracion3'];
        $data['url'] ='';
        $data['areas'] =$_POST['Areas3'];
        $data['sectores'] =$_POST['Sectores3'];
        $data['detalle'] =htmlspecialchars($_POST['detalle3']);
        $data['investigadorCodigo']=$codigo;
		
		break;

		case 'NormasyRegulaciones':
        $data['idProduccion'] =$_POST['idProduccion'];
	$data['tipo'] =$_POST['tipoNorma'];
        $data['nombre'] =$_POST['nombreP5'];
        $data['nombre_comercial'] =$_POST['nombreC5'];
        $data['contrato_registro'] =$_POST['ContratoRegistro5'];
        $data['lugar_publicacion'] =$_POST['Lugar_Publicacion5'];
        $data['año_publicacion'] =$_POST['Año_Publicacion5'];
        $data['meses_duracion'] =$_POST['Meses_Duracion5'];
        $data['url'] ='';
        $data['areas'] ='';
        $data['sectores'] ='';
        $data['detalle'] ='';
        $data['investigadorCodigo']=$codigo;
		
		break;

		case 'OtrasPublicaciones':    
        $data['idOtra_Publicacion'] =$_POST['idOtra_publicacion'];
	$data['Tipo'] =$_POST['tipoOtraP'];
	$data['nombre_publicacion'] =$_POST['nombreP7'];
        $data['pais'] =$_POST['Pais7'];
        $data['descripcion'] =htmlspecialchars($_POST['descripcion']);
        $data['año_publicacion'] =$_POST['Año_Publicacion7'];
        $data['investigadorCodigo']=$codigo;
	
		break;

		case 'Articulos':
        $data['idArticulo'] =$_POST['idArticulo'];
        $data['tipo'] ='Articulo';
        $data['nombre'] =$_POST['nombre8'];
        $data['idioma_publicacion'] =$_POST['Idioma_Publicacion8'];
        $data['pais'] =$_POST['pais8'];
        $data['Revista_codigo'] =$_POST['Revista_codigo'];
        $data['vol_revista'] =$_POST['Vol_Revista'];
        $data['pagina_inicial'] =$_POST['Pagina_Inicial'];
        $data['pag_final'] =$_POST['Pagina_Final'];
        $data['año'] =$_POST['Año'];
        $data['palabras_clave'] =$_POST['Palabras_Clave'];
        $data['investigadorCodigo']=$codigo;

		break;

		case 'PublicacionesNoCientificas':
                $data['idArticulo'] =$_POST['idArticulo'];
        $data['tipo'] ='Publicacion No Cientifica';
	$data['nombre'] =$_POST['nombre9'];
        $data['idioma_publicacion'] =$_POST['Idioma_Publicacion2'];
        $data['pais'] =$_POST['pais9'];
        $data['Revista_codigo'] =$_POST['Revista_codigo2'];
        $data['vol_revista'] =$_POST['Vol_Revista2'];
        $data['pagina_inicial'] =$_POST['Pagina_Inicial2'];
        $data['pag_final'] =$_POST['Pagina_Final2'];
        $data['año'] =$_POST['Año2'];
        $data['palabras_clave'] =$_POST['Palabras_Clave2'];
        $data['investigadorCodigo']=$codigo;

		break;

		case 'ExperienciasProfesionales':  
	 $data['id_experiencia'] =$_POST['id_experiencia'];
        $data['nombre'] =$_POST['Nombre_Experiencia_P'];	
        $data['institucion'] =$_POST['Institucion'];
        $data['horas_dedicacion_semanal'] =$_POST['Horas_Dedicacion_Semanal'];
        $data['fecha_inicio'] =$_POST['Fecha_InicioExperiencia'];
        $data['fecha_fin'] =$_POST['Fecha_FinExperiencia'];
        $data['investigadorCodigo']=$codigo;

		break;


		case 'Actividad':
                $data['id_actividad'] =$_POST['id_actividad'];
	$data['tipo'] =$_POST['tipo_Actividad'];
        $data['cargo'] =$_POST['cargo'];
        $data['Titulo'] =$_POST['titulo'];
        $data['Fecha_Inicio'] =$_POST['Fecha_InicioActividad'];
        $data['Fecha_Fin'] =$_POST['Fecha_FinActividad'];
      
		
		break;

		case 'Revista':

		$data['nombre'] =$_POST['nombre_Revista'];
        $data['codigo'] =$_POST['codigo_Revista'];
        $data['editorial'] =$_POST['editorial'];
        $data['DOI'] =$_POST['DOI'];
        $data['url'] =$_POST['Url_Revista'];
		
		break;
	
	}

	$result= $this->Investigador_Model->editar($opcion, $data, $codigo);

	if($result){
		if($opcion=='Actividad'){
		$opcion='ExperienciasProfesionales';
		}else if($opcion=='Revista'){
			$opcion='Articulos';
			//modificar esto :v
		}
		redirect('Welcome/cargar/'.$codigo.'/'.$opcion); 
	}

}

}

?>