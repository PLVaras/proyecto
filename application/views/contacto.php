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
              <li><a href="<?php echo site_url("index.php/Proyecto/misCompras"); ?>">Mis Compras</a></li>
              
              <li><a href="#"></a></li>
             <?php
              	if(isset($nombre_usuario)){
			  ?>
			   <li><a href="#" style="color:yellow">Bienvenido usuario <?php echo $nombre_usuario." ".$apellido_usuario; ?></a></li>
			  <li><a href="<?php echo site_url("index.php/Proyecto/salirLogin"); ?>"><i class="fa fa-user"></i> Salir</a></li>
			  
			  <?php
				}else
				{
			   ?>
			   <li><a href="<?php echo site_url("index.php/Proyecto/login"); ?>"><i class="fa fa-user"></i> registro/login</a></li>
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
        <div class="alert alert-success fade in">
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
                              <h2>Panel de Contacto</h2>
                          </header>
                          <div class="panel-body">
                          
                          
                              <?= form_open("index.php/Proyecto/contacto") ?>
                              <legend>Informaci&oacute;n</legend>
                                  <div class="form-group">
                                      <label for="nombre">Nombre y Apellido</label>
                                      <input type="text" class="form-control" id="nombre" name="persona" placeholder="Ingrese el Nombre completo" required="true">
                                  </div>
                                  <div class="form-group">
                                      <label for="nombre">Correo</label>
                                      <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo electronico" required="true">
                                  </div>
                                  <div class="form-group">
                                      <label for="telefono">Pregunta:</label>
                                      <textarea name="pregunta" cols="50" rows="10"></textarea>
                                  </div>
                                  <hr>
                                  
                                  <button type="submit" name="btnRegistro" class="btn btn-info">Realizar Pregunta</button>
                              </form>

                          </div>
                      </section>
                  </div>
            
              </div>
 
      
        <!-- Example row of columns -->
        <div class="row">
      
             </div>
          
        </div> 
        
    
      <div class="footer-wrapper">
        
      <div class="copy-rights">
      <div class="container">
        <div class="row">
          
            <div class="col-md-6">
              Trabajo Final de Programacion III - Pedro Luis Varas <a href="#">pedroluisvaras@gmail.com</a>
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
