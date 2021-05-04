@extends('layouts.app')

@section('title','Principal - El León Verde')

@section('styles')

@endsection

@section('content')

<div id="app">
    <formcomment-component />
</div>

@endsection


@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endsection