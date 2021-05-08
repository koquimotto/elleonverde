@extends('layouts.app')
@section('title','Blog verde - El León Verde')

@section('styles')
@endsection

@section('content')
<div class="blog_two" style="padding: 40px 0 120px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="block-title">
                            <p>El León Verde</p>
                            <h3>Blog Verde</h3>
                            <div class="leaf">
                                <img src="{{ asset('assets/images/resources/leaf.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4" style="text-align: right;">
                            <a target="_blank" href="https://www.youtube.com/channel/UC1JNK9V8zQCa7pz93jU7mNA">
                                <img src="{{ asset('assets/images/resources/btn-subscribete-el-leon-verde.png') }}" alt="" style="width: 95%; margin-bottom: 20px">
                            </a>
                        </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            
                                @foreach ($posts as $post)
                                <?php
                                    $images = $post->files()->where('type','image')->get();
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
                                                <h3><a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a></h3>
                                                
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

@endsection


@section('scripts')

        {{-- <script>
            var selectMenu = document.getElementById("m-blog");
            selectMenu.className += "current";
        </script> --}}

@endsection