<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics - @yield('title')</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
    <div class="">
        <header>
            @include('layouts.header')
        </header>
    
        <div class="content">
            @yield('content')
        </div>
    
        <footer>
            @include('layouts.footer')
        </footer>
    </div>
    
</body>
</html>