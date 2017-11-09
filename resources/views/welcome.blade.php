<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Villain Mail</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src="https://use.fontawesome.com/b0562d97f8.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #eae3ea;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                color: #b4dbc0;
                font-size: 84px;
                padding-top: 170px;
            }

            .subtitle {
                font-size: 48px;
                font-weight: bold;
                color: #b56357;
            }

            .links > a {
                color: #b56357;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .mainpage {
                background-color: #eae3ea;
                border: #a7b3a5;
                height: 500px;
                width: 900px;
                border-style: solid;
                border-width: 15px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="container mainpage">
                    <div class="container mainpage2">
                        <div class="title m-b-md">
                            <strong>Villain Mail</strong>
                        </div>
                        <div class="subtitle">
                            Keep Out!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
