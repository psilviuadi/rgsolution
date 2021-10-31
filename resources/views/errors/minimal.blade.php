<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>
    <body class="antialiased">
        <div class="relative d-flex flex-column items-top justify-content-center"
             style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;">
            <div class="d-flex justify-content-center max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                    <h1 class="text-center px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                        @yield('code')
                    </h1>

                    <h3 class="text-center ml-4 text-lg text-gray-500 uppercase tracking-wider">
                        @yield('message')
                    </h3>
                </div>
            </div>
        </div>
    </body>
</html>
