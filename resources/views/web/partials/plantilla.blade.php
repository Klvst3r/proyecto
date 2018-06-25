<!DOCTYPE html>
<html lang="en">
<head>
   
	@include('web.partials.head')

</head>
<body>

@include('web.partials.menu')

@if(Request::is('/'))
	@include('web.partials.slider')
@endif

@yield("jumbo")


@yield("contenido")

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

@include('web.partials.scripts')

</body>
</html>