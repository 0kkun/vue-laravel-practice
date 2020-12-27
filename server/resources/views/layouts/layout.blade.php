<!doctype html>
<html lang="ja">
    <head>
        <title>vue-laravel-tutrial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
        
        @include('shared.header')

        <main>
            @yield('content')
        </main>

        @include('shared.footer')
    </body>

</html>