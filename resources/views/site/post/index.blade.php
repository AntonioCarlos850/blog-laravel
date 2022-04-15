@extends('layouts.site')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
@endpush
@push('pagina')
    Post {{$post->name}}
@endpush
@section('content')
    Slug: {{$post->content}}
@endsection