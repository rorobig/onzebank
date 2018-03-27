  @extends('layout.layout')
  @section('content')
   <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>us</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/view?zoom=17&center=53.2413%2C6.5326&key=AIzaSyDk4j3uphGz1Im74KDStPQ4ps7CWZiA-No"></iframe>
        </div>

        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact gegevens</h3>
          <p>
            Zernikeplein 7
            <br>Groningen, 9747 AS
            <br>
          </p>
          <p>
            <abbr title="Phone">T</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">onze@bank.nl
            </a>
          </p>
          <p>
            <abbr title="Hours">T</abbr>: Maandag - Vrijdag: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

    
      <!-- /.row -->

    </div>
    <!-- /.container -->
       @endsection