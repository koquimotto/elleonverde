        <footer class="site-footer">
            <div class="site-footer_farm_image"><img src="{{ asset('/assets/images/resources/site-footer-farm.png') }}"
                    alt="Farm Image"></div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__about wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__title">
                                <h3 class="title-style">El León Verde</h3>
                            </div>
                            <div class="footer-widget_about_text">
                                <p>Suscríbete en nuestra página web, ingresa tu correo electrónico y haz clic en el botón para que puedas enterarte de nuestras últimas publicaciones. </p>
                            </div>
                            <subscribefooter-component />
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__link wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__title">
                                <h3 class="title-style">Links de Interes</h3>
                            </div>
                            <ul class="footer-widget__links-list list-unstyled">
                                {{-- <li><a href="{{ route('store') }}">Tienda</a></li> --}}
                                <li><a href="/">El Huerto</a></li>
                                <li><a href="{{ route('blog') }}">Blog Verde</a></li>
                                <li><a href="{{ route('videos') }}">Videos Sugeridos</a></li>
                                {{-- <li><a href="#">Herbario Virtual</a></li>
                                <li><a href="#">Insectario Virtual</a></li>
                                <li><a href="#">Tu Compañero Ideal</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget__column footer-widget__news wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__title">
                                <h3 class="title-style">Blog Verde</h3>
                            </div>
                            <ul class="footer-widget__news list-unstyled">
                                @php
                                    use App\Models\Post;
                                    $footer_posts=Post::orderBy('id', 'desc')->take(2)->get();
                                @endphp
                                    
                                @foreach ($footer_posts as $footer_post)
                                <li>
                                    <div class="footer-widget__news_image">
                                        <a href="{{ route('blog.show',$footer_post->slug) }}">
                                        <img src="{{ asset('uploads/images/thumbs/'.$footer_post->image) }}" alt="El León Verde">
                                        </a>
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="{{ route('blog.show',$footer_post->slug) }}"> {{ $footer_post->title }}</a></p>
                                    </div>
                                    <div class="footer-widget__news_date_box">
                                        <p>{{ $footer_post->created_at->format('M d, Y') }}</p>
                                    </div>
                                </li>
                                @endforeach
                                {{-- <li>
                                    <div class="footer-widget__news_image">
                                        <img src="assets/images/resources/footer-1-img-2.jpg" alt="">
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="news_detail.html">Farmer Sentiment Darkens Hopes Fade</a></p>
                                    </div>
                                    <div class="footer-widget__news_date_box">
                                        <p>30 Oct, 2019</p>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget__column footer-widget__contact wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__title">
                                <h3 class="title-style">Suscríbete</h3>
                            </div>
                            <div class="footer-widget_contact">
                                {{-- <p>66 Broklyn Street, New Town<br>DC 5752, New Yrok</p>
                                <a href="mailto:needhelp@agrikol.com">needhelp@agrikol.com</a><br>
                                <a href="tel:666-888-0000">666 888 0000</a> --}}
                                <div class="site-footer__social">
                                    <a target="_blank" href="https://www.facebook.com/hogarlcarturo"><img src="{{ asset('assets/images/social-icon/facebook-el-leon-verde.png') }}" alt="" srcset=""></a>
                                    <a target="_blank" href="https://www.instagram.com/el.leonverde/"><img src="{{ asset('assets/images/social-icon/instagram-el-leon-verde.png') }}" alt="" srcset=""></i></a>
                                    <a target="_blank" href="https://www.youtube.com/channel/UC1JNK9V8zQCa7pz93jU7mNA"><img src="{{ asset('assets/images/social-icon/youtube-el-leon-verde.png') }}" alt="" srcset=""></a>
                                    {{-- <a href="#"><i class="fab fa-dribbble"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>        
        <div class="site-footer_bottom">
            <div class="container">
                <div class="site-footer_bottom_copyright">
                    <p>@ All copyright <?php echo date('Y');?>, <a href="#">www.elleonverde.com</a></p>
                </div>
                <div class="site-footer_bottom_menu">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('privacyPolicies') }}">Politica de privacidad</a></li>
                        <li><a href="#">Términos de uso</a></li>
                    </ul>
                </div>
            </div>
        </div>