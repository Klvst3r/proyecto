
    <?php  //include "php/menu.php"?>
    
    @extends("web.partials.plantilla")

    @section("contenido")
   
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
    
@endsection

    <?php  //include "php/footer.php"?>
    

    <?php  //include "php/script.php"?>


