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
                        <a href="{{ route('register') }}" >REGISTER</a>
                        @endif
                    @endif
             @endif 
            </div>
        </div>  
    </header>
    <script src="/js/app.js"></script>
    </body>
</html>
