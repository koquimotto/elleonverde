@extends('layouts.app')
    <?php
        $images=$post->files()->where('type','image')->get();
    ?>
@section('url')
    <meta property="og:url" content="https://elleonverde.com/blog/{{ $post->slug }}" />
@endsection

@section('type')
    <meta property="og:type" content="El León Verde" />
@endsection

@section('title_meta')
    <meta property="og:title" content="{{ $post->title }} - El León Verde" />
@endsection

    {{-- @php
        $content = $post->content;
        $content_alter = substr($content,3,100);    
    @endphp --}}

@section('description')
        <meta property="og:description" content="El León verde busca crear una comunidad que intercambie conocimientos y experiencias diversas relacionadas al huerto rural, huerto urbano, agricultura, herbario virtual, insectario virtual, mascotas, crianza de animales, difusión de experiencias que ayuden a mejorar las buenas prácticas de convivencia con el medio ambiente.">
@endsection

@section('image')
        <meta property="og:image" content="{{ asset('/uploads/images/facebook/'.$images->first()->file_name) }}">
@endsection

@section('site_name')
        <meta property="og:site_name" content="El León Verde">
@endsection

@section('locale')
        <meta property="og:locale" content="es_LA">
@endsection

@section('title', $post->title.' - El León Verde' )

@section('styles')
@endsection

@section('content')
        <section class="news_detail" style="padding:30px 0 120px">
            <div id="app" class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news_detail_left">
                                <div id="fb-root"></div>
                            <!-- Load Facebook SDK for JavaScript -->
                            
                            {{-- <div class="author-one">
                                <div class="author-one__image">
                                    <img src="assets/images/blog/author-1-1.jpg" alt="">
                                </div>
                                <div class="author-one__content">
                                    <h3>Christine Eve</h3>
                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting,
                                        remaining unchanged. It was popularised in the sheets containing.</p>
                                </div>
                            </div> --}}
                            
                            
                                <input id="postImage" type="hidden" value="{{$images->first()->file_name}}">
                                <input id="postId" type="hidden" value="{{ $post->id }}">
                                <input id="postDate" type="hidden" value="{{ $post->created_at->format('M d, Y') }}">
                                <input id="userName" type="hidden" value="{{ $post->user->name }}">
                                <input id="postTitle" type="hidden" value="{{ $post->title }}">
                                <input id="postContent" type="hidden" value="{{ $post->content }}">
                                <input id="postSlug" type="hidden" value="{{ $post->slug }}">
                                <post-component />
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            
                            @if (!Auth::check())
                                <div class="sidebar__single sidebar__search">
                                    <subscribe-component />
                                </div>
                            @else
                                <div class="service_details_left">
                                    <ul class="list-unstyled service_all_list">
                                        <li><a href="{{ route('auth.edit_publish',$post->slug) }}">Editar artículo</a></li>
                                    </ul>
                                </div>
                            @endif
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title title-style">Lo más reciente</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    @foreach ($last_posts as $last_post)
                                    <?php
                                        $last_image=$last_post->files()->where('type','image')->get();
                                    ?>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <a href="{{ route('blog.show',$last_post->slug) }}">
                                                <img src="{{ asset('uploads/images/thumbnail/'.$last_image->first()->file_name) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="{{ route('blog.show',$last_post->slug) }}" class="sidebar__post-content_meta"><i
                                                        class="far fa-user-circle"></i> {{ $last_post->user->name }}</a>
                                                <a href="{{ route('blog.show',$last_post->slug) }}">{{ $last_post->title }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            {{-- <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">All Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="#">Agriculture</a></li>
                                    <li><a href="#">Organic Food</a></li>
                                    <li><a href="#">Dairy Farm</a></li>
                                    <li><a href="#">Economy Solution</a></li>
                                    <li><a href="#">Harvests Innovations</a></li>
                                </ul>
                            </div> --}}
                            {{-- <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Popular Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Agriculture,</a>
                                    <a href="#">Food,</a>
                                    <a href="#">Healthy,</a>
                                    <a href="#">Economy,</a>
                                    <a href="#">Organic,</a>
                                    <a href="#">Farm,</a>
                                    <a href="#">Dairy,</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection


@section('scripts')
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));

        </script>
@endsection