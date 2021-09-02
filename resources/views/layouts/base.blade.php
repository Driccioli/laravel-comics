<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
    <div class="container-fluid">
        <header>
            @include('layouts.header')
        </header>
    
        <div class="container content">
            @yield('content')
        </div>
    
        <footer>
            @include('layouts.footer')
        </footer>
    </div>
    
</body>
</html>