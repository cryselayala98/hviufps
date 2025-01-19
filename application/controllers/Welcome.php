<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct() {

	parent::__construct();
	$this->load->helper('form');
	$this->load->model('Investigador_Model');
	$this->load->helper('url');
	//$this->load->library('session');
	}
	
	public function index()
	{
		$data['aviso']= "ok";
		$this->load->view('Principal_view.php', $data);
	}

	//ingresar

	public function iniciarSesion(){

	$data=array(

		'codigo' => $this->input->post('codigoIniciarSesion'),
        'contraseña' => $this->input->post('contraseñaIniciarSesion'),
		);

	$data['result']= $this->Investigador_Model->validarInicio($data);

	if($data['result']!=false){

		$codigo=$data['codigo'];


		redirect('Welcome/cargar/'.$codigo.'/DatosBasicos'); 


		}else{
			$data['aviso']= "investigador no existente";
			$this->load->view('Principal_view.php', $data);
		}

	}

	public function registrarInvestigador(){

		$data=array(

		'codigo' => $this->input->post('codigo_Registrar'),
        'nombre' => $this->input->post('nombre_Registrar'),
        'apellido' => $this->input->post('apellido_Registrar'),
        'correo' => $this->input->post('email_Registrar'),
        'contraseña' => $this->input->post('contraseña_Registrar'),
		);
		$cod=$data['codigo'];
		$data['result']= $this->Investigador_Model->registrarInvestigador($data);

		if($data['result']!=false){


			$codigo=$data['codigo'];

		redirect('Welcome/cargar/'.$codigo.'/DatosBasicos'); 
	

		}else{
			$data['aviso']= "Error en el registro";
			$this->load->view('Principal_view.php', $data);
		}
	}

	
	
	public function buscarInvestigador(){

	}

	public function cargar(){
		$segmento= $this->uri-> segment(3);  //id
		$opcion= $this->uri-> segment(4);
		//cargar codigo y tipo de info
			$data['segmento']=array(

		'codigo' =>$segmento ,
        'value' => $opcion
		);
		$data['info']= $this->Investigador_Model->cargar($segmento, $opcion);
       

       if($opcion == 'Software' ||$opcion == 'TrabajosTecnicos'||$opcion =='ProcesosTecnicas' ||$opcion =='OtrasPublicacionesTecnicas' ||$opcion =='ProductosTecnologicos'  ||$opcion =='NormasyRegulaciones'){

		$data['autoresP']= array();
		  	if($data['info']!=false){
       	 foreach ($data['info']->result() as $infoP) {
       	 	$produccion=$infoP -> idProduccion;

       	 	array_push ( $data['autoresP'] , $this->Investigador_Model->cargarAutoresP($produccion) );
       	 }}

       }

      else if($opcion == 'Articulos' ||$opcion == 'PublicacionesNoCientificas'){
       		$data['autoresA']= array();
       	if($data['info']!=false){
       	 foreach ($data['info']->result() as $infoP) {
       	 	$articulo= $infoP -> idArticulo;

       	 	array_push ( $data['autoresA'] , $this->Investigador_Model->cargarAutoresA($articulo) );
       	 }}
       }

       else if($opcion == 'ExperienciasProfesionales'){
       	$data['actividades']=array();
       	  	if($data['info']!=false){
       	foreach ($data['info']->result() as $infoP) {
       		$exp= $infoP -> id_experiencia;
       		$actividades = $this->Investigador_Model->cargarInfoActividad($exp);
       		if($actividades!=false){
       		foreach ($actividades->result() as $infoA) {
       			array_push ( $data['actividades'] , $infoA);
       		}}
       	}}
       }
		$this->load->view('HeaderPerfil.php', $data);

		$this->load->view('Perfil_view.php', $data);
	}

	public function Registrar(){

		$segmento= $this->uri-> segment(3);  //id
		$opcion= $this->uri-> segment(4);
		//cargar codigo y tipo de info
			$data['segmento']=array(

		'codigo' =>$segmento ,
        'value' => $opcion
		);
if($opcion == 'Actividad'){
$data['act']= $this->uri-> segment(5);
}

		if($opcion == 'Articulos' ||$opcion == 'PublicacionesNoCientificas'){
			$data['revistas']=  $this->Investigador_Model->cargarRevistas();
			}

		$this->load->view('HeaderPerfil.php', $data);
		$this->load->view('Registrar_view.php', $data);

	}
    public function Editar(){

		$segmento= $this->uri-> segment(3);  //codInves
		$opcion= $this->uri-> segment(4);
		$opcionId= $this->uri-> segment(5); //id proceso
		//cargar codigo y tipo de info
		$data['segmento']=array(

		'codigo' =>$segmento ,
        'value' => $opcion
		);
			$data['info']=array();

			if($opcion=='Idiomas'){
				
			$data['info']= $this->Investigador_Model->cargarInfo($opcion, array($opcionId, $segmento));
			}else if ($opcion=='DatosBasicos'){
			$data['info']= $this->Investigador_Model->cargarInfo($opcion, $segmento);
			}else {
			$data['info']= $this->Investigador_Model->cargarInfo($opcion, $opcionId);  
			}

	     if($opcion == 'Software' ||$opcion == 'TrabajosTecnicos'||$opcion =='ProcesosTecnicas' ||$opcion =='OtrasPublicacionesTecnicas' ||$opcion =='ProductosTecnologicos'  ||$opcion =='NormasyRegulaciones'){

	 	//traer info autores

			$data['codP']= $this->uri-> segment(5);
			$data['autoresPq']= $this->Investigador_Model->cargarAutoresP1($data['codP']);//cargar un array con el codigo y nombre de los autores
			$data['autoresAll']= $this->Investigador_Model->cargarAutores();
		}
		if($opcion == 'Articulos' ||$opcion == 'PublicacionesNoCientificas'){
			$data['revistas']=  $this->Investigador_Model->cargarRevistas();
			}

		$this->load->view('HeaderPerfil.php', $data);
		$this->load->view('Editar_view.php', $data);
pude editar
	}
}