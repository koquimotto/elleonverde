@extends('layouts.app')

@section('title', 'Todos mis artículos - El León Verde' )

@section('styles')
@endsection

@section('content')

    <section class="service_detail" style="padding:20px 0 30px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-style"><b>Todos mis artículos</b></h2>
                            </div>
                            
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
                                                <h3><a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a></h3>
                                                <ul class="list-unstyled blog-one__meta">
                                                    <li>
                                                        <a href="#">
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
                                                    <li><a href="{{ route('auth.edit_publish',$post->slug) }}"><i class="far fa-edit"></i> Editar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                @endforeach
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        
                        @include('partials.side_menu_auth')

                    </div>
                </div>
            </div>
        </section>

@endsection


@section('scripts')
@endsection