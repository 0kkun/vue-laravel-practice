<!doctype html>
<html lang="ja">
    <head>
        <title>vue-laravel-tutrial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
        {{-- Vue.jsのCDN --}}
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    </head>

    <body>
        @include('shared.header')

        <main>
            <div id="shop-top-web">
                @yield('content')
            </div>
        </main>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>