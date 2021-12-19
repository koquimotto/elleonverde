@extends('layouts.app')

@section('title', 'Todos mis videos de Youtube - El León Verde' )

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@endsection

@section('styles')
@endsection

@section('content')

    <section class="service_detail" style="padding:20px 0 30px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="title-style"><b>Todos mis videos de Youtube</b></h2>
                                        <input id="userId" type="hidden" value="{{ Auth::user()->id }}">
                                    </div>
                                    <div class="col-md-4" style="text-align:right">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-plus"></i> Nuevo Video
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <div class="row">
                                        @foreach($videos as $video)
                                        <div class="col-md-4" style="padding-bottom: 20px">
                                            <div class="gallery_one_image">
                                                <img style="max-width:100%" src="http://img.youtube.com/vi/{{$video->file_name}}/mqdefault.jpg">
                                                <div class="gallery_one_hover_box">
                                                    <div class="gallery_one_icon">
                                                        <a href="https://www.youtube.com/watch?v={{$video->file_name}}" class="popup-video"><span
                                                                class="fa fa-play"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" style="text-align:center">
                                                    <a href="#"><b>Editar</b></a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" style="color:red"><b>Eliminar</b></a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        
                        @include('partials.side_menu_auth')

                    </div>
                </div>
            </div>
            {{-- Modal --}}
            @include('authYoutube.modal')
            {{-- End Modal --}}
        </section>

@endsection


@section('scripts')
@endsection