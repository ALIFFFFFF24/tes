<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>{{ $title }} | Karyaku</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">

    <!-- theme meta -->
    <meta name="theme-name" content="logbook" />

    <!-- plugins -->
    <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2"
        style="font-display: optional;">
    <link rel="stylesheet" href="{{ asset('client/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">

    <link rel="stylesheet" href="{{ asset('client/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('client/plugins/slick/slick.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ url('client/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('client/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    @include('client.partials.navbar')
    @yield('main-content')
    @include('client.partials.footer')

    <!-- JS Plugins -->
    <script src="{{ asset('client/plugins/jQuery/jquery.min.js') }}"></script>
    <script src="{{ asset('client/plugins/bootstrap/bootstrap.min.js') }}" async></script>
    <script src="{{ asset('client/plugins/slick/slick.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('client/js/script.js') }}"></script>
</body>

</html>
