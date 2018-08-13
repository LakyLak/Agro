<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agro - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ URL::asset('../vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('../vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('../css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form id="registerform" method="post" action="{{ url('/register') }}">{{ csrf_field() }}
            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required">
                <label for="email">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="new_pwd" name="new_pwd" class="form-control" placeholder="Password" required="required">
                    <label for="new_pwd">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirm_pwd" name="confirm_pwd" class="form-control" placeholder="Password" required="required">
                    <label for="confirm_pwd">Confirm Password</label>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="{{ url('/login') }}">Login Page</a>
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
