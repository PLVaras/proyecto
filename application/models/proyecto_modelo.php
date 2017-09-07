<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyecto_modelo extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function buscaLogin($datosRecibidos)
	{
		return $this->db->get_where('login',$datosRecibidos);
		
	}
	public function traeTodasLasPeliculas()
	{
		return $this->db->query("SELECT * FROM `pelicula` LIMIT 0,1000");
	}
	public function traeAlgunasPeliculas($filtro)
	{
		return $this->db->query("SELECT * FROM `pelicula` where nombre_pel like '%$filtro%' or descripcion like '%$filtro%'");
	}
	public function registrarCliente($datosUsuario,$datosLogin){
		$this->db->insert('usuario',$datosUsuario);
		
		//busco el id del usuario para relacionarlo en el login
		$resultado = $this->db->query("select * from usuario where nombre = '".$datosUsuario['nombre']."' and apellido = '".$datosUsuario['apellido']."' and telefono = '".$datosUsuario['telefono']."'");
		$id = $resultado->row()->idusuario;	
	
		//ya tengo el id puedo insertar el login
		$datosLogin['idusuario']=$id;
		$datosLogin['estado']="Habilitado";
		
		$this->db->insert('login',$datosLogin);
	}
	public function buscaporID($id)
	{
		return $this->db->query("select * from usuario where idusuario=$id");
	}
	
}
