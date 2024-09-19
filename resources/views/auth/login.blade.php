<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('assets/css/oneui.min.css') }}">
</head>

<body>
  <div id="page-container">
    <!-- Main Container -->
    <main id="main-container">
      <!-- Page Content -->
      <div class="bg-image" style="background-image: url('{{ asset('assets/media/photos/photo28@2x.jpg') }}');">
        <div class="row g-0 bg-primary-dark-op">
          <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
            <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
              <div class="w-100">
                <a class="link-fx fw-semibold fs-2 text-white" href="{{ url('/') }}">PENGHOBBY.ID</a>
                <p class="text-white-75 me-xl-8 mt-2">Selamat Datang</p>
              </div>
            </div>
            <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
              <p class="fw-medium text-white-50 mb-0"><strong>PENGHOBBY.ID</strong> &copy; <span data-toggle="year-copy"></span></p>
            </div>
          </div>
          <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
            <div class="p-3 w-100 d-lg-none text-center">
              <a class="link-fx fw-semibold fs-3 text-dark" href="{{ url('/') }}">PENGHOBBY.ID</a>
            </div>
            <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
              <div class="w-100">
                <!-- Header -->
                <div class="text-center mb-5">
                  <p class="mb-3"><i class="fa fa-2x fa-circle-notch text-primary-light"></i></p>
                  <h1 class="fw-bold mb-2">Login</h1>
                  <p class="fw-medium text-muted">Silakan login atau <a href="{{ route('register') }}">daftar</a> akun baru.</p>
                </div>
                <!-- Sign In Form -->
                <div class="row g-0 justify-content-center">
                  <div class="col-sm-8 col-xl-4">
                    <form id="login-form" action="{{ route('login.post') }}" method="POST">
                      @csrf
                      <div class="mb-4">
                        <input type="text" class="form-control form-control-lg form-control-alt py-3" id="login-username" name="username" placeholder="Username" value="{{ old('username') }}" required>
                      </div>
                      <div class="mb-4">
                        <input type="password" class="form-control form-control-lg form-control-alt py-3" id="login-password" name="password" placeholder="Password" required>
                      </div>
                      <div class="mb-4">
                        <input type="checkbox" id="show-password" class="mt-2"> Show Password
                      </div>
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                          <a class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1" href="{{ route('password.request') }}">Lupa Password?</a>
                        </div>
                        <div>
                          <button type="submit" class="btn btn-lg btn-alt-primary"><i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Login</button>
                        </div>
                      </div>
                      @if($errors->any())
                      <div class="alert alert-danger">
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
                <!-- END Sign In Form -->
              </div>
            </div>
            <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
              <p class="fw-medium text-black-50 py-2 mb-0"><strong>PENGHOBBY.ID</strong> &copy; <span data-toggle="year-copy"></span></p>
              <ul class="list list-inline py-2 mb-0">
                <li class="list-inline-item"><a class="text-muted fw-medium" href="javascript:void(0)">Legal</a></li>
                <li class="list-inline-item"><a class="text-muted fw-medium" href="javascript:void(0)">Contact</a></li>
                <li class="list-inline-item"><a class="text-muted fw-medium" href="javascript:void(0)">Terms</a></li>
              </ul>
            </div>

            <!-- Modal OTP -->
            <div id="otp-modal" style="display: none; background-color: rgba(0, 0, 0, 0.8); position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 1000; align-items: center; justify-content: center;">
              <div style="background-color: #fff; padding: 30px; border-radius: 10px; width: 400px; box-shadow: 0 8px 16px rgba(0,0,0,0.3);">
                <h3 class="text-center mb-4">Verifikasi Kode OTP</h3>
                <input type="text" id="otp-code" class="form-control mb-3" placeholder="Masukkan kode OTP" style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
                <div class="text-center mb-3">
                  <button id="verify-otp" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px; border-radius: 5px;">Verifikasi OTP</button>
                </div>
                <p id="resend-timer" class="text-center mb-3" style="font-size: 14px; color: #777;"></p>
                <div class="text-center mb-3">
                  <button id="resend-otp" class="btn btn-secondary" disabled style="padding: 10px 20px; font-size: 16px; border-radius: 5px;">Kirim Ulang OTP</button>
                </div>
                <div class="text-center">
                  <button id="send-whatsapp-otp" class="btn btn-success" disabled style="padding: 10px 20px; font-size: 16px; border-radius: 5px; display: none;">Kirim OTP via WhatsApp</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
  </div>

  <!-- Scripts -->
  <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
  <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>
    $('#login-form').on('submit', function (e) {
      e.preventDefault(); // Mencegah form dari pengiriman langsung
      var form = $(this);

      $.ajax({
        url: form.attr('action'),
        method: form.attr('method'),
        data: form.serialize(),
        success: function (response) {
          if (response.status === 'otp_required') {
            // Tampilkan modal OTP setelah login berhasil
            $('#otp-modal').css('display', 'flex');
            startTimer(60); // Mulai timer untuk pengiriman ulang OTP
          } else {
            Swal.fire('Error', 'Login gagal, periksa username dan password', 'error');
          }
        }
      });
    });

    var timer;
    var resendCount = 0; // Counter untuk hitung ulang OTP
    var resendBtn = document.getElementById('resend-otp');
    var whatsappBtn = document.getElementById('send-whatsapp-otp');
    var timerDisplay = document.getElementById('resend-timer');

    // Fungsi untuk memulai timer
    function startTimer(duration) {
      var timeLeft = duration;
      resendBtn.disabled = true;
      whatsappBtn.disabled = true;
      timer = setInterval(function () {
        timerDisplay.textContent = 'Tunggu ' + timeLeft + ' detik sebelum kirim ulang OTP';
        timeLeft--;
        
        if (timeLeft <= 0) {
          clearInterval(timer);
          timerDisplay.textContent = '';
          resendBtn.disabled = false;  // Aktifkan tombol Kirim Ulang OTP setelah timer selesai
          if (resendCount >= 2) {  // Jika pengiriman ulang sudah lebih dari 2 kali
            whatsappBtn.style.display = 'block';  // Tampilkan tombol WhatsApp
            whatsappBtn.disabled = false;  // Aktifkan tombol WhatsApp
          }
        }
      }, 1000);
    }

    // Logika untuk mengirim ulang OTP via email
    resendBtn.addEventListener('click', function () {
      resendCount++;  // Increment counter untuk kirim ulang
      $.ajax({
        url: '{{ route("resend.otp") }}',
        method: 'POST',
        data: {
          _token: '{{ csrf_token() }}'
        },
        success: function (response) {
          Swal.fire('Success', 'OTP berhasil dikirim ulang!', 'success');
          startTimer(60);  // Restart timer setelah pengiriman ulang
          if (resendCount >= 2) {
            whatsappBtn.style.display = 'block';  // Tampilkan tombol WhatsApp setelah pengiriman ulang lebih dari dua kali
            whatsappBtn.disabled = false;
          }
        }
      });
    });

    // Logika untuk mengirim OTP via WhatsApp
    whatsappBtn.addEventListener('click', function () {
      $.ajax({
        url: '{{ route("send.otp.whatsapp") }}',
        method: 'POST',
        data: {
          _token: '{{ csrf_token() }}'
        },
        success: function (response) {
          Swal.fire('Success', 'OTP berhasil dikirim via WhatsApp!', 'success');
          startTimer(60);  // Restart timer
        }
      });
    });

    // Menampilkan atau menyembunyikan password
    document.getElementById('show-password').addEventListener('click', function () {
      var passwordField = document.getElementById('login-password');

      if (this.checked) {
        passwordField.type = 'text';  // Tampilkan password
      } else {
        passwordField.type = 'password';  // Sembunyikan password
      }
    });
  </script>
</body>

</html>
