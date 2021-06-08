@extends('layouts.app')
@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="GLOOBAL TIC INGENIEROS">
@endsection

@section('title', 'Tienda en '.$store->name.' - El León Verde' )

@section('styles')
@endsection

@section('content')

<section class="product" style="padding:30px 0 120px">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="news_detail_left">
                                <div class="block-title" style="margin-bottom:7px">
                                    <p>Tienda en {{ $store->name }}</p>
                                    <h2 style="color:#404a3d; font-weight:600">Venta de semillas, abonos orgánicos, sustratos y accesorios para huerto y jardín</h2>
                                    <div class="leaf">
                                        <img src="/assets/images/resources/leaf.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="news_detail_image_box">
                                            <img src="{{ $store->image }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                            <p>
                                            Tienda online especializada en la compra-venta de productos para el huerto y el jardín, aquí encontraras los mejores productos para tener un súper huerto o jardín. </p>
                                            <p>Las mejoras marcas de accesorios, abonos orgánicos, semillas, medicamentos orgánicos, sustratos, libros, accesorios y todo lo que necesitaras para tener éxito en tu huerto o jardín al mejor precio.
                                        </p>
                                    </div>
                                    <div class="col-xl-12">
                                            
                                        <p>Compra con seguridad y confianza en todo <b>{{ $store->name }}</b>. </p>
                                            <p>
                                                En el lado derecho, encontrarás los productos distribuidos por categorías.
                                            </p>
                                            <p>¡Te deseo el mejor de lo éxitos!</p>
                                    </div>
                                </div>
                                <hr>
                                
                            </div>
                            
                            <div>
                                <div class="block-title" style="margin-bottom:7px">
                                    <br>
                                    <p>Productos Top en {{ $store->name }}</p>
                                    <h2 style="color:#404a3d; font-weight:600">Los más vendidos de nuestra tienda</h2>
                                </div>
                                <div class="news_detail_content">
                                    <p>
                                        Selección de los productos más vendidos en nuestra tienda online para huertos y jardines:
                                    </p>
                                    <div class="row">
                                        @foreach($tops as $top)
                                            <div class="col-md-2 col-6">
                                                <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="{{$top->amazon_frame}}" ></iframe> 
                                            </div>
                                        @endforeach
                                </div>
                                </div>
                            </div>


                            @foreach( $categories as $category)
                                <div>
                                    <div class="block-title" style="margin-bottom:7px">
                                        <br>
                                        <p>Tienda en {{ $store->name }}</p>
                                        <h2 style="color:#404a3d; font-weight:600"><a style="color:#404a3d" href="{{ route('category.store',[$store->slug,$category->slug]) }}">{{ $category->category }}</a></h2>
                                    </div>
                                    <div class="news_detail_content">
                                        <p>
                                            {{ $category->description }}
                                        </p>

                                        <?php
                                            $product_categories = App\Models\Product::where('category_id',$category->id)->where('store',$store->name)->OrderBy('id', 'desc')->take(6)->get();
                                        ?>
                                        <div class="row">
                                             @foreach($product_categories as $product_category)
                                            <div class="col-md-2 col-6">
                                                <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="{{$product_category->amazon_frame}}" ></iframe> 
                                            </div>
                                        @endforeach
                                        </div>
                                       
                                        
                                        <div style="text-align: right">
                                            <a href="{{ route('category.store',[$store->slug,$category->slug]) }}" class="thm-btn comment-one__btn">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="sidebar-wrapper style2">
                    <!--Start single sidebar-->
                    {{-- <div class="single-sidebar wow fadeInUp animated" data-wow-delay="0.1s"
                        data-wow-duration="1200ms">
                        <div class="sidebar-search-box">
                            <form class="search-form" action="#">
                                <input placeholder="Search" type="text">
                                <button type="submit"><i class="icon-magnifying-glass"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div> --}}
                    <!--End single sidebar-->
                    <!--Start sidebar categories Box-->
                    {{-- <div class="price_sidebar wow fadeInUp animated" data-wow-delay="0.3s"
                        data-wow-duration="1200ms">
                        <h3>Price</h3>
                        <div class="price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <input type="text" readonly class="min">
                                <span>-</span>
                                <input type="text" readonly class="max">
                                <input type="submit" value="Filter">
                            </div>
                        </div>
                    </div> --}}
                    <!--End sidebar categories Box-->
                    <!--Start sidebar categories Box-->
                    <div class="single-sidebar" data-wow-delay="0.3s"
                        data-wow-duration="1200ms">
                        <div class="categories-box">
                            <div class="title">
                                <h3 style="font-family:Amatic SC, cursive;font-size:26px; font-weight:900; color: #343a40">Categorías todo {{ $store->name }}</h3>
                            </div>
                            <ul class="categories clearfix">
                                @foreach($categories as $category)
                                <li style="line-height:35px"><a href="{{ route('category.store',[$store->slug,$category->slug]) }}">{{ $category->category }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--End sidebar categories Box-->
                    <!--Start single sidebar-->
                    {{-- <div class="single-sidebar " data-wow-delay="0.5s"
                        data-wow-duration="1200ms">
                        <div class="top_sellers">
                            <div class="title">
                                <h3 style="font-family:Amatic SC, cursive; font-size:26px; font-weight:900; color: #343a40">Productos Destacados</h3>
                            </div>
                            <ul class="top-products">
                                <li>
                                    <div class="product_item">
                                        <div class="img-box">
                                            <img src="assets/images/shop/top-product-1.jpg" alt="Awesome Image">
                                            <div class="overlay-content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="title-box">
                                            <h4><a href="#">Wheat Bag</a></h4>
                                            <div class="value">$9.99</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product_item">
                                        <div class="img-box">
                                            <img src="assets/images/shop/top-product-2.jpg" alt="Awesome Image">
                                            <div class="overlay-content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="title-box ">
                                            <h4><a href="#">Pinepale</a></h4>
                                            <div class="value">$9.99</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!--End single sidebar-->

                </div>
            </div>
            <!--End Sidebar Wrapper-->
        </div>
    </div>
</section>

    @endsection


@section('scripts')
@endsection