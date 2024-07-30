<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Engels Càrcamo, Desarrollador php y laravel">
    <meta name="description" content="Crud User Module with Laravel version 6.20.44">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title') - Laravel</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- file css  --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header class="container-fluid bg-dark fixed-top">
        <!-- navbar -->
        @include('_partials.nav')
    </header>
    <!-- Begin page content -->
    <main class="container">
        <div class="text-center">
            <h1>@yield('head')</h1>
        </div>
        <div class="row">
            {{-- content bar --}}
            <div class="col-lg-7 col-md-12">
                @yield('content')
            </div>
            {{-- sidebar --}}
            <div class="col-lg-5 col-md-12">
                @yield('sidebar')
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">
                <a href="https://engelscarcamo.netlify.app"target="_blank">
                    https://engelscarcamo.netlify.app
                </a>
            </span>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
</body>

</html>