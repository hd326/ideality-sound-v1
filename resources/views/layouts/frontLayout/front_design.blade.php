<!DOCTYPE html>
<html lang="">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.name') }}">
    <!-- FACEBOOK TAGS -->
    {{-- <meta property="og:url" content="@yield('facebook.url')"/> --}}
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('facebook.title')" />
    <meta property="og:description" content="@yield('facebook.description')" />
    <meta property="og:image" content="@yield('facebook.image')" />
    <meta property="article:author" content="{{ config('app.name') }}" />
    <meta property="og:locale" content="en_us" />
    <!-- TWITTER TAGS -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ '@' . 'idealitysound' }}" />
    <meta name="twitter:creator" content="{{ '@' . 'idealitysound' }}" />
    <meta name="twitter:title" content="@yield('twitter.title')" />
    <meta name="twitter:description" content="@yield('twitter.description')" />
    <meta name="twitter:image" content="@yield('twitter.image')" />
    <link
        href="https://fonts.googleapis.com/css?family=Lato|Oswald|Bowlby+One|Kumar+One|Gravitas+One|Limelight|Lilita+One|Passion+One|Alfa+Slab+One|Bigshot+One|Merriweather|Montserrat|Josefin+Sans|Arvo|Raleway|Catamaran|PT+Sans|Open+Sans|Roboto+Slab|Ubuntu|Roboto:900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/e032011ee4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7HFPMDG7M1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-7HFPMDG7M1');
    </script>
</head>

<body>

    <div id="top-level-sidebar">
        @include('layouts.frontLayout.front_nav_sidebar')
    </div>
    <div id="top-level-content">
        {{-- @if(Session::has('flash'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{!! session('flash') !!} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> 
        </div>
        @endif --}}
        @include('layouts.frontLayout.front_header')
        @yield('content')
        @include('layouts.frontLayout.front_footer')
    </div>
    @if(Session::has('flash'))
    <div class="alert alert-success alert-flash">{{ session('flash') }}</div>
    @endif
    <div class="flash-message"></div>
    <script>
        $(document).ready(function () {
            $('#icon').click(function(){
                setTimeout(function(){
                    $('#mobile-nav').toggleClass('active-nav');
                    $('body').toggleClass('active-body');
                    $('#strip nav ul li').toggle();
                }, 1);
            });
            $('.side-categories i').click(function(){
                setTimeout(function(){
                    $('#mobile-nav').toggleClass('active-nav');
                    $('body').toggleClass('active-body');
                    $('#strip nav ul li').toggle();
                }, 1);
            });

            //$('#icon').click(function () {
            //    $('#mobile-nav').toggleClass('active-nav');
            //    $('#top-level-content').toggleClass('active-body');
            //    $('#strip nav ul li').toggle();
            //});
            //$('.side-categories i').click(function () {
            //    $('#mobile-nav').toggleClass('active-nav');
            //    $('#top-level-content').toggleClass('active-body');
            //    $('#strip nav ul li').toggle();
            //});
        });
        $(document).on('click', function (e) {
            if ($('#mobile-nav').hasClass('active-nav') && $('body').hasClass('active-body')) {
                if ($(e.target).parents().is('#mobile-nav') === false) {
                        $('#mobile-nav').removeClass('active-nav');
                        $('body').removeClass('active-body');
                        $('#strip nav ul li').toggle();
                    }
                }
        });

    </script>
</body>

</html>
