<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <link rel="stylesheet" href="css/app.css">
        <script href="js/app.js"></script>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <a href="{!! route('user.change-language', ['en']) !!}">English</a>
                <a href="{!! route('user.change-language', ['vi']) !!}">Vietnam</a>
            </nav>
        </div>

        @yield('content')
    </body>
</html>