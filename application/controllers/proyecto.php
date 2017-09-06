<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyecto extends CI_Controller {
	
	//funcion para que sea de index, en reemplazo de index.php
	public function index()
	{
		//aqui vamos a leer y traer desde la BD la info de las Peliculas
		$datos=array(
			'TodasLasPeliculas'=>$this->proyecto_modelo->traeTodasLasPeliculas(),
		);
		$this->load->view('index',$datos);
	}
	
	public function BuscarPelicula(){
		
	}
	
}
