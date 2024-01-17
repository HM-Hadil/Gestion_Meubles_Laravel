<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Styles -->

    </head>
<body>

<header>

        <p>hadilhammami670@gmail.com</p>
        <p>site pour la gestion des meubles avec laravel</p>
    </header>

    <nav>
    <a href="{{ route('home')}}">Home</a>
        <a href="{{ route('about')}}">About</a>
        <a href="{{ route('contact')}}">Contact</a>
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    Gérer Meubles
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ route('meubles.create')}}">Ajouter Meubles</a>
    <a class="dropdown-item" href="{{ route('meubles.index')}}">Liste Meubles</a>
  </div>
</div>
    </nav>

@yield('content')

    <footer>
        <p>&copy; 2024 Hammami hadil. All rights reserved.</p>
    </footer>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
