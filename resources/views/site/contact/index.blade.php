@extends('layouts.site')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endpush
@push('pagina')
    Contato
@endpush

@section('content')
<header>
    <h1>
        Fale Conosco
    </h1>
</header>
<div class="row w-100 center p-1">
    <div class="row col-dt-6 col-mb-10" id="internal-div">
        <form action="{{route('contact.form')}}" method="POST" class="row center direction-column p-1 col-dt-6 col-mb-10" id="form-contact">
            @csrf
            @if(session('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}" required>
            @error('email')
                <div>{{ $message }}</div>
            @enderror
    
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" autocomplete="off" value="{{old('name')}}" required>
            @error('text')
                <div>{{ $message }}</div>
            @enderror
            
            <label for="input-content">Mensagem</label>
            <textarea name="content" id="input-content" cols="30" rows="10">{{old('content')}}</textarea>
            @error('content')
                <div>{{ $message }}</div>
            @enderror
    
            <button type="submit">Enviar</button>
        </form>
        <div id="texto-contato" class="col-dt-4 col-mb-10">
            <p class="p-1">
                Aenean lorem sem, ornare eu semper in, gravida vitae ex. Etiam cursus gravida libero, eu malesuada purus
                pellentesque vel. Vestibulum blandit rutrum ex non dictum. Aliquam non nibh eu quam facilisis pellentesque vitae
                a tellus. 
            </p>
        </div>
    </div>
</div>
@endsection