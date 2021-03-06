<header class="main-nav__header-one">
                <nav class="header-navigation stricky">
                    <div class="container clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left">
                            {{-- <a href="#" class="main-nav__search search-popup__toggler"><i
                                    class="icon-magnifying-glass"></i></a> --}}
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <div class="main-nav__main-navigation">
                            <ul class=" main-nav__navigation-box">
                                <li class="{{ Request::is('/*') ? 'current' : '' }}">
                                    <a href="/">Inicio</a>
                                </li>
                                {{-- <li class="{{ Request::is('tienda*') ? 'current' : '' }}">
                                    <a href="{{ route('store') }}">Tienda</a>
                                </li> --}}
                                {{--<li class="dropdown {{ Request::is('tienda*') ? 'current' : '' }}">
                                    <a href="#">Tienda</a>
                                    <ul>
                                        <li><a href="{{ route('store','america') }}">Tienda en América</a></li>
                                        <li><a href="{{ route('store','europa') }}">Tienda en Europa</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>--}}
                                <li class="{{ Request::is('el-huert*') ? 'current' : '' }}">
                                    <a href="{{ route('garden') }}">El huerto</a>
                                </li>
                                <li class="{{ Request::is('blog*') ? 'current' : '' }}">
                                    <a href="{{ route('blog') }}">Blog</a>
                                {{--</li><li class="{{ Request::is('Foro*') ? 'current' : '' }}">
                                    <a href="{{ route('foro') }}">Foro</a>
                                </li>--}}
                                <li class="{{ Request::is('video*') ? 'current' : '' }}">
                                    <a href="{{ route('videos') }}">Videos Sugeridos</a>
                                </li>
                                <li class="{{ Request::is('curso*') ? 'current' : '' }}">
                                    <a href="{{ route('courses') }}">Cursos Sugeridos</a>
                                </li>
                                {{-- <li class="{{ Request::is('herbario*') ? 'current' : '' }}">
                                    <a href="{{ route('herbal') }}">Herbario Virtual</a>
                                </li> --}}
                                {{-- <li class="{{ Request::is('insectario*') ? 'current' : '' }}">
                                    <a href="{{ route('insectary') }}">Insectario Virtual</a>
                                </li> --}}
                                {{-- <li class="{{ Request::is('tu*mascota*ideal*') ? 'current' : '' }}">
                                    <a href="{{ route('pets') }}">Tu Compañero Ideal</a>
                                </li> --}}
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->

                        {{-- <div class="main-nav__right">
                            <div class="icon_cart_box">
                                <a href="cart.html">
                                    <span class="icon-shopping-cart"></span>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </nav>
            </header>