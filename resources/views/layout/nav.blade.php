<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Onze bank</title>

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Custom styles for this template -->
<link href="{{ asset('css/mb.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <img style="margin-right: 10px;" src="{{ asset('img/bankicon.png') }}" height="50" width="50" alt="">
        <a class="navbar-brand" href="{{ url('/') }}">Onze Bank</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <!--   <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Online banking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
