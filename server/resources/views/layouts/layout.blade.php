<!doctype html>
<html lang="ja">
    <head>
        <title>vue-laravel-tutrial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        
        @include('shared.header')

        <main>
            @yield('content')
        </main>

        @include('shared.footer')

        <script src="{{ mix('js/app.js') }}"></script>
    </body>

</html>