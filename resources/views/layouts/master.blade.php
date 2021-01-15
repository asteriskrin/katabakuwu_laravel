<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Katabakuwu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Katabakuwu</title>
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: #c9dbe9;
                overflow: hidden;
            }

            #clouds {
                bottom: 0;
                left: 0;
                padding-top: 50px;
                position: fixed;
                right: 0;
                top: 0;
                z-index: -1;
            }

            .cloud {
                position: relative;
            }

            .x1 {
                -webkit-animation: animateCloud 35s linear infinite;
                -moz-animation: animateCloud 35s linear infinite;
                animation: animateCloud 35s linear infinite;
                -webkit-transform: scale(0.65);
                -moz-transform: scale(0.65);
                transform: scale(0.65);
            }

            .x2 {
                -webkit-animation: animateCloud 20s linear infinite;
                -moz-animation: animateCloud 20s linear infinite;
                animation: animateCloud 20s linear infinite;
                -webkit-transform: scale(0.3);
                -moz-transform: scale(0.3);
                transform: scale(0.3);
            }

            .x3 {
                -webkit-animation: animateCloud 30s linear infinite;
                -moz-animation: animateCloud 30s linear infinite;
                animation: animateCloud 30s linear infinite;
                -webkit-transform: scale(0.5);
                -moz-transform: scale(0.5);
                transform: scale(0.5);
            }

            .x4 {
                -webkit-animation: animateCloud 18s linear infinite;
                -moz-animation: animateCloud 18s linear infinite;
                animation: animateCloud 18s linear infinite;
                -webkit-transform: scale(0.4);
                -moz-transform: scale(0.4);
                transform: scale(0.4);
            }

            .x5 {
                -webkit-animation: animateCloud 25s linear infinite;
                -moz-animation: animateCloud 25s linear infinite;
                animation: animateCloud 25s linear infinite;
                -webkit-transform: scale(0.55);
                -moz-transform: scale(0.55);
                transform: scale(0.55);
            }

            @-webkit-keyframes animateCloud {
                0% {
                    margin-left: -1000px;
                }
                100% {
                    margin-left: 100%;
                }
            }

            @-moz-keyframes animateCloud {
                0% {
                    margin-left: -1000px;
                }
                100% {
                    margin-left: 100%;
                }
            }

            @keyframes animateCloud {
                0% {
                    margin-left: -1000px;
                }
                100% {
                    margin-left: 100%;
                }
            }
        </style>
        @stack('hscript')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Katabakuwu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('/')) active @endif" aria-current="page" href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">How to Play</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('scoreboard')) active @endif" href="{{ route('scoreboard') }}">Public Scoreboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                    &copy; Katabakuwu
                    </span>
                </div>
            </div>
        </nav>
        <div id="clouds">
            <!-- Time for multiple clouds to dance around -->
            <div class="x1">
                <img src="{{ asset('storage/img/cloud.png') }}" class="cloud" height="300px">
            </div>
            <div class="x2">
                <img src="{{ asset('storage/img/cloud.png') }}" class="cloud" height="300px">
            </div>
            <div class="x3">
                <img src="{{ asset('storage/img/cloud.png') }}" class="cloud" height="300px">
            </div>
            <div class="x4">
                <img src="{{ asset('storage/img/cloud.png') }}" class="cloud" height="300px">
            </div>
            <div class="x5">
                <img src="{{ asset('storage/img/cloud.png') }}" class="cloud" height="300px">
            </div>
        </div>
        @yield('main')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
