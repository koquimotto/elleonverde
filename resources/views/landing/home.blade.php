@extends('layouts.app')

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="https://elleonverde.com/assets/images/social-icon/facebook-el-leon-verde.png">
    <meta name="description" content="El León verde busca crear una comunidad que intercambie conocimientos y experiencias diversas relacionadas al huerto rural, huerto urbano, agricultura, herbario virtual, insectario virtual, mascotas, crianza de animales, difusión de experiencias que ayuden a mejorar las buenas prácticas de convivencia con el medio ambiente. Podrás encontrar artículos relacionados, a plantas de la huerta, como manejar tu huerto, consejo para tus cultivos en la huerta, artículos de insectos, artículos de crianza de animales, artículos de crianza de mascotas, tratamiento de suelos para el cultivo, abonos orgánicos, plagas, podrás hacer consultas y a la ves podrás resolver consultas de otros miembros de la comunidad con las que podrás ayudar a otras personas en todo el mundo. Pero lo más increíble, es que podrás ser parte de una comunidad mundial que hará el herbario virtual, el insectario virtual más grande de nuestro planeta tierra, todo aquel que quiera podrá tomar fotos, investigar y publicar sus descubrimientos tanto en plantas como en insectos, podremos tener la oportunidad de compartir con todo el mundo todos los tipos de plantas e insectos del mundo que encontremos en nuestras casa, parques, campos, ciudades y hasta en nuestros viajes, podemos compartir en familia y ayudar a difundir el amor por todo el ecosistema que nos rodea">
    <meta name="keywords" content="Huerto, huerto urbano, huerto casero, huerta, macetohuerto, huerta orgánica, agricultura, huerto ecológico, como iniciar un huerto, como sembrar fresas, como sembrar patatas, como sembrar papas, cuando cosechar patatas, cuando cosechar papas, estiércol como abono, estiércol como abono para plantas, plagas en las plantas, como obtener semillas de lechuga, curso de huerta, curso de jardinería, libro de manejo de huerta, libro de jardinería, herramientas para el huerto, herramientas de jardín, que abonos orgánicos usar en la huerta, plagas en las plantas, como combatir los hongos en las plantas, como combatir el pulgón, como eliminar la mosca blanca, como trasplantar los tomates, como germinar tomates, como germinar almendras, usos de la cascara de huevo, como hacer compost, lombricompostera, humus de lombriz, como hacer humus de lombriz, lombrices californianas, como crías gallinas en casa, como crías aves, como criar ninfas, como criar agapornis, como criar cacatúas, como criar canarios, como criar caballos, tipo de razas de caballos, tipo de razas de perros, como criar a un perro, peces ornamentales, acuarios, como limpiar un acuario, acuario en casa, tipo de peses para acuario, como crías peses ornamentales, accesorios para acuarios, venta de plantas, venta de aves, venta de accesorios para aves, venta de accesorios para perros, venta de accesorios para caballos, venta de accesorios para el jardín, equipos de jardinería, insectario virtual, insectario, tipo de insectos, los insectos más extraños, los incestos más peligrosos, los incestos más increíbles, herbario virtual, herbario, tolo de plantas, tipo de clases de plantas carnívoras, como se clasifican los insectos, como se clasifican las plantas, asociación de cultivos, que cultivar en enero, que cultivar en febrero, que cultivar en marzo, que cultivar en abril, que cultivar en mayo, que cultivar en junio, que cultivar en julio, que cultivar en agosto, que cultivar en septiembre, que cultivar octubre, que cultivar noviembre, que cultivar en diciembre, que cultivar en verano, que cultivar en primavera, que cultivar en otoño, que cultivar en invierno, como hacer un insecticida orgánico, como hacer un fungicida orgánico, como hacer un repelente de mosquitos orgánico, como iniciar un hurto de cero, como hacer una mesa de cultivo, como iniciar una mesa de cultivo, beneficios de una mesa de cultivo, que sembrar en una mesa de cultivo, tipo de abonos orgánicos, como hacer un injerto, como injertar un aguacate, como injertar una palta, el mejor sustrato para macetas, el mejor sustrato para la huerta, el mejor sustrato para las plantas, como estabilizar el suelo para la huerta, estiércol de vaca, estiércol de vaca como abono, tipo de abonos a base de estiércol, donde comprar humus de lombriz, como polinizan las abejas, porque son importantes las abejas, como criar abejas en casa, abejas en el huerto, enfermedades de las abejas, razas de perros, como clasificar los insectos, como se hace la fotosíntesis de las plantas, abejas, como cosechar la miel de abeja, como reproducir reinas en una colmena, como germinar pimientos, cuando cosechar pimientos, tipo de flores, diseño de jardines, tipo de árboles, plantas de interior, plantas de sombra, cultivos rápidos, los cultivos más rápidos, como cuidar los rosales, como hacer un estanque en casa, que tipo de peces puedo poner en un estanque, tipo de abonos, tipo de fertilizantes, el león verde, comida para perros, crianza de gallinas ponedoras, como germinar semillas, como germinar alfalfa, como germinar frijol, como germinar maíz, como diseñar un huerto, como abonar un árbol frutal, como iniciar un vivero, tipo de fresas, cultivo de arándanos, cuidado del arándano, súper abono casero, plantas medicinales, beneficios de la caléndula, cultivo de patatas en bolsa, como cultivar patatas en bolsa, cultivo de papas en bolsa, como cultivar papas en bolsa, calendario de siembra, porque el aguacate no da frutos, porque mi palta no da frutos, porque mi aguacate no da frutos, como hacer rápido compost, cultivo de ajos en casa, como cultivar ajos en casa, como sembrar papaya, que plantar en enero, que plantar en febrero, que plantar en marzo, que plantar abril, que plantar en mayo, que plantar en junio, que plantar en julio, que plantar en agosto, que plantar en septiembre, que plantar en octubre, que plantar en noviembre, que plantar en diciembre, que plantar en verano, que plantar en otoño, que plantar en primavera, que plantar en invierno, como en tutorar los tomates, tamaños de masetas para cultivos, cual es el tamaño de macetas para tipos de cultivos, tipo de cultivos, tipo de macetas, asociación de cultivos para tomates, remedios caseros, riego por goteo, riego por aspersión, como controlar los caracoles, como eliminar las hormigas, como hacer un enraizado aéreo, como reproducir el romero, como hacer esquejes de lavanda, como hacer esquejes de romero, esquejes de romero, reproducción por esquejes, como hacer un acodo aéreo, vinagre como hervidita, como usar el vinagre en el huerto, como reproducir romero en agua">
    <meta name="author" content="GLOOBAL TIC INGENIEROS">
