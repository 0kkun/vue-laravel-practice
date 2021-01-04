<!doctype html>
<html lang="ja">
    <head>
        <title>vue-laravel-tutrial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet"> --}}
        {{-- Vue.jsのCDN --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script> --}}

        {{-- Fontawesome --}}
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <style type="text/css">
            /*初期表示時にテンプレートが一瞬表示されてしまうのを防ぐ*/
            [v-cloak] {
                display: none;
            }
        </style>
    </head>

    <body>
        

        <main>
            @yield('content')
        </main>

        <script src="{{ mix('js/app.js') }}"></script>

        <!-- JQuery -->
        {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
        <!-- Bootstrap tooltips -->
        {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script> --}}
        <!-- Bootstrap core JavaScript -->
        {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
        <!-- MDB core JavaScript -->
        {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script> --}}
    </body>
</html>