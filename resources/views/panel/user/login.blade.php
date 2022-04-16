@extends('layouts.site')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@push('pagina')
    Login
@endpush

@section('content')
    <form action="{{route('authenticate')}}" method="post">
        @csrf
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        <button type="submit">Enviar</button>
    </form>
@endsection