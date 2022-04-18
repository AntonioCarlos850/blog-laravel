@extends('layouts.panel')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/post-panel.css')}}">
@endpush
@push('pagina')
    Post {{$post->title}}
@endpush
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            menubar: 'file edit view insert format tools table tc help',
            height: 600,
        });
    </script>
@endpush
@section('content')
    <div class="row w-100 p-2" id="conteudo">
        <h1>{{$post->title}}</h1>
        @if (session('success'))
            <div class="col-10">
                <span id="message">{{session('success')}}</span>
            </div>
        @endif
        <div class="col-10 p-1 row center">
            <form class="col-dt-7 col-mb-9 row direction-column center p-1" enctype="multipart/form-data" action="{{route('post.form', ['id'=>$post->id] )}}" method="POST">
                @csrf
                <label for="image">Imagem</label>
                <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}" style="width: 200px">
                <input type="file" name="image" id="image">
                <label for="name">Nome</label>
                <input type="text" id="title" name="title" value="{{$post->title}}" required>
                <label for="name">Slug</label>
                <input type="text" id="slug" name="slug" value="{{$post->slug}}" required>
                <label for="name">Conteudo</label>
                <textarea id="content" name="content" cols="30" rows="10" required>
                    {{$post->content}}
                </textarea>
                <button type="submit">Editar</button>
            </form>
        </div>
    </div>
@endsection