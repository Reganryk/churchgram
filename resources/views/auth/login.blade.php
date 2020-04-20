<!DOCTYPE html>
<html lang="en">
  <head>
              <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@churchgram">
    <meta name="twitter:creator" content="@churchgram">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Churchgram">
    <meta name="twitter:description" content="The Best Church Social Network.">
    <meta name="twitter:image" content="http://churchgram.org/">

    <!-- Facebook -->
    <meta property="og:url" content="http://churchgram.org/">
    <meta property="og:title" content="Churchgram">
    <meta property="og:description" content="The Best Christian Social Network.">

    <meta property="og:image" content="http://churchgram.org/">
    <meta property="og:image:secure_url" content="http://churchgram.org/">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="The Best Christian Social Network.">
    <meta name="author" content="Churchgram">
    <title>Churchgram | The Best Christian Platform of all times</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{ asset('frontend/css/login/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/login/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/login/css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/login/css/font-awesome.min.css') }}" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Acme:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/css/login/images/fav.png') }}"/>
  </head>
  <body>


    <!-- Landing Page Contents
    ================================================= -->




 <div id="lp-register">

      <div class="container wrapper">
        <div class="row">
          <div class="col-sm-5">
            <div class="intro-texts">
              <h1 class="text-white">Welcome to Churchgram!</h1><hr>

              <p>Churchgram is a christian based social platform. Connect up with more than 10,000 Churches in the world., download music, listen to preach-monies live<br /> <br />Download the apps Here?</p>
              <ul class="app-btn list-inline slideUp">

        </ul>
            </div>
          </div>
          <div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container">

              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li ><a href="{{ route('register') }}" >Register</a></li>
                  <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>

              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Log into your account</h3>
                  <p class="text-muted">Start Sharing</p>

                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Enter Your Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                        </div><!-- form-group -->
                        <div class="form-group mg-b-50">
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="alert-danger">{{ $message }}</p>
                                    </span>
                                @enderror
                        </div><!-- form-group -->
                         @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                               <button class="btn btn-primary btn-block btn-signin">Sign In</button>


                               <div class="signup-separator"><span>{{ __('or signup using') }}</span></div>

          <button class="btn-churchgram btn-facebook btn-block">{{ __('Login Using Facebook') }}</button>
          <button class="btn-churchgram btn-gmail btn-block">{{ __('Login Using Gmail') }}</button>


                               <p class="mg-t-40 mg-b-0">{{ __('Do not have an account?') }} <a href="{{ route('register')}}">{{ __('Sign Up') }}</a></p>
                           </form>
            </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">

            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <section>



    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="{{ asset('frontend/css/login/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('frontend/css/login/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('frontend/css/login/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/css/login/js/jquery.incremental-counter.js') }}"></script>
    <script src="{{ asset('frontend/css/login/js/script.js') }}"></script>

  </body>
</html>
