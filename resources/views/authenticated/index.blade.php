@extends('layouts.app')

@section('title', 'Todos mis artículos - El León Verde' )

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
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-style"><b>Todos mis artículos</b></h2>
                                <br>
                                <input id="userId" type="hidden" value="{{ Auth::user()->id }}">
                                <listpostsauth-component />
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
@endsection