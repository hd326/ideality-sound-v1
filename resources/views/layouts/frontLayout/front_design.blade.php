<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Lato|Oswald|Roboto:900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e032011ee4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>Ideality Sound | Home Page</title>
</head>

<body>
    @include('layouts.frontLayout.front_header')

    @yield('content')
    @include('layouts.frontLayout.front_sidebar')
    @include('layouts.frontLayout.front_footer')
</body>
</html>