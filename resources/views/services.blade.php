  @extends('layout.layout')
  @section('content')


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Services
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
      </ol>

      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="{{ asset('img/service.png')}}" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Eenvoudig bankieren</h4>
            <div class="card-body">
              <p class="card-text">We weten dat tijd voor u van wezenlijk belang is, dus bieden wij u diensten die u graag op uw gemak zult         gebruiken.Geniet van meer manieren om te bankieren.</p>
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Cliëntbeveiliging</h4>
            <div class="card-body">
              <p class="card-text">We nemen krachtige maatregelen om uw financiële transacties te beschermen en de vertrouwelijkheid van uw   gegevenste waarborgen. Wij bieden u de beste bescherming.</p>
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Klachtenbeleid</h4>
            <div class="card-body">
              <p class="card-text">Hoe kunnen we uw ervaring met onze bank verbeteren?</p>
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    
       @endsection