<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyecto extends CI_Controller {
	
	//funcion para que sea de index, en reemplazo de index.php
	public function index()
	{
		if($_POST){
			//preparo un array para buscar por filtro
			$valorBuscado=$this->input->post('valorBuscado');
			 
			//preparo un array para obtener el resultado  del filtro de busqueda
			$datos=array(
			'TodasLasPeliculas'=>$this->proyecto_modelo->traeAlgunasPeliculas($valorBuscado),
			);
			$this->load->view('index',$datos);
		}else{
			//aqui vamos a leer y traer desde la BD la info de las Peliculas
			$datos=array(
				'TodasLasPeliculas'=>$this->proyecto_modelo->traeTodasLasPeliculas(),
			);
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
	}
	
}
