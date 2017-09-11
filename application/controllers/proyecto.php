<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyecto extends CI_Controller {
	
	//funcion para que sea de index, en reemplazo de index.php
	public function index($mensaje="")
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
				'mensaje'=>$mensaje,
				);
			 }else{
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'TodasLasPeliculas'=>$this->proyecto_modelo->traeAlgunasPeliculas($valorBuscado),
				'mensaje'=>"",
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
				'mensaje'=>$mensaje,
				);
				if($this->session->userdata['idusuario']==1){
				$datos['admin']=1;
				}
			 }else{
				//aqui vamos a leer y traer desde la BD la info de las Peliculas
				$datos=array(
					'TodasLasPeliculas'=>$this->proyecto_modelo->traeTodasLasPeliculas(),
					'mensaje'=>"",
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
				
				//pregunto el privilegio
				$Privilegio=$misDatos->row()->idprivilegio;
				if($Privilegio==1){
					redirect("index.php/Proyecto/admin");
				}else{
					redirect("index.php/Proyecto/index");
				}
				//luego lo redirijo al inicio
				
			}else{
				$datos=array(
				'mensaje'=>"Error, no se encuentra el Usuario o Datos mal Ingresados",
			);
			$this->load->view('login',$datos);
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
			if(isset($this->session->userdata['idusuario'])){
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'TodasMisCompras'=>$this->proyecto_modelo->traeMisCompras($this->session->userdata['idusuario']),
				'nombre_usuario'=>$this->session->userdata['nombre_usuario'],
				'apellido_usuario'=>$this->session->userdata['apellido_usuario'],
				
				);
			 }else{
				//aqui vamos a leer y traer desde la BD la info de las Peliculas
				$datos=array(
					'TodasMisCompras'=>$this->proyecto_modelo->traeMisCompras(000),
				);
			}
			$this->load->view('miscompras',$datos);
		}
	}
	
	public function contacto()
	{
		if($_POST){
			$datosContacto=array(
			'persona'=>$this->input->post('persona'),
			'pregunta'=>$this->input->post('pregunta'),
			'correo'=>$this->input->post('correo'),
			);
			
			//insertamos la persona
			$this->proyecto_modelo->registrarPreguntaContacto($datosContacto);
			if(isset($this->session->userdata['idusuario'])){
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'nombre_usuario'=>$this->session->userdata['nombre_usuario'],
				'apellido_usuario'=>$this->session->userdata['apellido_usuario'],
				'mensaje'=>"Se realizo la pregunta correctamente, Pronto se comunicaremos con usted. Gracias",
				);
			 }else{
				//aqui vamos a leer y traer desde la BD la info de las Peliculas
				$datos=array(
					'mensaje'=>"Se realizo la pregunta correctamente, Pronto se comunicaremos con usted. Gracias",
				);
			}
			$this->load->view('contacto',$datos);
		}else{
			if(isset($this->session->userdata['idusuario'])){
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'nombre_usuario'=>$this->session->userdata['nombre_usuario'],
				'apellido_usuario'=>$this->session->userdata['apellido_usuario'],
				'mensaje'=>"",
				);
			 }else{
				//aqui vamos a leer y traer desde la BD la info de las Peliculas
				$datos=array(
					'mensaje'=>"",
				);
			}
			$this->load->view('contacto',$datos);
		}
	}
	public function Alquiler($idPelicula)
	{
			$buscaDatos=$this->proyecto_modelo->traeInfoPelicula($idPelicula);
			
			$datos=array(
				'idusuario'=>$this->session->userdata['idusuario'],
				'idpelicula'=>$idPelicula,
				'monto'=>$buscaDatos->row()->precio,
				'cantidad_pel'=>1,
				'fecha'=>date("Y-m-d"),
				'hora'=>date("H:i:s"),
				'estado'=>"Esperando Reserva",
				);
			$this->proyecto_modelo->insertarAlquiler($datos);
		
		redirect("index.php/Proyecto/index/Compra_Exitosa");
		
		
	}
	public function BorrarAlquiler($idAlquiler)
	{
		$this->proyecto_modelo->borraPeliculaAquilada($idAlquiler);
		redirect("index.php/Proyecto/misCompras");
		
		
	}
	public function admin()
	{
		if($_POST){
			$datos=array(
				'nombre_pel'=>$this->input->post('nombre_pel'),
				'precio'=>$this->input->post('precio'),
				'stock'=>$this->input->post('stock'),
				'descripcion'=>$this->input->post('descripcion'),
				'idgenero'=>$this->input->post('idgenero'),
				'idcategoria'=>$this->input->post('idcategoria'),
				'imagen'=>$_FILES['imagen']['name'],
				);
			//copio la imagen al server
			copy($_FILES['imagen']['tmp_name'],"img/cover/".$_FILES['imagen']['name']);
			//inserto
			$this->proyecto_modelo->insertarPelicula($datos);
			if(isset($this->session->userdata['idusuario'])){
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'Categorias'=>$this->proyecto_modelo->traeCategorias(),
				'Generos'=>$this->proyecto_modelo->traeGeneros(),
				'nombre_usuario'=>$this->session->userdata['nombre_usuario'],
				'apellido_usuario'=>$this->session->userdata['apellido_usuario'],
				'mensaje'=>"Se agrego una nueva Pelicula",
				);
			 }else{
				//aqui vamos a leer y traer desde la BD la info de las Peliculas
				$datos=array(
					'Categorias'=>$this->proyecto_modelo->traeCategorias(),
					'Generos'=>$this->proyecto_modelo->traeGeneros(),
					'mensaje'=>"Se agrego una nueva Pelicula",
				);
			}
			$this->load->view('admin',$datos);
		
		}else{
			if(isset($this->session->userdata['idusuario'])){
			 	//preparo un array para obtener el resultado  del filtro de busqueda
				$datos=array(
				'Categorias'=>$this->proyecto_modelo->traeCategorias(),
				'Generos'=>$this->proyecto_modelo->traeGeneros(),
				'nombre_usuario'=>$this->session->userdata['nombre_usuario'],
				'apellido_usuario'=>$this->session->userdata['apellido_usuario'],
				'mensaje'=>"",
				'TodasLasCompras'=>$this->proyecto_modelo->traeLasCompras(),
				);
			 }else{
				//aqui vamos a leer y traer desde la BD la info de las Peliculas
				$datos=array(
					'Categorias'=>$this->proyecto_modelo->traeCategorias(),
					'Generos'=>$this->proyecto_modelo->traeGeneros(),
					'mensaje'=>"",
					'TodasLasCompras'=>$this->proyecto_modelo->traeLasCompras(),
				);
			}
			$this->load->view('admin',$datos);
		}
	}
	public function ActivaAlquiler($idAlquiler)
	{
		$this->proyecto_modelo->activaAlquiler($idAlquiler);
		redirect("index.php/Proyecto/admin");
		
		
	}
}
