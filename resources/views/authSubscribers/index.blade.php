@extends('layouts.app')

@section('title', 'Todos mis Suscriptores - El León Verde' )

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
                                        <h2 class="title-style"><b>Todos mis Suscriptores</b></h2>
                                        <input id="userId" type="hidden" value="{{ Auth::user()->id }}">
                                    </div>
                                    <div class="col-md-4" style="text-align:right">
                                        <!-- Button trigger modal -->
                                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-plus"></i> Nuevo Video
                                        </button> --}}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <div class="row">
                                        <?php $count = 1; ?>
                                        <table class="table table-hover">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Estado</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $subscribers as $subscriber )
                                                    <tr>
                                                        <td>{{ $count++ }}</td>
                                                        <td></td>
                                                        <td>{{ $subscriber->email }}</td>
                                                        <td>{{ $subscriber->state }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                          </table>
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
            
            {{-- End Modal --}}
        </section>

@endsection


@section('scripts')
@endsection