                        <div class="service_details_left">
                            <ul class="list-unstyled service_all_list">
                                <li class="{{ Request::is('colaborador/arti*') ? 'active' : '' }}"><a href="{{ route('auth.index') }}">Mis artículos</a></li>
                                <li class="{{ Request::is('colaborador/publ*') ? 'active' : '' }}"><a href="{{ route('auth.publish') }}">Nuevo artículo</a></li>
                                <li><a href="#">Comentarios</a></li>
                                <li class="{{ Request::is('colaborador/produc*') ? 'active' : '' }}" ><a href="{{ route('auth.ProductIndex') }}">Mis productos</a></li>
                                <li><a href="{{ Request::is('colaborador/youtu*') ? 'active' : '' }}" ><a href="{{ route('auth.youtubeIndex') }}">Mis videos</a></li>
                                <li><a href="{{ Request::is('colaborador/suscriptor*') ? 'active' : '' }}" ><a href="{{ route('auth.subscribersIndex') }}">Mis suscriptores web</a></li>
                            </ul>
                            {{-- <div class="need_help_box">
                                <h2>Need Help?</h2>
                                <p>Speak with a human to filling out a form? call corporate office and we will connect
                                    you with a team member who can help.</p>
                                <h3><span class="icon-phone-call"></span>666 888 0000</h3>
                            </div>
                            <div class="download_file_box">
                                <a href="#"><i class="icon-pdf"></i>Download PDF File</a>
                            </div> --}}
                        </div>