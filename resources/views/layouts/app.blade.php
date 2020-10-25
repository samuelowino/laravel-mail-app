@extends('layouts.footer')
@extends('layouts.navigation')

<!DOCTYPE html>
<html>
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>@yield('title')</title>

        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .container-margin-top {
        margin-top: 126px;
      }
    </style>

    </head>
    <body class="d-flex flex-column h-100">
        <header>
            @section('main-nav')
        </header>

        <main role="main" class="flex-shrink-0 container-margin-top">
            @section('content')
        </main>

        <footer class="footer mt-auto py-3">
            @section('footer')
        </footer>
    </body>
</html>