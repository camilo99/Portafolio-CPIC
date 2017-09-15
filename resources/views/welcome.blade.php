
@extends('layouts.app')
@section('title', 'Portafolio CPIC')
@section('content')
@include('auth.login')

<!-- Slider -->
@if(Auth::guest())
<nav class="navbar navbar-default navbar-static-top instinct_pa">
	<div class="container fluid">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			@if(Auth::check())
			<a href="{{ url('welcome') }}" class="navbar-brand" href="#">PORTAFOLIO</a>
			@else
			<a href="{{ url('/') }}" class="navbar-brand" href="#">PORTAFOLIO</a>
			@endif
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Left w Of Navbar -->
			<ul class="nav navbar-nav">
				&nbsp;
			</ul>

			<!-- Right Side Of Navbar -->

			<ul class="nav navbar-nav navbar-right">

				<li class="sub_top"><a href="http://worldskills.sena.edu.co/team.html" class="pop">Aprendices Exitosos</a></li>
				<li class="sub_top"><a class="pop" href=""> Programas De Formacion </a>
					<ul class="sub_cate">
						<li class="sub_menu2">
							<a class="redirect" href="{{url('programas')}}">Formacion Titulada</a>
						</li>
						<li class="sub_menu2">
							<a class="redirect" href="{{url('pros')}}">Formacion Complementaria</a>
						</li>
						<li class="sub_menu2">
							<a class="redirect" href="">Formacion Virtual</a>
						</li>
					</ul>
				</li>




				<li class="sub_top"><a class="pop" href=""> Grupos De Investigacion </a>
					<ul class="sub_cate">
						<li class="sub_menu2">
							<a class="redirect" href="http://www.sena.edu.co/es-co/formacion/Paginas/tecnologia-innovacion.aspx">Sennova</a>
						</li>
						<li class="sub_menu2">
							<a class="redirect" href="http://tecnoparque.sena.edu.co/">Tecnoparque</a>
						</li>
						<li class="sub_menu2">
							<a class="redirect" href="https://agenciapublicadeempleo.sena.edu.co/">Agencia De Empleo</a>
						</li>
					</ul>
				</li>

				<li class="sub_top"><a class="pop" href="{{ url('/contact')}}"> Contactanos </a></li>

				<!-- Authentication Links -->
				@if (Auth::guest())
				<li class="sub_top"><a class="pop" href="#" data-toggle="modal" data-target="#myModal">Iniciar Sesion</a></li>                            
				@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Cerrar sesión
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>
				</ul>
			</li>
			@endif
			<a href="" data-toggle="tooltip" title="Facebook" class="social_web"><i class="fa fa-facebook fa-2x social_networks"></i></a>
			<a href="" data-toggle="tooltip" title="Twitter" class="social_web"><i class="fa fa-twitter-square fa-2x social_networks"></i></a>
		</ul>
	</div>
</div>
</nav>
<nav class="social-networks-right">
                <a href="" class=""><i class="fa fa-reply fa-2x"></i></a>
             
      </nav>

@endif
<section class="slider">
	<header class="jumbotron jumbotron-index hero-index">
	@if(Auth::check())
				<a style="position: absolute;z-index: 999; right: 130px; top: 36px;" class="btn btn-success" href="{{ url('slider/create') }}"> 
						Añadir Imagen
				</a>
		@endif
		<div class="owl-carousel" id="Thinker">

			@foreach($slider_img as $img)
			<div class="imageContainer">
			@if(Auth::check())

				<a  style="    position: absolute;
    top: 38px;
    z-index: 999;
    /* border: 1px solid red; */
    /* left: 0; */
    right: 0;" href="{{ url('slider/'.$img->id.'/edit') }}" class="btn btn-default"> Editar Imagen </a>
					
			@endif
				<img class="featured-image img-responsive" src="{{asset ($img->imagen)}}" alt="hero">   
				
			</div>
			@endforeach
		</div>


	</header>

	<i class="arrow-header fa fa-chevron-down"></i>

</section>
<!--Acordion-->

