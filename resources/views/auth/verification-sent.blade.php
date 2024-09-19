<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Email Verification Sent</title>
    <link rel="stylesheet" href="{{ asset('assets/css/oneui.min.css') }}">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('Email Verification Sent') }}</div>
            <div class="card-body">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <p>{{ __('A verification email has been sent to your email address. Please check your inbox and click on the verification link.') }}</p>
              <p>{{ __('If you did not receive the email, you can request another verification email.') }}</p>
              <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Request another verification email') }}</button>.
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
