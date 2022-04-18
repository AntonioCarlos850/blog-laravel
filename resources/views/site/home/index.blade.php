@extends('layouts.site')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endpush
@push('pagina')
    Home
@endpush

@section('content')
<header>
    <h1>
        Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit. In vitae nulla
    </h1>
</header>
<div class="row w-100 center direction-column cards card-1">
    <h2>
        Principais Posts
    </h2>
    <div class="row w-100 space-around">
        @foreach ($main_posts as $post)
            <article class=" col-dt-25 col-mb-5">
                <a href="{{route( 'post',['slug'=>$post->slug] )}}" class="row direction-column center space-around m-1 card-post box-shadow">
                    <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}">
                    <h3>{{$post->title}}</h3>
                </a>
            </article>
        @endforeach
    </div>
</div>
<div class="row w-100 center direction-column cards card-2">
    <h2>
        Destaques
    </h2>
    <div class="row w-100 space-around">
        @foreach ($featured_posts as $post)
            <article class=" col-dt-25 col-mb-5">
                <a href="{{route( 'post',['slug'=>$post->slug] )}}" class="row direction-column center space-around m-1 card-post box-shadow">
                    <img src="{{asset($post->image)}}" alt="{{$post->title}}">
                    <h3>{{$post->title}}</h3>
                </a>
            </article>
        @endforeach
    </div>
</div>
@endsection