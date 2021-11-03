<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel with Vue</title>

    {{-- CSS Link --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <div id="app">
        <div class="container mt-5">
            @yield('content')
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>