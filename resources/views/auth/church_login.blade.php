<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="churchgram">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/churchgram/img/churchgram-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/churchgram">
    <meta property="og:title" content="churchgram">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/churchgram/img/churchgram-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/churchgram/img/churchgram-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Welcome | Login from Here</title>

    <!-- Vendor css -->
    <link href="{{ asset('churchcss/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('churchcss/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">

    <!-- churchgram CSS -->
    <link rel="stylesheet" href="{{ asset('churchcss/css/churchgram.css')}}">

  </head>
  <body>

    <div class="d-md-flex flex-row-reverse">
      <div class="signin-right">

        <div class="signin-box">
          <h2 class="signin-title-primary">Welcome back!</h2>
          <h3 class="signin-title-secondary">Sign in to continue.</h3>
           <form role="form" method="POST" action="{{ route('church.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="input-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required autofocus>
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                                  <div class="input-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input  id="password" type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required>
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                  <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            <a href="{{ route('admin.password.request') }}" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button type="submit" class="btn btn-primary btn-block btn-signin">Log In</button>
                                         <p class="mg-b-0">Wanna get back to Main website? <a href="page-signup2.html">Click Me</a></p>
                                    </div>
                                </div>
                            </form>

        </div>

      </div><!-- signin-right -->
      <div class="signin-left">
        <div class="signin-box">
          <h2 class="churchgram-logo"><a href="index.html">Churchgram<span>.</span></a></h2>

          <p>We are excited to launch our new company and product churchgram. After being featured in too many magazines to mention and having created an online stir, we know that ThemePixels is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>

          <p>Browse our site and see for yourself why you need churchgram.</p>

          <p><a href="" class="btn btn-outline-secondary pd-x-25">Learn More</a></p>

          <p class="tx-12">&copy; Copyright 2018. All Rights Reserved.</p>
        </div>
      </div><!-- signin-left -->
    </div><!-- d-flex -->

    <script src="{{ asset('churchcss/lib/jquery/js/jquery.js')}}"></script>
    <script src="{{ asset('churchcss/lib/popper.js/js/popper.js')}}"></script>
    <script src="{{ asset('churchcss/lib/bootstrap/js/bootstrap.js')}}"></script>

    <script src="{{ asset('churchcss/js/churchgram.js')}}"></script>

  </body>
</html>
