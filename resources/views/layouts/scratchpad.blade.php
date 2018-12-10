<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Scratchpad</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <!-- Image and text -->
                    <nav class="navbar navbar-light bg-primary">
                        <a class="navbar-brand text-warning" href="#">
                            <i class="fa fa-jsfiddle fa-2x" aria-hidden="true"></i>
                            JS Scratchpad
                        </a>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}"></script>

    -->
    <script src="{{ asset('js/scratchpad.js') }}"></script>
</body>
</html>