<section class="acordeon">
	<div class="container">

		<h1 class="text-center ali">Nuestros Aliados</h1>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-3 unir_t">
				<div class="thumbnail animated fadeIn">
					<img class="img_pagi" src="{{ asset('images/1504897540.png') }}" alt="...">
					<div class="caption">
						<h3></h3>
						<p>La Agencia Pública de Empleo del SENA presta un servicio de intermediación laboral público, gratuito, indiscriminado y sin intermediarios, para que los colombianos puedan participar de una oportunidad de empleo y los empresarios encuentren el talento humano que requieren para ocupar sus vacantes.</p>
						<a href="https://agenciapublicadeempleo.sena.edu.co/Paginas/inicio.aspx" class="btn btn-primary" role="button">Mas Informacion</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 unir_t">
				<div class="thumbnail animated fadeIn">
					<img class="img_pagi" src="{{ asset('images/1504897601.png') }}" alt="...">
					<div class="caption">
						<h3></h3>
						<p>Es un programa de innovación tecnológica del ServicioNacional de Aprendizaje dirigida a todos los Colombianos, que actúa como acelerador para el desarrollo de proyectos de I+D+i materializados en prototipos funcionales en cuatro líneas tecnológicas: Electrónica y Telecomunicaciones, Tecnologías Virtuales, Ingeniería y diseño.</p>
						<a href="http://tecnoparque.sena.edu.co/" class="btn btn-primary" role="button">Mas Informacion</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 unir_t">
				<div class="thumbnail animated fadeIn">
					<img class="img_pagi" src="{{ asset('images/1504897630.png') }}" alt="...">
					<div class="caption">
						<h3></h3>
						<p>El Sistema de Investigación, Desarrollo Tecnológico e Investigación (SENNOVA) tiene el propósito de fortalecer los estándares de calidad y pertinencia, en las áreas de investigación, desarrollo tecnológico e innovación, de la formación profesional impartida en la entidad, identifica oportunidades e ideas de negocios, </p>
						<a href="http://www.sena.edu.co/es-co/formacion/Paginas/tecnologia-innovacion.aspx" class="btn btn-primary" role="button">Mas Informacion</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 unir_t">
				<div class="thumbnail animated fadeIn">
					<img class="img_pagi" src="{{ asset('images/1504897668.png') }}" alt="...">
					<div class="caption">
						<h3></h3>
						<p>Más que una competencia, para el SENA WorldSkills es una estrategia que promueve y fomenta la calidad en la formación técnica y tecnológica, permitiendo a sus aprendices medir sus conocimientos en el plano internacional y alcanzar los más altos niveles de preparación y competitividad en cada una de sus habilidades.</p>
						<a href="http://worldskills.sena.edu.co/" class="btn btn-primary" role="button">Mas Informacion</a>
					</div>
				</div>
			</div>
		</div>		
				
	</div>

</section>
<!-- Bienestar-->
<section class="bienestar">
	<div class="container">
		<div class="row">
			<div class= "col-md-5">
				<div  data-aos="fade-right" data-aos-once="true" class="card-info text-right">
					<span class="icono-salud fa fa-heartbeat fa-3x"></span>
					<h5><strong>SALUD</strong></h5>
					<p>
						Fomenta espacios de promoción de la salud física y mental para el fortalecimiento de hábitos de vida saludables.
					</p>
				</div>
			</div>		
		</div>
		<div class="row">
			<div class="text-left col-md-5 col-md-offset-6 ">
				<div  data-aos="fade-left" data-aos-once="true" class="card-info">
					<span class="icono-igualdad fa fa-thumbs-o-up fa-3x" ></span>
					<h5><strong>EQUIDAD E IGUALDAD DE OPORTUNIDADES</strong></h5>
					<p>
						Promueve estrategias que garanticen la equidad, la no discriminación y el acceso en igualdad de oportunidades.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 text-right">
				<div  data-aos="fade-right" data-aos-once="true" class="card-info">
					<span class="icono-competencia fa fa-book fa-3x"></span>
					<h5><strong>COMPETENCIAS BÁSICAS</strong></h5>
					<p>
						Procura la construcción de estrategias de autogestión del aprendizaje para el incremento del logro educativo.​
					</p>
				</div>		

			</div>
		</div>
		<div class="row">
			
			<div  class= "col-md-6 col-md-offset-4 text-left">
				<div data-aos="flip-down" data-aos-once="true" class="card-info">
					<span class="icono-feliz fa fa-smile-o fa-3x"></span>
					<h5><strong>HABILIDADES SOCIOEMOCIONALES</strong><br></h5>
					<p>
						Fortalece competencias ciudadanas y habilidades sociales de trabajo en equipo con base en valores de solidaridad, servicio, respeto y autonomía, entre otros.​
					</p>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-md-5 text-right">
				<div  data-aos="fade-right" data-aos-once="true" class="card-info">
					<span class="icono-cultura fa fa-tree fa-3x"></span>
					<h5><strong>CULTURA</strong><br></h5>
					<p>
						Procura la construcción de estrategias de autogestión del aprendizaje para el incremento del logro educativo.
					</p>
				</div>
			</div>
			<div class="col-md-5 col-md-offset-1 text-left">
				<div  data-aos="fade-left" data-aos-once="true" class="card-info">
					<span class="icono-depor fa fa-futbol-o fa-3x"></span>
					<h5><strong>DEPORTE</strong><br></h5>
					<p>
						Fomenta la práctica del deporte y la actividad física para el desarrollo de hábitos de vida saludables, el adecuado uso del tiempo libre y el desarrollo de habilidades socioemocionales, apoyando al proceso de formación integral. ​.
					</p>
				</div>	
			</div>
		</div>
		<div class="row">
			
			<div data-aos="flip-down" data-aos-once="true" class="text-left col-md-6 col-md-offset-4">
				<div class="card-info">
					<span class="icono-lider fa fa-slideshare fa-3x"></span>
					<h5><strong>LIDERAZGO</strong><br></h5>
					<p>
						Fomenta la formación de líderes integrales con sentido de pertenencia hacia la institución que fortalezcan los espacios de representación y participación, como elementos para la construcción de ciudadanos socialmente responsables
					</p>
				</div>
			</div>
			
		</div>
		<div class="row">
			
			<div data-aos="fade-right" data-aos-once="true" class="text-right col-md-5">
				<div class="card-info">
					<span class="icono-respon fa fa-users fa-3x"></span>
					<h5><strong>RESPONSABILIDAD SOCIAL</strong><br></h5>
					<p>
						Fomenta habilidades de liderazgo social que permitan desarrollar el crecimiento personal, la apropiación institucional de la entidad y la solidaridad con las comunidades.
					</p>
				</div>
			</div>

		</div>
		<div class="row">
			
			<div  data-aos="fade-left" data-aos-once="true" class="col-md-5 col-md-offset-6">

				<div class="card-info">
					<span class="icono-convive fa fa-venus-mars fa-3x"></span>
					<h5><strong>CONVIVENCIA</strong><br></h5>
					<p>
						Fomenta ambientes de convivencia y participación social a través de espacios de reflexión como actores activos en la construcción de una paz duradera y estable, enfocada en la formación profesional integral.
					</p>
				</div>
			</div>
		</div>
		


	</div>
