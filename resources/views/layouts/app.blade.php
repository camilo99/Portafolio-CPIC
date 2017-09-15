<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'PORTAFOLIO') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset ('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset ('css/images-grid.css')}}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{ asset('css/alert.default.css')}}">
  <link rel="stylesheet" href="{{ asset('css/alert.core.css')}}">
  <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
  <link rel="stylesheet" href="{{ asset('css/master.css')}}">




</head>
<body>
  @if(Auth::check())
  <div class="nav-side-menu">

    <div class="brand">
           <!-- <ul>
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
      </ul>  -->

      <img id="perfil" src="{{ asset(Auth::user()->image)}}" alt="" class="img-responsive center-block">



      <ul>

       <li id="diferente" data-toggle="collapse" data-target="#new2" class="collapsed">
        <a class="a_hover" href="#" class="">{{ (Auth::user()->name)}}<span class="arrowtwo"></span></a>
      </li>
    </ul>
    <ul class="sub-menu collapse" id="new2">
      <li id="diferente">
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




</div>
<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

<div class="menu-list">


  <ul id="menu-content" class="menu-content collapse out">



    <li>
      <a href="{{url('/admin')}}">
        <i class="fa fa-user fa-lg"></i> Mi perfil
      </a>
    </li>


    <li>
      <a href="{{url('/users')}}">
        <i class="fa fa-users fa-lg"></i> Usuarios
      </a>
    </li>
    <li>
      <a href="{{url('/')}}">
        <i class="fa fa-paper-plane fa-lg"></i> Inicio
      </a>
    </li>
  </ul>



  <li data-toggle="collapse" data-target="#new" class="collapsed">

    <a href="#"><i class="fa fa-columns fa-lg"></i> Programas De Formacion <span class="arrow"></span></a>

  </li>
  <ul class="sub-menu collapse" id="new">
    <a class="sub-dos" href="{{url('programas/')}}"><li>Formacion Titulada</li></a>
    <a class="sub-dos" href="{{url('')}}"><li>Formacion Complementaria</li></a>
    <a class="sub-dos" href="{{url('')}}"><li>Formacion Virtual</li></a>




  </ul>
</div>
</div>




        <!-- <div id="sidebar">
        <div id="sidebar-content">
            <ul class="list-unstyled text-center">
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
                <li >
                    <img id="perfil" src="{{ asset(Auth::user()->image)}}" alt="" class="img-responsive">
                </li>
                <li  class="d">
                    <a class="d" href="{{url('/admin')}}">Mi perfil</a>
                </li>                
                <li  class="d">
                    <a class="d" href="{{url('/users')}}">Usuarios</a>
                </li>
                <li  class="d">
                    <a class="d" href="{{url('/')}}">Inicio</a>
                </li>
               
                
               <li class="sub_top"><a class="pop" href=""> Programas De Formacion </a>
                    <ul class="sub_cate">
                        <li class="sub_menu2">
                            <a class="redirect" href="">Formacion Titulada</a>
                        </li>
                        <li class="sub_menu2">
                            <a class="redirect" href="">Formacion Complementaria</a>
                        </li>
                        <li class="sub_menu2">
                            <a class="redirect" href="">Formacion Virtual</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
      </div> -->
      @endif


      <ul class="dropdown-menu" role="menu">

      </ul>


      <div id="{{ Auth::check() ? 'main-content' : ''}}">
        @yield('content')   
        @yield('footer')         
      </div>




      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/images-grid.js') }}"></script>
      <script src="{{ asset('js/velocity.min.js') }}"></script>
      <script src="{{ asset('js/alert.min.js') }}"></script>
      <script src="{{ asset('js/aos.js') }}"></script>
      <script src="{{ asset('js/site.js') }}"></script>


      <script>
        $(document).ready(function() {
          $('form').on('click', '.btn-delete', function(event) {
            event.preventDefault();
            if (confirm("Realmente desea eliminar este elemento?")) {
              $(this).parent().submit();
            }
          });

        });
      </script>


      @stack('scripts')

    </body>
    </html>