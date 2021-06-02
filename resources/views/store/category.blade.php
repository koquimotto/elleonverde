@extends('layouts.app')
@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="GLOOBAL TIC INGENIEROS">
@endsection

@section('title', 'Tienda - El León Verde' )

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
                            <div class="block-title" style="margin-bottom:7px">
                                    <p>Tienda en {{$store}}</p>
                                    <h2 style="color:#404a3d; font-weight:600">{{ $categoryDetail->category }}</h2>
                                    <div class="leaf">
                                        <img src="/assets/images/resources/leaf.png" alt="">
                                    </div>
                            </div>
                            <div class="news_detail_content">
                                <p>
                                    {{ $categoryDetail->description }}
                                </p>
                            </div>

                            
                        </div>
                    </div>
                </div>





                <div class="product-items">
                    {{-- <div class="row">
                        <div class="col-xl-12">
                            <div class="showing-result-shorting">
                                <div class="left">
                                    <div class="showing">
                                        <p>Showing 1-9 of 20 Results</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="shorting">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Default Sorting</option>
                                            <option>Default Sorting 1</option>
                                            <option>Default Sorting 2</option>
                                            <option>Default Sorting 3</option>
                                            <option>Default Sorting 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="all_products">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-md-2 col-6">
                                <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="{{$product->amazon_frame}}" ></iframe> 
                            </div>
                                
                            {{-- <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="all_products_single text-center">
                                    <div class="all_product_item_image">
                                        <img src="{{ asset('uploads/images/store/'.$product->image) }}" alt="">
                                        <div class="all_product_hover">
                                            <div class="all_product_icon">
                                                <a href="{{ $product->slug }}"><span class="icon-shopping-cart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 style="font-family:Amatic SC, cursive"><a href="{{ $product->slug }}">{{ $product->title }}</a></h4>
                                    <p>$9.00</p>
                                </div>
                            </div> --}}
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
                                <h3 style="font-family:Amatic SC, cursive;font-size:26px; font-weight:900; color: #343a40">Categorías</h3>
                            </div>
                            <ul class="categories clearfix">
                                @foreach($categories as $category)
                                <li style="line-height:35px"><a href="{{ route('category.store',[$store,$category->slug]) }}">{{ $category->category }}</a></li>
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