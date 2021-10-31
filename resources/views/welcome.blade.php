<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>
    <body class="antialiased">
        <div class="relative d-flex flex-row items-top justify-content-center py-4">
            <div class="col-md-6 border rounded py-3" style="background-color: white;">
                <ul>
                    @foreach($employees as $user)
                        <li class="d-flex flex-row py-2" v-for="user in users">
                            <div class="px-3">
                                @if(str_starts_with($user['avatar'], 'data:image/'))
                                    <img src="{{$user['avatar']}}" width="48" height="48">
                                @else
                                    <img src="img/user.png" width="48" height="48">
                                @endif
                            </div>
                            <div class="w-100">
                                <h5>{{$user['name']}}</h5>
                                <div>{{$user['title']}} at <strong>{{$user['company']}}</strong></div>
                                <div class="user-bio">{{$user['bio']}}</div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
    <footer>
        <script type="text/javascript" src="/js/app.js"></script>
    </footer>
</html>
