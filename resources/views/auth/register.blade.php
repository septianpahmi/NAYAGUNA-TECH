
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/img/favicon.png" rel="icon">
  <link href="admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="admin/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="admin/img/logo-1.png" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="{{ route('register') }}" method="POST" class="row g-3 needs-validation">
                    @csrf
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                         @error('name')
                            <span class="invalid-feedback" role="alert">
                              {{ $message }}
                                </span>
                          @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                       {{ $message }}
                                    </span>
                                @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}<
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">{{ __('Confirm Password') }}</label>
                      <input input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/vendor/chart.js/chart.umd.js"></script>
  <script src="admin/vendor/echarts/echarts.min.js"></script>
  <script src="admin/vendor/quill/quill.min.js"></script>
  <script src="admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin/js/main.js"></script>

</body>

</html>