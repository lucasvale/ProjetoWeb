<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <title>SGP</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <![endif]-->
    <!-- Scripts -->
    <script>
        window.CodeDelivery = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    Home Site
                </a>

                @if(Auth::user())

                <!-- Branding Image -->
                    @if(Auth::user()->role = "client")
                        <a class="navbar-brand" href="{{ route('customer.order.index') }}">
                            Meus Pedidos
                        </a>
                 @elseif(Auth::user()->role == "admin")
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            SGP
                        </a>

                    <a class="navbar-brand" href="{{ route('admin.categories.index') }}">
                        Categorias
                    </a>

                    <a class="navbar-brand" href="{{ route('admin.products.index') }}">
                        Produtos
                    </a>

                    <a class="navbar-brand" href="{{ route('admin.clients.index') }}">
                        Clientes
                    </a>

                    <a class="navbar-brand" href="{{ route('admin.orders.index') }}">
                        Pedidos
                    </a>

                    <a class="navbar-brand" href="{{ route('admin.cupoms.index') }}">
                        Cupons
                    </a>
                @endif
                @endif

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                                <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%;">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                                <li>
                                    <a href="{{ url('/profile') }}">
                                        Profile
                                    </a>


                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('post-script')
</body>
</html>
