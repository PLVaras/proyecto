<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Proyecto Video Club</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/bootstrap-reset.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/bootstrap.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("css/normalize.css"); ?>" >
    <link rel="stylesheet" href="<?php echo base_url("css/component.css"); ?>" >
    <link rel="stylesheet" href="<?php echo base_url("css/custom-styles.css"); ?>" >
    <link rel="stylesheet" href="<?php echo base_url("assets/font-awesome/css/font-awesome.css"); ?>" >
    <link rel="stylesheet" href="<?php echo base_url("assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"); ?>" >
    <link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" >
    <link rel="stylesheet" href="<?php echo base_url("css/style-responsive.css"); ?>" >
    <link rel="stylesheet" href="<?php echo base_url("css/owl.carousel.css"); ?>" >
	
   
   
     
	 <link rel="stylesheet" href="<?php echo base_url("css/demo.css"); ?>" >
    <link rel="stylesheet" href="<?php echo base_url("css/font-awesome-ie7.css"); ?>" >

      <script src="<?php echo base_url("js/jquery.mobilemenu.js"); ?>" ></script>
      <script src="<?php echo base_url("js/html5shiv.js"); ?>" ></script>
      <script src="<?php echo base_url("js/respond.min.js"); ?>" ></script>
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
 
  </head>

  <body>
    <div class="header-wrapper">
      <div class="site-name">
        <h1>MoviesAR</h1>
        <h2>El Mejor Cine</h2>
      </div>
    </div>
    <div class="menu">
      <div class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fw-icon-th-list"></i>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              
              <li><a href="<?php echo site_url("index.php/Proyecto/index"); ?>">Inicio</a></li>
             
              
              <li><a href="#"></a></li>
             <?php
              	if(isset($nombre_usuario)){
			  ?>
			   <li><a href="#" style="color:yellow">Bienvenido usuario <?php echo $nombre_usuario." ".$apellido_usuario; ?></a></li>
			  <li><a href="<?php echo site_url("index.php/Proyecto/salirLogin"); ?>"><i class="fa fa-user"></i> Salir</a></li>
			  
			  <?php
				}
			   ?>
			  
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
      
    </div>


    
    <div class="container">
      <div class="featured-block">
       <div class="row">
      	<?php 
        	if($mensaje){
        ?>
        <div class="alert alert-warning fade in">
             <button data-dismiss="alert" class="close close-sm" type="button">
                   <i class="fa fa-times"></i>
             </button>
             <h4>
             	<i class="fa fa-ok-sign"></i>
                                      <?php echo $mensaje;?>
             </h4>
             
        </div>
		<?php
				}
        ?>
        
       			
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              <h2>Panel del Administrador</h2>
                          </header>
                          <div class="panel-body">
                          
                          <form action="<?php echo site_url("index.php/Proyecto/admin") ?>" method="post" enctype="multipart/form-data">
                              
                              <legend>Datos de la Pelicula</legend>
                                  <div class="form-group">
                                      <label for="nombre">Nombre de la Pelicula</label>
                                      <input type="text" class="form-control" id="nombre_pel" name="nombre_pel" placeholder="Ingrese el Nombre de la Pelicula" required="true">
                                  </div>
                                  <div class="form-group">
                                      <label for="apellido">Precio</label>
                                      <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese el Precio" required="true">
                                  </div>
                                  <div class="form-group">
                                      <label for="direccion">Stock</label>
                                      <input type="text" class="form-control" id="stock" name="stock" placeholder="Ingrese el Stock" required="true">
                                  </div>
                                  <div class="form-group">
                                      <label for="telefono">Descripci&oacute;n</label>
                                      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una descripcion" required="true">
                                  </div>
                                  <div class="form-group">
                                      <label for="telefono">Genero</label>
                                      <select name="idgenero" class="form-control">
                                      <?php
                                      	foreach($Generos->result() as $unGenero){
											echo'
												<option value="'.$unGenero->idgenero.'">'.$unGenero->nombre_genero.'</option>	
											';
										}
                                      
                                      ?> 	
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="telefono">Categoria</label>
                                      <select name="idcategoria" class="form-control">
                                      <?php
                                      	foreach($Categorias->result() as $unaCategoria){
											echo'
												<option value="'.$unaCategoria->idcategoria.'">'.$unaCategoria->nombre_categoria.'</option>	
											';
										}
                                      
                                      ?> 
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="telefono">Imagen para la Pelicula:</label>
                                      <input type="file" class="form-control" id="imagen" name="imagen">
                                  </div>
                                  <button type="submit" name="btnRegistroPelicula" class="btn btn-info">Registrar Pelicula</button>
                              </form>

                          </div>
                      </section>
                  </div>
             
              </div>
 
      
        <!-- Example row of columns -->
        <div class="row">
      <!--desde aqui los cambios de contenidos-->

                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Compras de los usuarios para verificar
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Cliente</th>
                                  <th><i class="fa fa-bullhorn"></i> Pelicula</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descripcion</th>
                                  <th><i class="fa fa-bookmark"></i> Precio</th>
                                  <th><i class=" fa fa-edit"></i> Cover</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              
                             <?php
                             	if($TodasLasCompras->result()){
									foreach($TodasLasCompras->result() as $unaCompra){
										echo'
											<tr>
			                                  <td>'.$unaCompra->nombre_pel.'</td>
			                                  <td class="hidden-phone">'.$unaCompra->descripcion.'</td>
			                                  <td>$ '.$unaCompra->precio.'</td>
			                                  <td>
			                                  	<img src="'.base_url("img/cover/".$unaCompra->imagen).'" alt="" class="img-responsive" width="30%">
			                                  </td>
			                                 ';
			                               
			                                 if($unaCompra->estado=="Esperando Reserva"){
											 	echo '<td><span class="label label-info label-mini">'.$unaCompra->estado.'</span></td>';
											 	echo'<td>
			                                      <button class="btn btn-danger btn-xs">
			                                      <a href="'.site_url("index.php/Proyecto/BorrarAlquiler/".$unaCompra->idalquiler).'"><i class="fa fa-trash-o "></i></a>
			                                      
			                                      </button>
			                                      <button class="btn btn-success btn-xs">
			                                      <a href="'.site_url("index.php/Proyecto/ActivaAlquiler/".$unaCompra->idalquiler).'"><i class="fa fa-check"></i></a>
			                                      
			                                      </button>
			                                  </td>';
											 }elseif($unaCompra->estado=="No Stock"){
											 	echo '<td><span class="label label-danger label-mini">'.$unaCompra->estado.'</span></td>';
											 	echo'<td>
			                                      <button class="btn btn-danger btn-xs">
			                                      <a href="'.site_url("index.php/Proyecto/BorrarAlquiler/".$unaCompra->idalquiler).'"><i class="fa fa-trash-o "></i></a>
			                                      
			                                      </button>
			                                      <button class="btn btn-success btn-xs">
			                                      <a href="'.site_url("index.php/Proyecto/ActivaAlquiler/".$unaCompra->idalquiler).'"><i class="fa fa-check"></i></a>
			                                      
			                                      </button>
			                                  </td>';
											 }elseif($unaCompra->estado=="Reserva OK"){
											 	echo '<td><span class="label label-success label-mini">'.$unaCompra->estado.'</span></td>';
											 }else{
											 	echo'<td>
			                                      <button class="btn btn-danger btn-xs">
			                                      <a href="'.site_url("index.php/Proyecto/BorrarAlquiler/".$unaCompra->idalquiler).'"><i class="fa fa-trash-o "></i></a>
			                                      </button>
			                                      
			                                  </td>';
			                                  
											 }
			                                  echo"</tr>";
			                                  
			                                  
			                                
			                              
										
									}
								}else{
									echo '
									<div class="alert alert-info fade in">
	                                  <button data-dismiss="alert" class="close close-sm" type="button">
	                                      <i class="fa fa-times"></i>
	                                  </button>
	                                  <strong>Atenci&oacute;n</strong> Todavia no tiene peliculas alquiladas.
	                              </div>
									';
								}
                             ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>        




