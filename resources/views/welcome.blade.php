<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!--CSS Bootstrap-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      
        <style>
            
        </style>
    </head>
    <body class="antialiased">
        <div class="container-fluid">
        @if (Route::has('login'))
            <div class="row justify-content-center align-items-center" style="height: 100vh;">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/CoinWise.png') }}" alt="Logo">
                    <div class="mt-4">
                    @auth    
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2           focus:rounded-sm focus:outline-red-500">Dashboard</a>    
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary mr-2">Entrar</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-secondary">Cadastro</a> 
                        @endif
                    @endauth
                    </div>
                </div>
            </div>
            @endif
        </div>
    </body>
</html>
