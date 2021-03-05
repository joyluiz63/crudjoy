<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-sacale-1.0 ">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <title>@yield('title') </title>

    <link href="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


    <!-- Scripts DataTables -->
    <script src="{{ URL::asset('assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/datatables/datatables-demo.js') }}"></script>
</head>

<body>

    {{-- Menu dashboard do user breeze 
        <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
            <div class="absolute top-0 right-0 mt-4 mr-4">
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                            >
                                Log out
                            </a>
        
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>
        
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div> --}}
    {{-- Meu menu --}}

    <div class="container mt-2 mb-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-gray-400">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('products.index') }}">Produtos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('products.create') }}">Novo
                                Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    @if (Route::has('login'))
                        <div class="space-x-4">
                            <div class="text-white">{{ Auth::user()->name }}</div>
                            @auth
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="font-medium text-white hover:text-indigo-200 focus:outline-none focus:underline transition ease-in-out duration-150">
                                    Log out
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
</body>

</html>