</section>


<section class="galeria">
	<div class="container-fluid" style="background: -webkit-linear-gradient(top, #fff , #cecece)">
		<div class="row">
			<div class="col-md-5">
				<h1 class="text-center">Galeria CPIC</h1>
			</div>
			<div class="col-md-7">
				<div class="container-gallery" id="gallery" style="border: 1px solid black">
					
				</div>
				
			</div>
		</div>
	</div>
</section>


@endsection

@section('footer')
<footer class="Imagine_dreamer">

	<div class="container">
			
			
				
		

		<div class="">

			<div class="col-md-7">
				<h4 > INFORMACIÓN </h4>
				<ul class="list-unstyled">
					<li class="awesome_icon"><i class="fa fa-fw fa-home icon_fot"></i>Centro de Procesos Industriales -  Regional Caldas</li>
					<li class="awesome_icon"><i class="fa fa-fw fa-flag icon_fot" ></i>Servicio Nacional de Aprendizaje SENA</li>
					<li class="awesome_icon"><i class="fa fa-fw fa-flag icon_fot" ></i>Ministerio de la Protección Social</li>

					<li class="awesome_icon">
						<li><i class="fa fa-fw fa-map-marker icon_fot" aria-hidden="true"></i>Dirección: Kilómetro 10 vía al Magdalena </li>
					</li>
					<li class="awesome_icon">
						<li><i class="fa fa-fw fa-map-marker icon_fot" aria-hidden="true"></i>Ubicacion: Vista Panorámica Bloques principales  </li>
					</li>
					<li class="awesome_icon">
						<i class="fa fa-fw fa-envelope icon_fot" aria-hidden="true"></i><a class="mailto" style="color: #fff;" href="mailto:crmorales@misena.edu.co">Correo Electrónico: crmorales@misena.edu.co</a>
					</li>
					<li class="awesome_icon">
						<li><i class="fa fa-fw fa-phone icon_fot" aria-hidden="true"></i>Telefono : 8748664</li>
					</li>
					<li class="awesome_icon">
						<li><i class="fa fa-fw fa-slack icon_fot" aria-hidden="true"></i>Horario De Atencion: Lunes a viernes de 8:00 a 5:00 pm ( Jornada Continua )</li>
					</li>

				</ul>    
				<div class="container">
					<nav class="footer-social-networks">
						<a href="" data-toggle="tooltip" title="Facebook" class="social_web"><i class="fa fa-facebook fa-3x social_networks"></i></a>
						<a  href="" data-toggle="tooltip" title="Twitter" class=" social_web "><i class="fa fa-twitter-square fa-3x social_networks" aria-hidden="true"></i></a>
						<a href="" data-toggle="tooltip" title="Instagram" class=" social_web "><i class="fa fa-instagram fa-3x social_networks"></i></a>
						<a href="" data-toggle="tooltip" title="Google +" class="social_web "><i class="fa fa-google-plus fa-3x social_networks"></i></a>
					</nav>  
				</div>
				

				<p class="cpi">&copy; Todos los derechos reservados {{date('Y')}}  </p>        
			</div>

			<div class="col-md-5 etica_sena">
				<img  class="" src="{{asset('imgs/icontecA.png')}}">
				<img  class="" src="{{asset('imgs/icontecB.png')}}">
				<img  class="" src="{{asset('imgs/icontecC.png')}}">
				<img  class="" src="{{asset('imgs/icontecD.png')}}">
				<ul class="fecha_ini">
					<li  class="fecha_mod">Última modificación: 
						16/08/2017 11:18 a. m.</li>
				</ul>
					</div>


				</div>
			</div>
			<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	

		</footer>
		@endsection
@push('scripts')
      <script>

        var images = [
        @foreach($imagen as $img)
        '{{asset($img->imagen)}}',
        @endforeach
        ];

        $(function() {
          $('#gallery').imagesGrid({
            images: [
              @foreach($imagen as $img)
              '{{asset($img->imagen)}}',
              @endforeach
            ],
            align: true,
            getViewAllText: function(imgsCount) { return 'Ver más' }
          });

        });

      </script>
@endpush