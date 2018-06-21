<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INICIO | PACHACAMAC</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/bootstrap-theme.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/estilos.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/stylethemes.css')}}">
<link rel="stylesheet" href="{{asset('public/front/css/hover.css')}}">
<link rel="stylesheet" href="{{asset('public/front/shadowbox/shadowbox.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Owl Carousel Assets -->
<link href="{{asset('public/front/css/owl.theme.css')}}" rel="stylesheet">
<link href="{{asset('public/front/css/owl.carousel.css')}}" rel="stylesheet">


</head>
<body>
    <?php  //include "php/menu.php"?>
    <header>
    <div class="container-fluid">
       <div class="row">
           <div class="col-xs-12">
               <a href="index.php"><img src="{{asset('public/front/img/logo.png')}}" alt="Pachacamac-movil" class="logo-movil img-responsive"></a> 
           </div>
       </div>
        <nav class="navbar navbar-default tamano">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav lista-menu">
                <li><a href="quehacer.php">QUE HACER</a></li>
                <li><a href="gastronomia.php">GASTRONOMIA</a></li>
                <li><a href="turismo.php">TURISMO</a></li>
                <li><a href="index.php" class="hidden-xs"><img src="{{asset('public/front/img/logo.png')}}" alt="Pachacamac" class="logo"></a></li>
                <li><a href="deporte.php">DEPORTE</a></li>
                <li><a href="cultura.php">CULTURA Y TRADICIÓN</a></li>
                <li><a href="blog.php">BLOG</a></li>
              </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        
        <div class="redessociales hidden-xs">
            <ul class="lista-redessociales">
                <li ><a href="https://www.facebook.com/" target="_blank" class="facebook hvr-buzz"></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="twitter hvr-buzz"></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="youtube hvr-buzz"></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="instagram hvr-buzz"></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="pinterest hvr-buzz"></a></li>
            </ul>
        </div>
        
    </div>
