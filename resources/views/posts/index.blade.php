@extends('layouts.app')
@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- meta dinámico --}}
    <meta property="og:url" content="https://elleonverde.com/blog/{{ $post->slug }}" />
    <meta property="og:type" content="El León Verde" />
    <meta property="og:title" content="{{ $post->title }} - El León Verde" />
    <meta property="og:description" content="{{ $post->description }}">
    <meta property="og:image" content="https://elleonverde.com/uploads/images/facebook/{{ $post->image }}">
    <meta property="og:site_name" content="El León Verde">
    <meta property="og:locale" content="es_LA">
    <meta name="keywords" content="{{ $post->keywords }}">
    <meta name="author" content="GLOOBAL TIC INGENIEROS">
@endsection

@section('title', $post->title.' - El León Verde' )

@section('styles')

<style>
    .aawp{
        box-sizing: border-box;
        color: #3a3a3a;
    }
    .aawp-grid {
        display: flex;
        flex-flow: row wrap;
        justify-content: flex-start;
        margin: 0 -2%;
    }
    .aawp-grid__item {
        width: 100%;
        margin: 0 2%;
    }

    @media (min-width: 481px){
            .aawp-grid__item {
            display: flex;
        }
    }

    @media (max-width: 768px){
        .aawp .aawp-product--horizontal .aawp-product__thumb {
            float: none;
            width: 100%;
        }
    }

    .aawp .aawp-product--horizontal.aawp-product--ribbon {
        padding-top: 35px;
    }

    .aawp .aawp-product--horizontal {
        zoom: 1;
        display: block;
        max-width: 100%;
        padding: 20px;
        background: #fff;
        border: 1px solid #ececec;
        font-size: 15px;
        line-height: 1.6;
        white-space: normal;
    }

    .aawp, .aawp *, .aawp :after, .aawp :before, .aawp div, .aawp div *, .aawp div :after, .aawp div :before, .aawp span, .aawp span *, .aawp span :after, .aawp span :before {
        box-sizing: border-box;
    }

    .aawp-product {
        position: relative;
        margin: 0 0 30px;
        width: 100%;
    }

    .aawp .aawp-product--horizontal .aawp-product__ribbon--sale {
        top: -1px;
        right: -1px;
    }

    .aawp .aawp-product--horizontal .aawp-product__ribbon {
        position: absolute;
        padding: 0 15px;
    }

    .aawp-product__ribbon--sale {
        background: #27ae60;
        border-bottom-left-radius: 2px;
        color: #fff;
    }

    .aawp-product__ribbon {
        padding: 0 20px;
        font-weight: 400;
        font-size: 12px;
        line-height: 20px;
        text-transform: uppercase;
    }
    

    a, abbr, acronym, address, applet, big, blockquote, body, caption, cite, code, dd, del, dfn, div, dl, dt, em, fieldset, font, form, h1, h2, h3, h4, h5, h6, html, iframe, ins, kbd, label, legend, li, object, ol, p, pre, q, s, samp, small, span, strike, strong, sub, sup, table, tbody, td, tfoot, th, thead, tr, tt, ul, var {
        border: 0;
        margin: 0;
        padding: 0;
    }

    .aawp .aawp-product--horizontal .aawp-product__thumb {
        float: left;
        width: 160px;
    }

    .aawp .aawp-product--horizontal .aawp-product__image {
        display: block;
        height: auto;
        margin: 0 auto 15px;
        max-height: 200px;
        max-width: 100%;
        width: auto;
        border: none;
        box-shadow: none;
    }

    .aawp .aawp-product--horizontal .aawp-product__content {
        margin-left: 160px;
        padding-left: 20px;
    }

    .aawp .aawp-product--horizontal .aawp-product__title {
        display: block;
        margin: 0 0 15px;
        font-size: 18px;
        font-weight: 700;
    }

    .aawp-product .aawp-product__title {
        word-wrap: break-word;
    }

    .a-title-adAmazon{
        /* color: #fb4504;  */
        text-decoration: none; 
        transition: color .1s ease-in-out,background-color .1s ease-in-out; 
        background-color: transparent; 
        border: 0; 
        margin: 0; 
        padding: 0;   
        cursor: pointer; 
        font-size: 15px; 
        line-height: 1.6; 
        white-space: normal;
    }

    @media (max-width: 768px){
        .a-title-adAmazon {
        transition: all 0s ease-in-out;
        }
    }

    @media (max-width: 768px){
        .aawp .aawp-product--horizontal .aawp-product__content {
        margin: 0;
        padding: 0;
        }
    }

    @media (max-width: 480px){
        .aawp .aawp-product--horizontal .aawp-product__title {
        margin-bottom: 5px;
        font-size: 16px;
        }
    }

    @media (max-width: 480px){
        .aawp .aawp-product--horizontal .aawp-product__description {
        display: none;
        }
    }

    @media (max-width: 768px){
        .aawp .aawp-product--horizontal .aawp-product__footer {
        margin: 0;
        padding: 0;
        }
    }

    @media (max-width: 480px){
        .aawp .aawp-product--horizontal .aawp-product__pricing {
        margin-bottom: 0;
        }
    }
    
        

    .aawp .aawp-product--horizontal .aawp-product__description {
        margin: 0;
    }

    .aawp .aawp-product--horizontal .aawp-product__description>ul {
        margin: 0 0 5px;
        padding: 0 0 0 20px;
        list-style-type: disc;
        list-style-position: outside!important;
    }

    .ul-description-amazon{
        list-style: disc;
        border: 0;
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }

    .aawp .aawp-product--horizontal .aawp-product__description>ul li {
        margin: 0;
        padding: 0;
        background: none;
        word-wrap: break-word;
    }

    .aawp .aawp-product--horizontal .aawp-product__footer {
        text-align: right;
        margin-left: 160px;
        padding-left: 20px;
    }

    .aawp .aawp-product--horizontal .aawp-product__pricing {
        display: block;
        margin-bottom: 5px;
    }

    .aawp .aawp-product--horizontal .aawp-product__price--old {
        font-size: 14px;
        text-decoration: line-through;
        color: #666;
    }

    .aawp .aawp-product--horizontal .aawp-product__price {
        display: inline-block;
        line-height: 34px;
        vertical-align: middle;
    }

    .aawp .aawp-product--horizontal .aawp-product__pricing span+span {
        margin-left: 15px;
    }

    .aawp .aawp-product--horizontal .aawp-product__price--saved {
        border-radius: 2px;
        background: #27ae60;
        background: rgba(39,174,96,.8);
        padding: 4px 6px;
        color: #fff;
        font-size: 12px;
        line-height: 12px;
        margin-top: 11px;
        margin-bottom: 11px;
    }

    .aawp .aawp-product--horizontal .aawp-product__price--current {
        font-size: 20px;
        font-weight: 700;
    }

    .aawp a.aawp-check-premium, .aawp a.aawp-check-premium:active, .aawp a.aawp-check-premium:focus, .aawp a.aawp-check-premium:hover, .aawp a.aawp-check-premium:visited, .aawp a.aawp-check-prime, .aawp a.aawp-check-prime:active, .aawp a.aawp-check-prime:focus, .aawp a.aawp-check-prime:hover, .aawp a.aawp-check-prime:visited, a.aawp-check-premium, a.aawp-check-premium:active, a.aawp-check-premium:focus, a.aawp-check-premium:hover, a.aawp-check-premium:visited, a.aawp-check-prime, a.aawp-check-prime:active, a.aawp-check-prime:focus, a.aawp-check-prime:hover, a.aawp-check-prime:visited {
        border: none;
        box-shadow: none;
        outline: none;
        text-decoration: none;
    }

    .aawp-check-prime, .aawp .aawp-check-prime {
        display: inline-block;
        width: 55px;
        height: 16px;
        background-image: url(https://elleonverde.com/assets/images/amazon/amazon-prime-logo-prime-amazon.png);
        vertical-align: middle;
    }

    /* .aawp-button.aawp-button--icon, .aawp .aawp-button.aawp-button--icon {
        position: relative;
        padding-left: 32px;
    } */

    .aawp-button.aawp-button--amazon, .aawp .aawp-button.aawp-button--amazon {
        border-color: #9c7e31 #90742d #786025!important;
        border-radius: 3px;
        box-shadow: inset 0 1px 0 hsla(0,0%,100%,.4);
        background: #f0c14b;
        background: linear-gradient(180deg,#f7dfa5,#f0c14b) repeat scroll 0 0 transparent;
        color: #111!important;
        font-weight:500;
    }

    .aawp-button.shadow, .aawp .aawp-button.shadow {
        box-shadow: 0 1px 2px rgba(0,0,0,.3),inset 0 0 40px rgba(0,0,0,.1);
    }

    .aawp-button, .aawp .aawp-button {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        padding: 7px 12px 6px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 400;
        line-height: 19px;
        text-align: center;
        text-decoration: none!important;
        background-color: #fff;
        border: 1px solid #ccc!important;
        color: #333!important;
    }
    

</style>
@endsection

@section('content')
        <section class="news_detail" style="padding:30px 0 120px">
            <div class="container">
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
                            
                            
                                <input id="postImage" type="hidden" value="{{$post->image}}">
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
                                                <img src="{{ asset('uploads/images/thumbnail/'.$last_post->image) }}" alt="">
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