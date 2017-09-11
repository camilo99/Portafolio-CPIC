    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right">
                            
                        <li class="sub_top"><a href="http://worldskills.sena.edu.co/team.html" class="pop">Aprendices Exitosos</a></li>
                        
                        <li class="sub_top"><a class="pop" href=""> Programas De Formacion </a>
                            <ul class="sub_cate">
                                <li class="sub_menu2">
                                    <a class="redirect" href="holi">Formacion Titulada</a>
                                </li>
                                <li class="sub_menu2">
                                    <a class="redirect" href="">Formacion Complementaria</a>
                                </li>
                                <li class="sub_menu2">
                                    <a class="redirect" href="{{url('/programas')}}">Formacion Virtual</a>
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
                        <a href="" data-toggle="tooltip" title="Facebook" class=" social_web"><i class="fa fa-facebook fa-2x social_networks"></i>
                        </a>
                        <a  social_networkshref="" data-toggle="tooltip" title="Twitter" class=" social_web "><i class="fa fa-twitter-square fa-2x social_networks" aria-hidden="true"></i></a>
                    </ul>
                </div>
            </div>
        </nav>