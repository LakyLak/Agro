<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agro - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ URL::asset('../vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('../vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('../css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
        <div class="card-body">
          @if(Session::has('flash_error_message'))
              <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>	
                      <strong>{!! session('flash_error_message') !!}</strong>
              </div>
          @endif
          @if(Session::has('flash_success_message'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>	
                      <strong>{!! session('flash_success_message') !!}</strong>
              </div>
          @endif
          <form id="loginform" method="post" action="{{ url('/login') }}">{{ csrf_field() }}
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="email">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                <label for="password">Password</label>
              </div>
            </div>
            <button class="btn-block btn-lg btn-success" type="submit">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="{{ url('/register') }}">Register an Account</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('../vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('../vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset('../vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  </body>

</html>
