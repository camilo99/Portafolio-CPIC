<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PORTAFOLIO') }}</title>

    <style>
        a.d:hover{
            text-decoration: none;
        }
        li.d:hover{
            background-color: #fff;
        }
        li.d{
            padding: 5px;

        }
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/gallerybox.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/alert.default.css')}}">
    <link rel="stylesheet" href="{{ asset('css/alert.core.css')}}">
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/AdminLTE.css')}}">
    

    <link rel="stylesheet" href="{{ asset('css/master.css')}}">




</head>
<body>
    @if(Auth::check())
    <div id="sidebar">
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
                 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Almacén</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i> Artículos</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
            </ul>
        </div>
    </div>
    @endif

    
        <ul class="dropdown-menu" role="menu">
            
        </ul>

        
        <div id="{{ Auth::check() ? 'main-content' : ''}}">
            @yield('content')   
             @yield('footer')         
        </div>
      

            
       



    </div>


    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/velocity.min.js') }}"></script>
    <script src="{{ asset('js/alert.min.js') }}"></script>
    <script src="{{ asset('js/jquery.gallerybox.js') }}"></script>
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