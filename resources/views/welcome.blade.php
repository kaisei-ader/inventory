<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>inventory</title>
        <link rel="stylesheet" href="/css/app.css/">
    </head>
    <body  style="margin: 0;">
    <header>
        <div class="header_wrap">
            <div class="header_left"><span>Neumorphism <span class="color">Inventory</span>
             Management</span></div>
            <div class="header_right">
             @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">LOGIN</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" >SIGN UP</a>
                        @endif
                    @endif
             @endif 
            </div>
        </div>  
    </header>
    <main>
        <div class="main_img">
            <img src="/img/inventory.png">
        </div>
        <div class="main_title">
            <h1>Hello!!</h1>
            <h2>Inventory <br>
            <span class="color">Management</span> Systems</h2>
        </div>
    </main>
    <script src="/js/app.js"></script>
    </body>
</html>
