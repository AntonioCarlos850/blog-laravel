@extends('layouts.site')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@push('pagina')
    Login
@endpush

@section('content')
    <div class="row w-100 center" id="principal">
        <form action="{{route('authenticate')}}" method="post" class="col-4 box-shadow p-2">
            @csrf
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required><br>
            <label for="password">Senha</label><br>
            <input type="password" name="password" id="password" required><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
@endsection