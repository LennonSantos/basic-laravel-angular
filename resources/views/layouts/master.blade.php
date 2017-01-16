<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Dinheiro | @yield('page')</title>
        @yield('styles_head')
        @yield('scripts_head')        
    </head>
    <body>         
        <header id="header">
            <h1>@yield('title')</h1>
            <nav>
                <ul>
                    <li><a href="#">link</a></li>
                    <li><a href="#">link</a></li>
                    <li><a href="#">link</a></li>
                </ul>
            </nav>
            @section('header')
            @show
        </header>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            <p>Lennon Santos &copy; 2017</p>
        </footer>
        @yield('styles_footer')
        @yield('scripts_footer')
    </body>
</html>