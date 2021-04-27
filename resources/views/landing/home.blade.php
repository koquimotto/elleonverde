@extends('layouts.app')

@section('title','Principal - El León Verde')

@section('styles')
@endsection

@section('content')
    <div class="blog_two" style="padding: 40px 0 20px;">
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
                    <div class="col-xl-8">
                        <div class="row">
                            
                            @foreach ($posts as $post)
                                <?php
                                    $images=$post->files()->where('type','image')->get();
                                    $count = App\Models\Comment::where('post_id', $post->id)->count();
                                ?>
                            <div class="col-lg-6">
                                <div class="blog_one_single mb-30">
                                        <div class="blog_one_image">
                                            <div class="blog_image">
                                                <a href="{{ route('blog.show',$post->slug) }}">
                                                    <img src="{{ asset('uploads/images/medium/'.$images->first()->file_name) }}" alt="El León Verde">
                                                </a>
                                                <div class="blog_one_date_box">
                                                    <p>{{ $post->created_at->format('M d, Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="blog-one__content" style="padding:0px 2px 5px;">
                                                <ul class="list-unstyled blog-one__meta">
                                                    <li><a href="{{ route('blog.show',$post->slug) }}"><i class="far fa-user-circle"></i> {{ $post->user->name }}</a></li>
                                                    <li><a href="{{ route('blog.show',$post->slug) }}">
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
                                                <h3 style="text-align:left"><a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a></h3>
                                                
                                                <div class="read_more_btn">
                                                    <a href="{{ route('blog.show',$post->slug) }}"><i class="fa fa-angle-right"></i>Ver más</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>                            
                            @endforeach    
                        </div>
                        </div>
                    
                    {{-- Google Adsense --}}
                    @include('partials.left_gadsense')
                    {{-- End Google Adsense --}}


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
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/vHy4u3cuSSs/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=vHy4u3cuSSs" class="popup-video"><span
                                            class="fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single-->
                    <div class="gallery_one_single">
                        <div class="gallery_one_image">
                            <img src="http://img.youtube.com/vi/XWsc9tRXXzY/mqdefault.jpg">
                            <div class="gallery_one_hover_box">
                                <div class="gallery_one_icon">
                                    <a href="https://www.youtube.com/watch?v=XWsc9tRXXzY" class="popup-video"><span
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