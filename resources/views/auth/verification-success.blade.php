<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Verification Success</title>
    <link rel="stylesheet" href="{{ asset('assets/css/oneui.min.css') }}">
  </head>
  <body>
    <div id="page-container">
      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-primary">
          <div class="row g-0 bg-primary-dark-op">
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
              <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <a class="link-fx fw-semibold fs-2 text-white" href="{{ url('/') }}">PENGHOBBY.ID</a>
                  <p class="text-white-75 me-xl-8 mt-2">
                    Email Anda telah berhasil diverifikasi.
                  </p>
                </div>
              </div>
              <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                <p class="fw-medium text-white-50 mb-0">
                  <strong>PENGHOBBY.ID</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
              </div>
            </div>
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
              <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100 text-center">
                  <p class="mb-3">
                    <i class="fa fa-2x fa-check-circle text-success-light"></i>
                  </p>
                  <h1 class="fw-bold mb-2">Email Berhasil Diverifikasi!</h1>
                  <p class="fw-medium text-muted">
                    Terima kasih telah memverifikasi email Anda. Anda sekarang dapat menggunakan akun Anda.
                  </p>
                  <a href="{{ route('login') }}" class="btn btn-lg btn-alt-primary mt-3">
                    <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Login Sekarang
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
  </body>
</html>
