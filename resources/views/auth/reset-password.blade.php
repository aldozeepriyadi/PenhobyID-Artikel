<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Reset Password</title>

    <meta name="description" content="Reset your password">
    <meta name="author" content="Your App Name">
    <meta name="robots" content="index, follow">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">
  </head>

  <body>
    <div id="page-container">
      <main id="main-container">
        <div class="bg-primary">
          <div class="row g-0 bg-primary-dark-op">
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
              <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <a class="link-fx fw-semibold fs-2 text-white" href="#">
                    Your App Name
                  </a>
                  <p class="text-white-75 me-xl-8 mt-2">
                    Please enter your new password below to reset your account password.
                  </p>
                </div>
              </div>
              <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                <p class="fw-medium text-white-50 mb-0">
                  <strong>Your App Name</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline mb-0 py-2">
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="#">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="#">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="#">Terms</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
              <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx fw-semibold fs-3 text-dark" href="#">
                  Your App Name
                </a>
              </div>
              <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <div class="text-center mb-5">
                    <p class="mb-3">
                      <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                    </p>
                    <h1 class="fw-bold mb-2">
                      Reset Password
                    </h1>
                    <p class="fw-medium text-muted">
                      Enter your new password below.
                    </p>
                  </div>

                  <div class="row g-0 justify-content-center">
                    <div class="col-sm-8 col-xl-4">
                      <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

                        <div class="mb-4">
                          <label for="password" class="form-label">{{ __('Password') }}</label>
                          <input type="password" class="form-control form-control-lg form-control-alt py-3" id="password" name="password" required autocomplete="new-password">
                          @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>

                        <div class="mb-4">
                          <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                          <input type="password" class="form-control form-control-lg form-control-alt py-3" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="text-center">
                          <button type="submit" class="btn btn-lg btn-alt-primary">
                            {{ __('Reset Password') }}
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                <p class="fw-medium text-black-50 py-2 mb-0">
                  <strong>Your App Name</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline py-2 mb-0">
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="#">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="#">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="#">Terms</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- OneUI JS -->
    <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
  </body>
</html>
