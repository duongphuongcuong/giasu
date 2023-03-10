<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Auth</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Admins/assets/img/ravenclaw.jpg')}}" rel="icon" type="image/x-icon">
  <link href="{{asset('Admins/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Admins/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Admins/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Admins/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Admins/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('Admins/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('Admins/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('Admins/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Admins/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a dissable class="logo d-flex align-items-center w-auto">
                  <img src="{{asset('Admins/assets/img/ravenclaw.jpg')}}" alt="">
                  <span class="d-none d-lg-block">Gia s?? ABC</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">????ng nh???p</h5>
                    <p class="text-center small">Nh???p email v?? m???t kh???u c???a b???n ????? ????ng nh???p</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="{{route('checkLoginAdmin')}}" method="post">
                    @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Vui l??ng nh???p email c???a b???n.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">M???t kh???u</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Vui l??ng nh???p m???t kh???u c???a b???n!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ghi nh??? t??i.</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">????ng nh???p</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Qu??n m???t kh???u? <a href="pages-register.html">L???y l???i m???t kh???u</a></p>
                    </div>
                  </form>

                </div>
              </div>
              <?php if(!empty($mess = session()->get('error_loginAmin'))){ ?>
              <div class="credits" style="color: red;">
                {{$mess}}
              </div>
              <?php 
                session()->put('error_loginAmin', null);
              } ?>
              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('Admins/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('Admins/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Admins/assets/vendor/chart.js')}}/chart.umd.js')}}"></script>
  <script src="{{asset('Admins/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('Admins/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('Admins/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('Admins/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('Admins/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Admins/assets/js/main.js')}}"></script>

</body>

</html>