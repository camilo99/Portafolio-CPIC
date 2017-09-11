@extends('layouts.app')
@section('title', 'Portafolio CPIC')
@include('layouts.navbar')
@section('content')
@include('auth.login')
	
<section class="site-contact">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h1>Mensaje</h1>
                

                <div class="alert alert-success">
                    Gracias Por Contactarte. Nosotros Te Responderemos Lo mas Pronto Posible.
                </div>

                <p>
                    Si tiene preguntas o consultas, rellene el siguiente formulario para ponerse en contácto con nosotros.
                    Gracias.
                </p>

                <form action="" id="contact-form">
                <div class="form-group">
                    <input id="contactfrm_name" type="text" name="nombre" class="form-control label-effect" required>
                    <label for="contactfrm_name" class="control-label"> Nombre </label>
                    <span class="focus-border"></span>
                	
                </div>
               <div class="form-group">
                    <input id="contactfrm_correo" type="email" name="email" class="form-control label-effect" required>
                    <label for="contactfrm_correo" class="control-label"> Correo Electronico </label>
                    <span class="focus-border"></span>
                    
                </div>
                <div class="form-group">
                    <label  class="" for="">Asunto</label>
                    <select id="pqrs" class="form-control label-effect">
                        <option value="">Seleccione Una Opcion</option>
                        <option value="1">Consulta</option>
                        <option value="2">Queja</option>
                        <option value="3">Sugerencia</option>
                    </select>
                    <span class="focus-border"></span>
                	
                </div>
                <div class="form-group">
                	<textarea name="" class="form-control label-effect" id="conct_text" cols="30" rows="3" required></textarea>
                    <label class="control-label" for="conct_text">Mensaje</label>
                    <span class="focus-border"></span>
                	
                </div>

					



                	<button id="enviar_cont" onclick="pulsar()"   class="btn btn-success" type="submit">Enviar</button> 
                </form>

                    

            </div>

            <div class="col-lg-6">
                <div class="container-map">
                   <h3>Nuestra Ubicacion</h3>
                    <div id="map"></div>
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=19uZPhsJP0jfOYJ_-pZNcxCvN9yA" width="600" height="300"></iframe>

                    </div>        
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <li><i class="fa fa-fw fa-envelope icon_fot" aria-hidden="true"></i>
                            Correo Electronico: crmorales@misena.edu.co
                        </li>
                        <li><i class="fa fa-fw fa-phone icon_fot" aria-hidden="true"></i>
                            Teléfono: 8748664
                        </li>
                    </div>
                    <div class="col-lg-6">
                        
                        <ul class="list-unstyled">
                            
                            <li style="margin-bottom: 1rem;"><i class="fa fa-fw fa-slack icon_fot" aria-hidden="true"></i>
                               Días hábiles de lunes a viernes de 7:00 a.m. - 7:00 p.m. y sábados de 8:00 a.m. - 1:00 p.m. en jornada continua.              
                            </li>
                            
                            
                        </ul>
                       
                        
                    
                    </div>
                    

                </div>






            </div>
        </div>
      


    </div>    

<!--     <script>
    // jQuery(document).ready(function($) {
        
     
    // });
    </script> -->
    
</section>





  


@endsection