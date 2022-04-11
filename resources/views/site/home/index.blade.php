@extends('layouts.site')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endpush
@section('content')
<header>
    <h1>
        Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit. In vitae nulla
    </h1>
</header>
<div class="row w-100 center direction-column cards">
    <h2>
        Principais Posts
    </h2>
    <div class="row w-100 space-around">
        <div class="row direction-column space-around col-dt-25 col-mb-5 p-2 box-shadow card-post ">
            <img src="{{asset('image/post-capa.jpg')}}" alt="" class="w-100">
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
        <div class="row direction-column space-around col-dt-25 col-mb-5 p-2 box-shadow card-post ">
            <img src="{{asset('image/post-capa.jpg')}}" alt="" class="w-100">
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
        <div class="row direction-column space-around col-dt-25 col-mb-5 p-2 box-shadow card-post ">
            <img src="{{asset('image/post-capa.jpg')}}" alt="" class="w-100">
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
        <div class="row direction-column space-around col-dt-25 col-mb-5 p-2 box-shadow card-post ">
            <img src="{{asset('image/post-capa.jpg')}}" alt="" class="w-100">
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
    </div>
</div>
@endsection