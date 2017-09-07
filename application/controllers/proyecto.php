<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyecto extends CI_Controller {
	
	//funcion para que sea de index, en reemplazo de index.php
	public function index()
	{
		if($_POST){
			//preparo un array para buscar por filtro
			$valorBuscado=$this->input->post('valorBuscado');
			 
			 if(isset($this->session->userdata['idusuario'])){
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'TodasLasPeliculas'=>$this->proyecto_modelo->traeAlgunasPeliculas($valorBuscado),
				'nombre_usuario'=>$this->session->userdata['nombre_usuario'],
				'apellido_usuario'=>$this->session->userdata['apellido_usuario'],
				);
			 }else{
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'TodasLasPeliculas'=>$this->proyecto_modelo->traeAlgunasPeliculas($valorBuscado),
				);
			 }
			
			$this->load->view('index',$datos);
		}else{
			if(isset($this->session->userdata['idusuario'])){
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'TodasLasPeliculas'=>$this->proyecto_modelo->traeTodasLasPeliculas(),
				'nombre_usuario'=>$this->session->userdata['nombre_usuario'],
				'apellido_usuario'=>$this->session->userdata['apellido_usuario'],
				);
			 }else{
				//aqui vamos a leer y traer desde la BD la info de las Peliculas
				$datos=array(
					'TodasLasPeliculas'=>$this->proyecto_modelo->traeTodasLasPeliculas(),
				);
			}
			$this->load->view('index',$datos);
		}
		
	}
	
	public function login()
	{
		if($_POST){
			//capturo los datos del cliente
			$datosUsuario=array(
			'nombre'=>$this->input->post('nombre'),
			'apellido'=>$this->input->post('apellido'),
			'direccion'=>$this->input->post('direccion'),
			'telefono'=>$this->input->post('telefono'),
			'idprivilegio'=>2,							//le defino el 2 para el cliente, 1 para admin
			);
			$datosLogin=array(
			'nombre_usuario'=>$this->input->post('usuario'),
			'clave'=>$this->input->post('clave'),
			);
			
			//insertamos la persona
			$this->proyecto_modelo->registrarCliente($datosUsuario,$datosLogin);
			
			$datos=array(
				'mensaje'=>"Su Registro se realizo Exitosamente",
			);
			$this->load->view('login',$datos);
		}else{
			//aqui vamos a leer y traer desde la BD la info de las Peliculas
			$datos=array(
				'mensaje'=>"",
			);
			$this->load->view('login',$datos);
		}
		
		
	}
	public function buscaLogin()
	{
		if($_POST){
			$datosLogin=array(
			'nombre_usuario'=>$this->input->post('usuario'),
			'clave'=>$this->input->post('clave'),
			);
			$resultado = $this->proyecto_modelo->buscaLogin($datosLogin);
			//verifico si encontro algo
			if($resultado->result()){
				//si es asi creo una session para guardar datos en memoria
				$this->session->set_userdata('idusuario',$resultado->row()->idusuario);
				//busco a la persona y traigo su nombre y apellido
				$misDatos = $this->proyecto_modelo->buscaporID($resultado->row()->idusuario);
				//creo datos de session con nombre y apellido
				$this->session->set_userdata('nombre_usuario',$misDatos->row()->nombre);
				$this->session->set_userdata('apellido_usuario',$misDatos->row()->apellido);
				
				//luego lo redirijo al inicio
				redirect("index.php/Proyecto/index");
			}
		}
	}
	public function salirLogin()
	{
		$this->session->unset_userdata('idusuario');
		$this->session->unset_userdata('nombre_usuario');
		$this->session->unset_userdata('apellido_usuario');
		
		redirect("index.php/Proyecto/index");
		
		
	}
	public function misCompras()
	{
		if($_POST){
			
		
		}else{
			$datos=array(
				'mensaje'=>"",
			);
			$this->load->view('miscompras',$datos);
		}
	}
}
