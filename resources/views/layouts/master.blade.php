<!DOCTYPE html>
<html lang="ukr">
    <head>
        <meta charset="UTF-8">
        <title> @yield('title')</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
        
        <script src="https://kit.fontawesome.com/61bbe4fd12.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">

    </head>
    <body>
        @include('partials.header')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>