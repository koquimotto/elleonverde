<div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">
                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="{{ asset ('assets/images/shapes/close-1-1.png') }}" alt=""></a>
            </div><!-- /.side-menu__top -->

            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>

            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

            <div class="side-menu__content">
                    @if (!Auth::check())
                    {{-- <a href="#" class="btn btn-info" style="color:#fff; background:#ff8000;border-color:#ff8000"><i class="fa fa-user"></i> Registrate</a> --}}
                    <a href="{{ route('login') }}" class="btn btn-primary" style="color:#fff; background:#aacf38;border-color:#aacf38"><i class="fa fa-user"></i> Inicia sesión</a>

                    @else
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-info" style="color:#fff; background:#ff8000;border-color:#ff8000"><i class="fa fa-power-off"></i> Salir</a>
                    
                    <a href="{{ route('auth.list_publish') }}" class="btn btn-primary" style="color:#fff; background:#aacf38;border-color:#aacf38"><i class="fa fa-user"></i> Mis artículos</a>
                    @endif
                <div class="side-menu__social">
                    <a href="https://www.facebook.com/hogarlcarturo"><img src="/assets/images/social-icon/facebook-el-leon-verde.png" alt="" srcset=""></a>
                    <a href="https://www.instagram.com/el.leonverde/"><img src="/assets/images/social-icon/instagram-el-leon-verde.png" alt="" srcset=""></i></a>
                    <a href="https://www.youtube.com/channel/UC1JNK9V8zQCa7pz93jU7mNA"><img src="/assets/images/social-icon/youtube-el-leon-verde.png" alt="" srcset=""></a>
                </div>
            </div>
        </div>
    </div>