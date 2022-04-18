@extends('layouts.panel')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/tag.css')}}">
@endpush
@push('pagina')
    Tag {{$tag->name}}
@endpush

@section('content')
    <div class="row w-100 p-2" id="conteudo">
        <h1>{{$tag->name}}</h1>
        @if (session('success'))
            <div class="col-10">
                <span id="message">{{session('success')}}</span>
            </div>
        @endif
        <div class="col-10 p-1 row center">
            <form class="col-dt-7 col-mb-9 row direction-column center p-1" action="{{route('tag.form', ['id'=>$tag->id] )}}" method="POST">
                @csrf
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" value="{{$tag->name}}" required>
                <button type="submit">Editar</button>
            </form>
        </div>
    </div>
@endsection