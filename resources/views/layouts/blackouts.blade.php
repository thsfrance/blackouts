<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BlackOuts</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/foundation.css" rel="stylesheet">
    <link href="/css/foundation-icons.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    
    <div class="top-bar">
        <div class="">
        <div class="top-bar-left">
            <div class="title"><h3>BlackOuts</h3><span>Library Manager</span></div>
        </div>
        <div class="top-bar-right">
            @if(Auth::guest())
            <form role="form" method="POST" action="{{ url('/login') }}" novalidate>
                {{ csrf_field() }}
                <ul class="menu">
                    <li>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" autofocus placeholder="E-mail" required>
                        <div class='form-error is-visible'>
                        @if ($errors->has('email'))
                        {{ $errors->first('email') }}
                        @endif
                        </div>
                    </li>
                    <li>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>
                        <div class='form-error is-visible'>
                            @if ($errors->has('password'))
                            {{ $errors->first('password') }}
                            @endif
                        </div>
                    </li>
                    <li><button type="submit" class="button secondary"><i class="fi-arrow-right"></i> Entrar</button></li>
                </ul>
            </form>
            @else
                <ul class="dropdown menu" data-dropdown-menu>
                    <li>
                        <a href="#">{{Auth::user()->name}}</a>
                        <ul class="menu">
                            <li><a href="{{url('/logout')}}">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            @endif
        </div>
        </div>
    </div>
    <div class="container">
    @if(!@Auth::guest())
            <ul class="dropdown menu top-bar" data-dropdown-menu>
                <li>
                  <a href="#">Livros</a>
                  <ul class="menu">
                    <li><a href="">Consultar</a></li>
                    <li><a href="{{action('LivroController@novo')}}">Cadastrar</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#">Usuários</a>
                    <ul class="menu">
                        <li><a href="{{url('/register')}}">Cadastrar</a></li>
                    </ul>
                </li>
            </ul>
    @endif
    </div>
    <div class='row'>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="/js/vendor/angular.js"></script>
    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/vendor/what-input.js"></script>
    <script src="/js/vendor/foundation.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
