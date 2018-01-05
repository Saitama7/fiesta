<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/app2.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="/css/main.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

</head>
<body>
    <header>
        <!-- Хедер -->
        <nav class="header">
            <nav class="navbar navbar-expand-lg py-0 nav bg-header">
                <div class="float-left">
                    @foreach($apps as $app)
                        <a class="navbar-brand py-0 float-left col-2 active" href="/"><img src="/uploads/logo/{{ $app->logo_path }}" alt="" class="w-100 py-2"><span class="sr-only">(current)</span></a>
                    @endforeach

                    <form class="form-inline mt-3">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

                <div class="float-right ">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        {{ csrf_field() }}
                        <button class="btn btn-light mt-2" type="submit">Выйти</button>
                    </form>
                </div>
            </nav>

        </div>

    </header>
    <div class="body height">
        @yield('content-admin')
    </div>

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>


    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="js/mask.js"></script>
    <script type="text/javascript">
        jQuery(function($){
            $("#phone").mask("+999 (999) 999-999");
        });
    </script>
</body>
</html>
