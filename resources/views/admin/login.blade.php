<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('webcss/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('webcss/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('webcss/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('webcss/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="{{asset('assets/img/logo1.jpg')}}" width="290" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST" action="{{ url('/admin/login') }}" aria-label="{{ __('Login') }}">
                @csrf
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div class ="has-error">:message</div>')) !!}
                    @endif
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" type="text" placeholder="Email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{asset('webcss/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('webcss/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
 
</html>