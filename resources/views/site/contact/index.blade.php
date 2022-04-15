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
<div class="row w-100 center p-2">
    <div class="row" id="internal-div">
        <form action="{{route('contact.form')}}" method="POST" class="row center direction-column p-1 col-6" id="form-contact">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
    
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" autocomplete="off" required>
            
            <label for="input-content">Mensagem</label>
            <textarea name="content" id="input-content" cols="30" rows="10"></textarea>
    
            <button type="submit">Enviar</button>
        </form>
        <div id="texto-contato" class="col-4">
            <p>
                Aenean lorem sem, ornare eu semper in, gravida vitae ex. Etiam cursus gravida libero, eu malesuada purus
                pellentesque vel. Vestibulum blandit rutrum ex non dictum. Aliquam non nibh eu quam facilisis pellentesque vitae
                a tellus. 
            </p>
        </div>
    </div>
</div>
@endsection