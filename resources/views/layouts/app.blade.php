<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

        body{
            background-color:#1e1e2f;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5em;
        }
        .bg-gray {
            background-color: #27293d;
        }

        .bg-blue{
            background-color: #419ef9;
        }

        .bg-green{
            background-color: #00bf9a;
        }

        .bg-purple{
            background-color: #e14eca;
        }

        .card {
            color:#fff;
            font-weight: 100;
        }

        .separator{
            height:0.5px;
            width: 100%;
            background-color: #e14eca;
        }

        .question-blank{
            border:1px solid #e14eca;
            border-radius: .4285rem;
        }

        .answer-blank{
            border:1px solid #e14eca;
            background-color: #e14eca;
            border-radius: .4285rem;
            color:#fff;
        }


        .btn-choice{
            background-color: #e14eca;
            color:#fff;
        }

        .title-bar{
            background-image: linear-gradient(to bottom left,#1d8cf8,#3358f4,#1d8cf8);
        }


    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md mb-4">
        <!-- <a class="navbar-brand" href="#">Top navbar</a> -->
        <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                    <a class="nav-link" href="#">ホーム <span class="sr-only">（現在位置）</span></a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Link</a> -->
                    <a class="nav-link" href="#">リンク</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
                    <a class="nav-link disabled" href="#">無効なアイテム</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
                <input class="form-control mr-sm-2" type="text" placeholder="検索" aria-label="Search">
                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
            </form>
        </div>
    </nav>
    <main class="container">
        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/docs/4.4/assets/js/vendor/anchor.min.js"></script>
    <script src="/docs/4.4/assets/js/vendor/clipboard.min.js"></script>
    <script src="/docs/4.4/assets/js/vendor/bs-custom-file-input.min.js"></script>
    <script src="/docs/4.4/assets/js/src/application.js"></script>
    <script src="/docs/4.4/assets/js/src/search.js"></script>
    <script src="/docs/4.4/assets/js/src/ie-emulation-modes-warning.js"></script>
</body>

</html>