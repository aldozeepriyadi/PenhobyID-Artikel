<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/oneui.min.css') }}">
  </head>
  <body>
    <div id="page-container">
      <main id="main-container">
        <div class="bg-primary-dark">
          <div class="row g-0 bg-primary-dark-op">
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
              <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <a class="link-fx fw-semibold fs-2 text-white" href="{{ url('/') }}">PENGHOBBY.ID</a>
                  <p class="text-white-75 me-xl-8 mt-2">
                    Buat Akun
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
              <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx fw-semibold fs-3 text-dark" href="{{ url('/') }}">PENGHOBBY.ID</a>
              </div>
              <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <div class="text-center mb-5">
                    <p class="mb-3">
                      <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                    </p>
                    <h1 class="fw-bold mb-2">Buat Akun</h1>
                    <p class="fw-medium text-muted">Get your access today in one easy step</p>
                  </div>
                  <div class="row g-0 justify-content-center">
                    <div class="col-sm-8 col-xl-4">
                      <form class="js-validation-signup" action="{{ route('register.post') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                          <input type="text" class="form-control form-control-lg form-control-alt py-3" id="signup-username" name="username" placeholder="Username" value="{{ old('username') }}" required>
                        </div>
                        <div class="mb-4">
                          <input type="email" class="form-control form-control-lg form-control-alt py-3" id="signup-email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-4">
                          <input type="text" class="form-control form-control-lg form-control-alt py-3" id="signup-phone" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt py-3" id="signup-password" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt py-3" id="signup-password-confirm" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        <div class="mb-4">
                          <input type="checkbox" id="show-password" class="mt-2"> Show Password
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-lg btn-alt-success">
                            <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Sign Up
                          </button>
                        </div>
                        @if($errors->any())
                          <div class="alert alert-danger mt-3">
                            <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                          </div>
                        @endif
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                <p class="fw-medium text-black-50 py-2 mb-0">
                  <strong>OneUI 5.9</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline py-2 mb-0">
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/op_auth_signup.min.js') }}"></script>
    <script>
      document.getElementById('show-password').addEventListener('click', function () {
          var passwordField = document.getElementById('signup-password');
          var passwordFieldConfirm = document.getElementById('signup-password-confirm');
          
          if (this.checked) {
              passwordField.type = 'text';
              passwordFieldConfirm.type = 'text';
          } else {
              passwordField.type = 'password';
              passwordFieldConfirm.type = 'password';
          }
      });
    </script>
  </body>
</html>