</header>
    <section class="slider">
        <div class="container">
            <div class="caja-flecha-izquierda hidden-xs">         
               <div class="flecha-izquierda">
                   <span>Que Hacer</span> 
                   <img src="{{asset('public/front/img/flecha.png')}}" alt="" >
               </div>
                 <img src="{{asset('public/front/img/palito-flecha.png')}}" class="palo-flecha img-responsive " alt="">
            </div>
            <a href="comollegar.php">
                <div class="caja-flecha-derecha">
                <div class="flecha-dere">
                    <span class="texto-flecha-derecha">Como Llegar</span>
                    <img src="{{asset('public/front/img/flecha.png')}}" alt="" class="flecha-derecha img-responsive">
                </div>
                <img src="{{asset('public/front/img/palito-flecha.png')}}" class="palo-dere" alt="">
            </div>
            </a>
        </div>    
        <div id="pasto"></div>
    </section>
    <div class="madera-bottom"></div>
    <!--=================== STAR EVENTO ============================-->
    <section class="eventos">
       <div class="container">
              <div class="row">
               <div class="col-md-12">
                     <img src="{{asset('public/front/img/soga-blog.png')}}" alt=""  class="soga-blog hidden-xs hidden-sm">                    
                      <div class="resumen-quehacer">
                          <div class="madera-top"></div>
                           <div class="descripcion">  
                               <div class="row">
                                  <div class="col-md-12">
                                      <h2 class="titulo-evento">Eventos</h2>
                                  </div>
                                   <div id="owl-demo">
                                      <a href="detalle-evento.php">
                                          <div class="item">                
                                          <img src="{{asset('public/front/img/evento1.jpg')}}" class="img-responsive" alt="Owl Image">
                                          <div class="item-evento">
                                              <span>30/10</span>
                                              <span>Motocross</span>
                                          </div>
                                      </div>
                                      </a>
                                      <a href="detalle-evento.php">
                                          <div class="item">
                                          <img src="{{asset('public/front/img/evento1.jpg')}}" class="img-responsive" alt="Owl Image">
                                           <div class="item-evento">
                                              <span>30/10</span>
                                              <span>Motocross</span>
                                          </div>
                                      </div>
                                      </a>
                                      <a href="detalle-evento.php">
                                          <div class="item">
                                          <img src="{{asset('public/front/img/evento1.jpg')}}" class="img-responsive" alt="Owl Image">
                                           <div class="item-evento">
                                              <span>30/10</span>
                                              <span>Motocross</span>
                                          </div>
                                      </div>
                                      </a>
                                      <a href="detalle-evento.php">
                                          <div class="item">
                                              <img src="{{asset('public/front/img/evento1.jpg')}}" class="img-responsive" alt="Owl Image">
                                               <div class="item-evento">
                                                  <span>30/10</span>
                                                  <span>Motocross</span>
                                              </div>
                                      </div>
                                      </a>
                                   </div>
                                   <div class="col-md-12 text-center">
                                       <a href="eventos.php" class="btn boton-evento hvr-wobble-top">Ver más</a>
                                          
                                   </div>
                               </div>
                               
                          </div>
                          
                          <div class="madera-top"></div>
                          <img src="{{asset('public/front/img/soga-blog.png')}}" alt="" class="soga-blog hidden-xs hidden-sm">
                          
                   </div>
                    
              </div>               
           </div>           
       </div>     
    </section>
    <!--=================== END EVENTO ============================-->
    <!--=================== STAR TURISMO ===========================-->
    <section class="turismo">      
       <div class="madera-top"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="titulo-turismo">Turismo</h2>
                </div>
                <div class="col-md-6 col-xs-12">
                   <a href="" class="btn boton-turismo hvr-wobble-top">Atractivos</a> 
                </div>
                <div class="col-md-6 col-xs-12">
                    <a href="" class="btn boton-turismo hvr-wobble-top">Aventura</a>
                </div>
                
            </div>
        </div>
        
    </section>
    <div class="madera-top"></div>
    <!--=================== END TURISMO ============================-->
    
    <!--===================STAR ULTIMAS NOTICIAS ===================-->
    <section class="ultimas-noticias">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('public/front/img/soga-blog.png')}}" alt="" class="soga-blog hidden-xs hidden-sm">
                    <h1 class="titulos">Ultimas Noticias</h1>
                </div>
                <div class="col-md-4 col-sm-4">                   
                    <div class="thumbnail">
                      <img src="{{asset('public/front/img/blog.jpg')}}" alt="...">
                      <div class="caption">
                        <h3>Arqueologico</h3>
                          <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año</p>
                          <a href="detalle-blog.php"><span class="texto-blog">Ver más</span></a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">                
                    <div class="thumbnail">
                      <img src="{{asset('public/front/img/blog.jpg')}}" alt="...">
                      <div class="caption">
                        <h3>Arqueologico</h3>
                        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año</p>
                        <a href="detalle-blog.php"><span class="texto-blog">Ver más</span></a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                
                    <div class="thumbnail">
                      <img src="{{asset('public/front/img/blog.jpg')}}" alt="...">
                      <div class="caption">
                        <h3>Arqueologico</h3>
                        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año</p>
                        <a href="detalle-blog.php"><span class="texto-blog">Ver más</span></a>
                      </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                                       <a href="blog.php" class="btn boton-evento hvr-wobble-top">Ver más</a>
                                          
                                   </div>
            </div>
        </div>
    </section>
    <!--=================== END ULTIMAS NOTICIAS ===================-->
    
    <?php  //include "php/footer.php"?>
    <section class="suscribirse"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="titulo-suscribirse">Suscribete a Pachacamac!!!</h2>
            </div>
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <form class="form-inline" role="form">
                  <div class="form-group">
                    <label class="sr-only" for="ejemplo_email_2">Correo:</label>
                    <input type="email" class="form-control txtsus" id="ejemplo_email_2"
                           placeholder="Correo Electronico:">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="ejemplo_password_2">Mensaje:</label>
                    <textarea type="text" class="form-control txtsus" id="ejemplo_password_2" 
                              placeholder="Mensaje..."></textarea>
                  </div>
                  <button type="submit" class="btn boton-suscribirse hvr-wobble-to-top-right">Suscribete <i class="fa fa-paper-plane-o"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
           <div class="col-md-6 hidden-xs">
               <span id="derechos">© 2016 Pachacamac Todos los Derechos Reservados</span>
           </div>
            <div class="col-md-6 col-xs-12 text-right">
                   
               <div>
                    <ul class="social-footer">
                        <li  class="hidden-xs"><span>Siguenos en:</span></li>
                        <li ><a href="https://www.facebook.com/pachacamacestademoda/?fref=ts" target="_blank" class="facebook hvr-buzz"></a></li>
                        <li><a href="https://twitter.com/" target="_blank" class="twitter hvr-buzz"></a></li>
                        <li><a href="https://www.youtube.com/" target="_blank" class="youtube hvr-buzz"></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" class="instagram hvr-buzz"></a></li>
                        <li><a href="https://www.pinterest.com/" target="_blank" class="pinterest hvr-buzz"></a></li>
                    </ul>
               </div>
            </div>
            
        </div>
    </div>
</footer>

    <?php  //include "php/script.php"?>
    <script src="{{asset('public/front/js/jquery.min.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/front/js/owl.carousel.js')}}"></script>
<script src="{{asset('public/front/js/jquery.bootpag.min.js')}}"></script>
<script src="{{asset('public/front/js/code.js')}}"></script>
<script src="{{asset('public/front/shadowbox/shadowbox.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY7Y3OlgCus_BTPAGnAuCUGrBs72saGDk"></script>
<script src="{{asset('public/front/js/gmaps.js')}}"></script>
<script type="text/javascript">
        Shadowbox.init();
</script>

</body>
</html>