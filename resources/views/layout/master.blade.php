<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/blog/">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layout.nav')

    <div class="container">
        @include('layout.flash_messages')
    </div>
<main role="main" class="container" id="app">
    <div class="row">
        <example-component></example-component>
    </div>
    <div class="row">

    @yield('content')

    @section('sidebar')
    @include('layout.sidebar')
    @show

    </div><!-- /.row -->
</main><!-- /.container -->

@include('layout.footer')

<script src="/js/app.js"></script>
</body>
</html>
