<div class="topbar-one" style="background-image: url({{ asset('assets/images/backgrounds/head-el-leon-verde.jpg') }});" >
                <div class="topbar_bg"></div>
                <div class="container">
                    <div class="topbar-one__left">

                        @if (!Auth::check())
                        {{-- <a href="#" class="btn btn-info" style="color:#fff; background:#ff8000;border-color:#ff8000"><i class="fa fa-user"></i> Registrate</a> --}}
                        <a href="{{ route('login') }}" class="btn btn-primary" style="color:#fff; background:#aacf38;border-color:#aacf38"><i class="fa fa-user"></i> Inicia sesión</a>

                        @else
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-info" style="color:#fff; background:#ff8000;border-color:#ff8000"><i class="fa fa-power-off"></i> Salir</a>
                        
                        <a href="{{ route('auth.index') }}" class="btn btn-primary" style="color:#fff; background:#aacf38;border-color:#aacf38"><i class="fa fa-user"></i> Mis artículos</a>
                        @endif

                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                        @csrf
                    </form>

                    <div class="topbar-one__middle">
                        <a href="https://elleonverde.com" class="main-nav__logo">
                            <img src="{{ asset('assets/images/resources/logo-el-leon-verde.png') }}" class="main-logo" alt="Awesome Image" />
                        </a>
                    </div>
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">
                            <a target="_blank" href="https://www.facebook.com/hogarlcarturo"><img src="{{ asset('assets/images/social-icon/facebook-el-leon-verde.png') }}" alt="" srcset=""></a>
                            <a target="_blank" href="https://www.instagram.com/el.leonverde/"><img src="{{ asset('assets/images/social-icon/instagram-el-leon-verde.png') }}" alt="" srcset=""></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UC1JNK9V8zQCa7pz93jU7mNA"><img src="{{ asset('assets/images/social-icon/youtube-el-leon-verde.png') }}" alt="" srcset=""></a>
                            {{-- <a href="#"><i class="fab fa-dribbble"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>