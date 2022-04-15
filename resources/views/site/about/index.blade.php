@extends('layouts.site')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush
@push('pagina')
    Sobre
@endpush

@section('content')
    <header>
        <h1>
            Sobre Nós
        </h1>
    </header>
    <div class="row w-100 center direction-column p-1 py-2">
        <h2>LOREM IPSUM DOLOR</h2>
        <p>
            Aenean lorem sem, ornare eu semper in, gravida vitae ex. Etiam cursus gravida libero, eu malesuada purus
            pellentesque vel. Vestibulum blandit rutrum ex non dictum. Aliquam non nibh eu quam facilisis pellentesque vitae
            a tellus. Donec sodales at felis sed volutpat. Praesent vel imperdiet nisi. Duis nec purus placerat, mattis urna
            gravida, varius felis. Aenean sed porta odio. Suspendisse sapien elit, imperdiet id vestibulum sed, cursus nec
            nisi. Duis laoreet efficitur purus sit amet imperdiet. Interdum et malesuada fames ac ante ipsum primis in
            faucibus. Nullam in nisl tortor. Ut varius lectus ligula, eget ullamcorper est posuere vel. Pellentesque rutrum
            ligula ut ex consequat tempus. Pellentesque ut magna at ex sagittis ullamcorper. Nullam sed ante at enim
            ultricies bibendum eget eu nisi.
        </p>
        <a href="{{route('contact')}}" class="botao">
            <button>ENTRE EM CONTATO</button>
        </a>
    </div>
@endsection
