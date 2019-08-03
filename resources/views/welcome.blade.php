<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel Auth Mail
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <hr>
                <ol>
                  <li> Configure DB on .env </li>
                  <li> Configure MAIL on .env (with Mailtrap.io) </li>
                  <li> Create Auth Laravel (#php artisan make:auth) </li>
                  <li> Add field token (string) and status (tinyInteger)->default(0) on migration user </li>
                  <li> php artisan migrate </li>
                  <li> Add fillable token and status on User model </li>
                  <li> RegisterController => add field token (str_random(20)) </li>
                  <li> Try to Register </li>
                  <li> Add function register on controller </li>
                  <li> Add Illuminate\Http\Request on controller </li>
                  <li> Setup send email </li>
                  <li> php artisan make:mail userRegistered </li>
                  <li> Set up userRegistered </li>
                  <li> load mail in ResgiterController </li>
                  <li> add routes verify </li>
                  <li> add function verify </li>
                  <li> add message error on login menu </li>
                  <li> verify status user before login </li>
                </ol>
            </div>
        </div>
    </body>
</html>