<!--hasta aqui-->
             </div>
          
        </div> 
        
    
      <div class="footer-wrapper">
        
      <div class="copy-rights">
      <div class="container">
        <div class="row">
          
            <div class="col-md-6">
              Trabajo Final de.... <a href="#">tu correo</a>
            </div>
            <div class="col-md-6">
              <i class="fa fa-video-camera"></i>
            </div>
            
          </div>
        </div>
      </div>
      </div>

      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url("js/jquery-1.9.1.js"); ?>" ></script>
    <script src="<?php echo base_url("js/bootstrap.js"); ?>" ></script>
    <script src="<?php echo base_url("js/modernizr-2.6.2-respond-1.1.0.min.js"); ?>" ></script>
    
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url("js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("js/jquery-1.8.3.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/bootstrap.min.js"); ?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url("js/jquery.dcjqaccordion.2.7.js"); ?>"></script>
    <script src="<?php echo base_url("js/jquery.scrollTo.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/jquery.nicescroll.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url("js/jquery.sparkline.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"); ?>"></script>
    <script src="<?php echo base_url("js/owl.carousel.js"); ?>" ></script>
    <script src="<?php echo base_url("js/jquery.customSelect.min.js"); ?>" ></script>
    <script src="<?php echo base_url("js/respond.min.js"); ?>" ></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url("js/common-scripts.js"); ?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url("js/sparkline-chart.js"); ?>"></script>
    <script src="<?php echo base_url("js/easy-pie-chart.js"); ?>"></script>
    <script src="<?php echo base_url("js/count.js"); ?>"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
    
  </body>
</html>
