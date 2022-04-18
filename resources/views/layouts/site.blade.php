<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae nulla ac metus rutrum mollis non a risus. Aenean mi tortor, porta vel gravida ut.">
    <meta name="application-name" content="Blog">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    @stack('styles')
    @stack('scripts')

    <link rel="preload" onload="this.rel='stylesheet'" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blog | @stack('pagina')</title>
</head>
<body>
    <nav class="row w-100">
        <ul class="row space-between w-100">
            <li>
                <a href="{{route('index')}}"><img width="150px" src="{{asset('image/logo-crow.svg')}}" alt="logo escrito agência crow"></a>
            </li>
            <li>
                <a href="#">Categorias</a>
            </li>
            <li>
                <a href="{{route('contact')}}">Contato</a>
            </li>
            <li>
                <a href="{{route('about')}}">Sobre</a>
            </li>
        </ul>
    </nav>
    <div id ='content'>
        @yield('content')
    </div>
    <footer>
        <ul>
            <li>
                <a href="{{route('about')}}">Sobre</a>
            </li>
            <li>
                <a href="{{route('contact')}}">Contato</a>
            </li>
            <li>
                Redes Sociais:
                <div class="row space-between px-1">
                    <a href="https://www.instagram.com/agenciacrow/"><img src="{{asset('image/instagram-logo.png')}}" width="30px" alt="logo instagram"></a>
                    <a href="https://www.facebook.com/agenciacrow/"><img src="{{asset('image/facebook-icon.png')}}" width="30px" alt="logo facebook"></a>
                </div>
            </li>
        </ul>
    </footer>
</body>
</html>