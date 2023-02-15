<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <title>Tutor</title> -->
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('Tutor/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Tutor/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('Tutor/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Tutor/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('Tutor/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('Tutor/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('Tutor/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('Tutor/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('Tutor/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('Tutor/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Tutor/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('Tutor/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Tutor/css/style_1.css')}}">
     @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css">
   
  </head>
  <body>
    <!--  -->
	  @include('client.components.header')
    
    @include('client.components.slider_sidebar_left_right')

    @include('client.components.left_menu_slidebar')
  
   

    @include('client.components.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control" id="appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control" id="appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Get a Quote" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>


  <script src="{{asset('Tutor/js/jquery.min.js')}}"></script>
  <script src="{{asset('Tutor/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('Tutor/js/popper.min.js')}}"></script>
  <script src="{{asset('Tutor/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('Tutor/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('Tutor/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('Tutor/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('Tutor/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('Tutor/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('Tutor/js/aos.js')}}"></script>
  <script src="{{asset('Tutor/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('Tutor/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('Tutor/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('Tutor/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('Tutor/js/google-map.js')}}"></script>
  <script src="{{asset('Tutor/js/main.js')}}"></script>
   @yield('js')
  </body>
</html>