@extends('layouts.app')

@section('title', 'Editar artículo - El León Verde' )

@section('styles')
@endsection

@section('content')

    <section class="service_detail">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2><b>Editar artículo</b></h2>
                            </div>
                            <div class="col-lg-12">
                                <form action="{{ route('auth.update_publish') }}" method="POST" >
                                    <div class="row">
                                        @csrf
                                        <div class="col-lg-12">
                                            <input type="hidden" name="id_txt" value="{{ $post->id }}">
                                            <input type="text" name="title_txt" class="form-control" placeholder="Título del artículo" value="{{ $post->title }}">
                                            <br>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="" id="" class="form-control">
                                                <option value="">- - Ninguna categoría - -</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="file" value="">
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <textarea class="form-control" name="content_txt" id="summary-ckeditor" cols="30" rows="10">{!! $post->content !!}</textarea>
                                        </div>
                                        <div class="col-lg-12" style="text-align: right">
                                            <br>
                                            <a class="thm-btn" style="background: #f5f0e9; color:#404a3d" href="{{ route('auth.list_publish') }}">Cancelar</a>
                                            <button class="thm-btn" type="submit">Actualizar artículo</button>
                                        </div>
                                    </div>
                            </form>
                            </div>                            
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
    <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
    CKEDITOR.config.language = 'es';
</script>
@endsection