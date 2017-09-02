<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyecto extends CI_Controller {
	
	//funcion para que sea de index, en reemplazo de index.php
	public function index()
	{
		$this->load->view('login');
	}
	
	
}