@endsection

@section('title','Principal - El León Verde')

@section('styles')
    <style>
        .blog_list .blog_post {
            display: -ms-flexbox;
            display: flex;
            padding-bottom: 30px;
            border-bottom: 1px solid #ddd;
        }
        .blog_list .blog_img {
            -ms-flex: 0 0 41%;
            flex: 0 0 41%;
            max-width: 41%;
            width: 100%;
        }
        .blog_list .blog_content {
            padding: 0px 0 0 25px;
            background-color: #fff;
        }
        .blog_list .blog_content p {
            overflow: hidden;
            height: 78px;
        }

        .blog_post {
        margin-bottom: 30px;
        overflow: hidden;
        }
        .blog_post .blog_img a {
            display: block;
            overflow: hidden;
        }

        .blog_img img {
            transition: all 0.5s ease-in-out;
            width: 100%;
        }
        .blog_link {
            font-size: 16px;
            color: #404a3d;

        }
        .blog_link i {
            vertical-align: middle;
            margin-left: 3px;
        }
        .blog_post:hover .blog_img img {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
        .blog_img {
            position: relative;
            overflow: hidden;
        }
        .blog_img img {
            width: 100%;
        }
        .blog_img img {
            transition: all 0.5s ease-in-out;
            width: 100%;
        }

        .blog_img img {
            transition: all 0.5s ease-in-out;
            width: 100%;
        }
        .blog_content {
            padding: 15px;
            background-color: #f7f7f7;
        }
        .blog_content p {
            margin-bottom: 10px;
            font-size: 14px;
        }
        .blog_title {
            margin-bottom: 10px;
            font-family: 'Barlow', sans-serif;
            
        }

        .blog_title a {
            font-size: 24px;
            color: var(--thm-black);
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
            font-weight: 600;
        }
        .blog_title a:hover {
            color: #66945d;
        }

        .list_none li {
            list-style:none;
        }
        .text_default {
            color: #07d765 !important;
        }
        @media only screen and (max-width: 767px) {

            .blog_list .blog_content {
                padding: 15px 0 0 0px;
            }
            .blog_list .blog_img {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
            .blog_list .blog_post {
                display: block;
                padding-bottom: 15px;
            }
            .content_box,
            .blog_post {
                margin-bottom: 15px;
            }
            .blog_content p {
                margin-bottom: 5px;
            }
            .blog_title {
                margin-bottom: 10px;
            }
    }
    </style>
@endsection

@section('content')
    <div class="" style="padding: 40px 0 20px;">
        <div class="container">
            <div class="row">
                    <div class="col-xl-12">
                        <div class="block-title" style="margin-bottom:30px">
                            <!-- <p>El León Verde</p> -->
                            <h3>Blog Verde</h3>
                            <div class="leaf">
                                <img src="{{ asset('assets/images/resources/leaf.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-xl-9">
                    <div class="blog_list">
                        <div class="row">

                            @foreach ($posts as $post)
                                <?php
                                    $count = App\Models\Comment::where('post_id', $post->id)->count();
                                ?>
                            <div class="col-md-12">
                                <div class="blog_post">
                                    <div class="blog_img">
                                        <a href="{{ route('blog.show',$post->slug) }}">
                                            <img src="{{ asset('uploads/images/medium/'.$post->image) }}">
                                        </a>
                                        <div class="blog_one_date_box">
                                            <p>{{ $post->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="blog_content">
                                        <h5 class="blog_title"><a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a></h5>
                                        <ul class="list-unstyled blog-one__meta" style="justify-content:left">
                                            <li><a href="{{ route('blog.show',$post->slug) }}"><i class="far fa-user"></i>{{ $post->user->name }} </a></li>
                                            {{-- <li><a href="#" class="blog_date"><i class="far fa-calendar"></i>February 15, 2014</a></li> --}}
                                            <li>
                                                <a href="{{ route('blog.show',$post->slug) }}">
                                                    <i class="far fa-comments"></i>
                                                    <?php
                                                                if ($count==0){
                                                                    echo 'Sin Comentarios';
                                                                } elseif ($count==1) {
                                                                    echo '01 Comentario';
                                                                }elseif($count > 9){
                                                                        echo $count.' Comentarios';
                                                                }else{
                                                                    echo '0'.$count.' Comentarios';
                                                                }
                                                            ?>
                                                </a>
                                            </li>
                                        </ul>
                                        <p>{{ $post->description }}</p>
                                        <a href="{{ route('blog.show',$post->slug) }}" class="thm-btn comment-one__btn">Ver más <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach 

                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Buscar">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- Youtube -->
        <section class="service_one" style="padding: 55px 0 70px;">
            <div class="container">
                <div class="block-title text-left">
                    <div class="row">
                        <div class="col-md-8">
                            <p>El León Verde</p>
                            <h3>Últimos Videos</h3>
                            <div class="leaf">
                                <img src="{{ asset('assets/images/resources/leaf.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4" style="text-align: right;">
                            <a target="_blank" href="https://www.youtube.com/channel/UC1JNK9V8zQCa7pz93jU7mNA">
                                <img src="{{ asset('assets/images/resources/btn-subscribete-el-leon-verde.png') }}" alt="" style="width: 90%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="gallery_one_carousel owl-carousel">
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/COu9TbLKjGc/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=COu9TbLKjGc" class="popup-video"><span
                                            class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/FuGam-woMxw/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=FuGam-woMxw" class="popup-video"><span
                                            class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/3qBeh-r3jz8/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=3qBeh-r3jz8" class="popup-video"><span
                                            class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/fPslyTU7wnU/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=fPslyTU7wnU" class="popup-video"><span
                                            class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/LMKu9-J3U2A/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=LMKu9-J3U2A" class="popup-video"><span
                                            class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/IGbxgn7HAxw/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=IGbxgn7HAxw" class="popup-video"><span
                                            class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/ptEoBYQGDbg/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=ptEoBYQGDbg" class="popup-video"><span
                                            class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Youtube -->

@endsection


@section('scripts')
@endsection