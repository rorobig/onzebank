  @extends('layout.layout')
  @section('content')

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://www.digitalistmag.com/files/2016/01/bankcustomer.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://educationcareerarticles.com/wp-content/uploads/2014/02/Bank-Manager1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://fr8wff00-a.akamaihd.net/wp-content/uploads/2014/07/13.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

  <h1 class="my-4">Welcome to Onzebank!</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4 col-sm-5 col-xl-4">
          <div class="card h-100" style="width: 18rem;">
             <img class="card-img-top img-fluid rounded" src="{{ asset('img/lod1.jpg')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Meer uit uw geld halen?</h5>
              <p class="card-text">Door te beleggen, heeft u de kans om uw geld sneller te laten groeien. Zeker op de lange termijn. Zien wat het u kan opleveren? Ontdek het in 3 korte stappen.</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
           </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 col-sm-5 col-xl-4">
           <div class="card h-100" style="width: 18rem;">
             <img class="card-img-top img-fluid rounded" src="{{ asset('img/lod2.png')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Wat kan beleggen opleveren?
</h5>
              <p class="card-text">Door te beleggen, heb je de kans om je geld sneller te laten groeien. Zeker als je de tijd hebt. Wil je zien wat het kan opleveren? Ontdek het in 3 korte stappen.
</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
           </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 col-sm-5 col-xl-4">
           <div class="card h-100" style="width: 18rem;">
             <img class="card-img-top img-fluid rounded" src="{{ asset('img/lod3.png')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Kopen om te verhuren
               </h5>
              <p class="card-text">De drukte op de woningmarkt zal je niet ontgaan zijn. Wat kan je daar nu mee? Als je een beleggingspand overweegt zou je hieraan moeten denken.</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
           </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Extra zakcentje dankzij de Belastingaangifte?</h2>
          <p>Ik zie er toch altijd een beetje tegenop als ik met de aangifte aan de slag moet. Eigenlijk is dat nergens voor nodig. Het wordt namelijk elk jaar weer makkelijker; de Belastingdienst vult steeds meer gegevens al voor ons in.</p>
          
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="{{ asset('img/lod4.jpeg')}}" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          
        </div>
        <div class="col-md-4">
          <!-- <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a> -->
        </div>
      </div>

   @endsection