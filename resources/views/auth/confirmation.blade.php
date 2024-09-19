<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Confirm Registration</title>
    <link rel="stylesheet" href="{{ asset('assets/css/oneui.min.css') }}">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('Confirm Your Registration') }}</div>
            <div class="card-body">
              <p>{{ __('Please confirm that you want to create an account with the following details:') }}</p>
              <ul>
                <li><strong>Username:</strong> {{ session('registration_data')['username'] }}</li>
                <li><strong>Email:</strong> {{ session('registration_data')['email'] }}</li>
                <li><strong>Phone:</strong> {{ session('registration_data')['phone'] }}</li>
                <li><strong>Password:</strong> {{ session('registration_data')['password'] }}</li>
                
              </ul>
              <form method="POST" action="{{ route('registration.complete') }}">
                @csrf
                <button type="submit" class="btn btn-primary">{{ __('Confirm and Register') }}</button>
                <a href="{{ route('register') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
