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
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Solutions</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
      <div class="mini-menu">
            <label>
          <select class="selectnav">
            <option value="#" selected="">Home</option>
            <option value="#">About</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">Services</option>
            <option value="#">Work</option>
            <option value="#">Contact</option>
          </select>
          </label>
          </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="banner">
      <div id="carousel-example-generic" class="carousel slide">
  
  <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/banner-image.jpg" alt="">
            <div class="carousel-caption">
              <h1>Morbi semuis</h1>
              <h2>Praesent dapibus, neque id cursus faucibus tortas augue eu vulputate</h2>
              <a href="#" class="btn">facilis</a>
            </div>
          </div>
          <div class="item">
            <img src="img/banner-image.jpg" alt="">
            <div class="carousel-caption">
              <h1>Morbi semuis</h1>
              <h2>Praesent dapibus, neque id cursus faucibus tortas augue eu vulputate</h2>
              <a href="#" class="btn">facilis</a>
            </div>
          </div>
          <div class="item">
            <img src="img/banner-image.jpg" alt="">
            <div class="carousel-caption">
              <h1>Morbi semuis</h1>
              <h2>Praesent dapibus, neque id cursus faucibus tortas augue eu vulputate</h2>
              <a href="#" class="btn">facilis</a>
            </div>
          </div>
        </div>

  <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <i class="fw-icon-chevron-left"></i>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <i class="fw-icon-chevron-right"></i>
      </a>
    </div>
    </div>
    <div class="container">
      <div class="featured-block">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img1.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Lorem ipsum</h1>
                <p>Cuibstui ipsum dolor sit amet, consectetuer adipiscing eli onec odio cuisque volutpat mattis</p>
                <a class="btn btn-primary" href="#">more</a>
                
                <button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
                
              </div>
              </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                    <img src="img/img2.jpg" alt="" class="img-responsive">
                    <div class="caption">
                      <h1>Fusce lacinia arcu</h1>
                      <p>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element</p>
                      <a class="btn" href="#">more</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                  <img src="img/img3.jpg" alt="" class="img-responsive">
                  <div class="caption">
                    <h1>Morbiin semquis</h1>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean</p>
                    <a class="btn" href="#">more</a>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img4.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Aliquam lectus</h1>
                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, mod in, pharetra ultrici</p>
                <a class="btn" href="#">more</a>
              </div>
              </div>
            </div>
            </div>
            
          </div>
          
        </div> 
        <div class="ruler"></div>  
        </div>
        <div class="container">
          <div class="featured-item">
            <div class="col-md-6">
            <div class="block">
              <div class="block-title">
                <h1>Cras ornare tristi</h1>
                <h2>Vivamus vestibulum nulla nec ante  pellentesque</h2>
              </div>
              <ul>
                <li class="col-md-6"> 
                  <div class="user-info">
                    <i class="fw-icon-user icon"></i>
                    <h1>Tim nulla nec </h1>    
                    <p>Cuibstui ipsum dolor sit amet, consectetu</p>
                 </div>
               </li>
                <li class="col-md-6">
                  <div class="user-info">
                    <i class="fw-icon-pencil icon"></i>
                    <h1>Vivamus mol</h1>    
                    <p>Phasellus ultrices nulla quis nibh lorem</p>
                 </div>
                </li>
                <li class="col-md-6">
                  <div class="user-info">
                    <i class="fw-icon-tag icon"></i>
                    <h1>Phas ellus</h1>    
                    <p>Aliquam erat volutpat. Nam dui mi, tinci</p>
                 </div>
                </li>
                <li class="col-md-6">
                  <div class="user-info">
                    <i class="fw-icon-wrench icon"></i>
                    <h1>Fusce lobortis</h1>    
                    <p>Class aptent taciti sociosqu ad litora</p>
                 </div>
                </li>
                <li class="col-md-6">
                  <div class="user-info">
                    <i class="fw-icon-umbrella icon"></i>
                    <h1>Sed adipiscing</h1>    
                    <p class="last space">Praesent dapibus, neque id cursus</p>
                 </div>
                </li>
                <li class="col-md-6">
                  <div class="user-info">
                    <i class="fw-icon-coffee icon"></i>
                    <h1>Nam convallis</h1>    
                    <p class="last">Lorem ipsum dolor sit amet, consectetuer </p>
                 </div>
                </li>
              </ul>
            </div>
            </div>
            <div class="col-md-6">
              <div class="block">
                <div class="block-title">
                    <h1>Aliquam tincidunt</h1>
                    <h2>Integer vitae libero ac risus egestas placerat</h2>
                </div>
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading accordion-caret">
                        <h4 class="panel-title">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Donec quis dui at dolor tempor
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra 
                                      ultricies in, diam. Sed arcu. Cras consequat.</div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading accordion-caret">
                        <h4 class="panel-title">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Vivamus molestie gravida turpis
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra 
                                      ultricies in, diam. Sed arcu. Cras consequat.</div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading accordion-caret">
                        <h4 class="panel-title">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Fusce lobortis lorem at ipsum semper 
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra 
                                      ultricies in, diam. Sed arcu. Cras consequat.</div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading accordion-caret">
                        <h4 class="panel-title">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Nam convallis pellentesque nisl
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra 
                                      ultricies in, diam. Sed arcu. Cras consequat.</div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ruler"></div>
        </div>
      <div class="container">
        <div class="featured-content">
          <div class="col-md-6">
            <div class="block">
              <img src="img/img5.jpg" alt="" class="img-spacing thumbnail">
              <h1>Quisque a lectus. Donec consectetuer ligua </h1>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. lentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin  laoreet viverra.
              </p>
              <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis.
              </p>
              <a href="#" class="btn">more</a>
            </div>            
          </div>
          <div class="col-md-6">
            <div class="block">
              <img src="img/img6.jpg" alt="" class="img-spacing thumbnail">
              <h1>Sed adipiscing ornare risus Morbi est est</h1>
              <p>Cupsim  ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. lentesque aliquet nibh nec urna.In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula     sollicitudi.</p>
              <p>Vivamus ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis.</p>
              <a href="#" class="btn">more</a>
            </div>            
          </div>
        </div>
      </div> 
      <div class="footer-wrapper">
        <div class="site-content">
      <div class="container">
        <div class="row">
        
          <div class="block col-md-2 col-sm-6">
            <h1>Vitae lin</h1>
            <ul>
              <li><a href="#">Phasellus ultrices</a></li>
              <li><a href="#">Sed adipiscing lipsum</a></li>
              <li><a href="#">Nulla sed leoniton</a></li>
            </ul>
          </div>
          <div class="block col-md-2 col-sm-6">
            <h1>Luctrus</h1>
            <ul>
              <li><a href="#">Lorem ipsum</a></li>
              <li><a href="#">Donec nec justo</a></li>
              <li><a href="#">Morbi in se</a></li>
            </ul>
          </div>
          <div class="block col-md-2 col-sm-6">
            <h1>consetu</h1>
            <ul>
              <li><a href="#">Quisque a lectus</a></li>
              <li><a href="#">Donec consecte</a></li>
              <li><a href="#">Nulla sed leoniton</a></li>
            </ul>
          </div>
          <div class="block col-md-3">
            <h1>Praesent dapibus, neque id cursus faucibus</h1>
            <div class="input-group">
                <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                <span class="input-group-btn">
              <input type="submit" class="button btn btn-default" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                </span>
            </div> 
          </div>
          <div class="block col-md-3">
            <h1> Aliquam quam lectusfacilisis auctor</h1>
            <ul class="social">
              <li><a href="#"><i class="fw-icon-twitter"></i></a></li>
              <li><a href="#"><i class="fw-icon-facebook"></i></a></li>
              <li><a href="#"><i class="fw-icon-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        </div>
        
      </div>
      <div class="copy-rights">
      <div class="container">
        <div class="row">
          
            <div class="col-md-6">
              Copyright(c) website name. Designed by: <a href="http://www.alltemplateneeds.com"> www.alltemplateneeds.com</a>
            </div>
            <div class="col-md-6">
              Images from: <a href="http://www.wallpaperswide.com">http://wallpaperswide.com</a> / <a href="http://www.wallcoo.net"> www.wallcoo.net</a>
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
