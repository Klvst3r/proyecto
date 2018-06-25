@extends("web.partials.plantilla")

@section('contenido')

	 <div class="container">       
        <div class="row">
            <div class="col-md-9">
                 <div class="resumen-quehacer">
                      <div class="madera-top"></div>
                       <div class="descripcion">  
                           <div class="row">
                               <div class="col-md-6">
                                    <a href="img/evento1.jpg" rel="shadowbox"><img src="img/evento1.jpg" class="img-responsive" alt=""></a>
                               </div>
                               <div class="col-md-6">
                                    <h2>Evento de motocross</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illum repellendus quaerat minima voluptas, libero sint recusandae facilis necessitatibus molestiae blanditiis magni omnis, officia ratione perferendis amet sed quis exercitationem expedita at assumenda quasi. Explicabo minus repellendus odit blanditiis error!</p>                                    
                               </div>
                               <div class="col-md-12">
                                   <table class="table table-responsive">
                                       
                                            <tr>
                                                <th>Con el Apoyo de:</th> 
                                                <td>Lorem ipsum dolor.</td>                                         
                                            </tr>
                                            <tr>
                                                <th>Auspiciadores:</th>
                                                <td>Lorem ipsum dolor.</td>
                                            </tr>
                                            <tr>
                                                <th>Organizadores:</th>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, dolorum.</td>
                                            </tr>
                                            <tr>
                                                <th>MediaPanner:</th>
                                                <td>Lorem ipsum dolor sit amet, consectetur.</td>
                                            </tr>
                                            <tr>
                                                <th>Dirección:</th>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                            </tr>
                                            <tr>
                                                <th>Fecha:</th>
                                                <td>12/04/2015</td>
                                            </tr>                           
                                    </table>
                               </div>
                           </div>
                     </div>
                     <div class="madera-top"></div>
                </div>
                
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 hidden-sm hidden-xs">
                        <div class="publicidad">
                            <img src="img/granpublicidad.jpg" class="img-responsive" alt="">                    
                        </div>                                                
                    </div>
                    <div class="hidden-md hidden-lg col-xs-12 col-sm-12">
                        <div class="publicidad-responsive">
                             <img src="img/minipublcidad.jpg" class="img-responsive" alt=""> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
	@endsection