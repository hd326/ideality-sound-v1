<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.name') }}">
    <!-- FACEBOOK TAGS -->
        {{-- <meta property="og:url" content="@yield('facebook.url')"/> --}}
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="@yield('facebook.title')"/>
    <meta property="og:description" content="@yield('facebook.description')"/>
    <meta property="og:image" content="@yield('facebook.image')"/>
    <meta property="article:author" content="{{ config('app.name') }}"/>
    <meta property="og:locale" content="en_us"/>
    <!-- TWITTER TAGS -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{ '@' . 'ideality-sound' }}"/>
    <meta name="twitter:creator" content="{{ '@' . 'ideality-sound' }}"/>
    <meta name="twitter:title" content="@yield('twitter.title')"/>
    <meta name="twitter:description" content="@yield('twitter.description')"/>
    <meta name="twitter:image" content="@yield('twitter.image')"/>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5df52fa945cf480012906f96&product=inline-share-buttons" async="async"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Oswald|Bowlby+One|Kumar+One|Gravitas+One|Limelight|Lilita+One|Passion+One|Alfa+Slab+One|Bigshot+One|Merriweather|Montserrat|Josefin+Sans|Arvo|Raleway|Catamaran|PT+Sans|Open+Sans|Roboto+Slab|Ubuntu|Roboto:900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e032011ee4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>

<body>
    @include('layouts.frontLayout.front_header')

    @yield('content')

    @include('layouts.frontLayout.front_footer')
</body>
</html>