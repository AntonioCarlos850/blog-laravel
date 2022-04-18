@extends('layouts.panel')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/panel-index.css')}}">
@endpush
@push('pagina')
    Home
@endpush

@section('content')
    <div class="row w-100 p-2" id="conteudo">
        <h1>Painel</h1>
        <div class="row col-10 p-1 space-between itens">
            <div class="col-10 row align-center space-between">
                <h2 id="posts">
                    <a href="{{route('post.index')}}">Posts</a>
                </h2>
                <a href="{{route('post.create')}}" class="new"><i class="fa-solid fa-plus"></i>Novo Post</a>
            </div>
            @foreach ($posts as $post)
                <div class="row w-100 fit-content col-3 space-between p-1 item">
                    <h3>{{$post->title}}</h3>
                    <div class="row fit-content">
                        <a href="{{route('post.edit',['id'=>$post->id])}}" class="edit botao">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="{{route('post.delete',['id'=>$post->id])}}" class="delete botao">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row col-10 column p-1 itens">
            <div class="col-10 row align-center space-between">
                <h2 id="categorias">
                    <a href="{{route('category.index')}}">Categorias</a>
                </h2>
                <a href="{{route('category.create')}}" class="new"><i class="fa-solid fa-plus"></i>Nova Categoria</a>
            </div>
            @foreach ($categorias as $categoria)
                <div class="row w-100 fit-content col-3 space-between p-1 item">
                    <h3>{{$categoria->name}}</h3>
                    <div class="row fit-content">
                        <a href="{{route('category.edit',['id'=>$categoria->id])}}" class="edit botao">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="{{route('category.delete',['id'=>$categoria->id])}}" class="delete botao">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row col-10 column p-1 itens">
            <div class="col-10 row align-center space-between">
                <h2 id="tags">
                    <a href="{{route('tag.index')}}">Tags</a>
                </h2>
                <a href="{{route('tag.create')}}" class="new"><i class="fa-solid fa-plus"></i>Nova Tag</a>
            </div>
            @foreach ($tags as $tag)
                <div class="row w-100 fit-content col-3 space-between p-1 item">
                    <h3>{{$tag->name}}</h3>
                    <div class="row fit-content">
                        <a href="{{route('tag.edit',['id'=>$tag->id])}}" class="edit botao">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="{{route('tag.delete',['id'=>$tag->id])}}" class="delete botao">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection