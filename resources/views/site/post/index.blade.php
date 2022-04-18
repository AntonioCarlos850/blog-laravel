@extends('layouts.site')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
@endpush
@push('pagina')
    {{$post->title}}
@endpush
@section('content')
<div class="row direction-column box-shadow m-1 p-1" id="conteudo">
    <h1>{{$post->title}}</h1>
    <img src="{{$post->image}}" alt="{{$post->title}}" id="capa">
    <div>
        {!! $post->content !!}
    </div>
</div>
@endsection