  @extends('layout.layout')
  @section('content')
   <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>us</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
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
            <abbr title="Phone">P</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">onze@bank.nl
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Maandag - Vrijdag: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Stuur ons een bericht!</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Naam:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nummer:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Bericht:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Stuur bericht</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
       @endsection