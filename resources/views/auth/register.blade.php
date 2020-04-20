

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Acme:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/css/login/images/fav.png') }}"/>
  </head>
  <body>

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
                  <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                  <li><a href="{{ route('login')}}">Login</a></li>
                </ul><!--Tabs End-->
              </div>

              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Be cool and join today. Meet millions</p>



           <form method="POST" action="{{ route('register') }}" class="form-inline" id='registration_form'>
                        @csrf
          <div class="row row-xs mg-b-10 ">
            <div class="form-group col-xs-6 " >
                <input id="name" type="text" class="form-control input-group-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}"  autocomplete="name" placeholder="Firstname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>


            <div class="form-group col-xs-6 mg-t-10 mg-sm-t-0"> <input id="name" type="text" class="form-control input-group-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}"  autocomplete="lname" placeholder="Lastname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
          </div><!-- row -->

          <div class="row row-xs mg-b-10">
            <div class="form-group col-xs-6">
                <input id="name" type="text" class="form-control input-group-lg @error('uname') is-invalid @enderror" name="uname" value="{{ old('uname') }}" maxlength="11"  autocomplete="uname" placeholder="Username" autofocus>

                                @error('uname')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror</div>



            <div class="form-group col-xs-6 mg-t-10  mg-sm-t-0">
                <input id="email" type="email" class="form-control input-group-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
          </div><!-- row -->

            <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">Phone Number</label>
                        <input id="firstname" class="form-control input-group-lg input-group-lg @error('uphone') is-invalid @enderror" type="phone" name="uphone" value="{{ old('uphone') }}"  autocomplete="uphone" placeholder="Phone Number"/>
                                @error('uphone')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Sex</label>
                         <select class="form-control input-group-lg @error('sex') is-invalid @enderror" id="year" name="sex" value="{{ old('sex') }}">
                          <option value="sex" disabled selected>Sex</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>

                        </select>
                         @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                      </div>
                    </div>

           <div class="row row-xs mg-b-15">
            <div class="form-group col-xs-6">
             <input id="password" type="password" class="form-control input-group-lg @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror</div>



            <div class="form-group col-xs-6"> <input id="password-confirm" type="password" class="form-control input-group-lg" name="password_confirmation"  autocomplete="new-password" placeholder="Confirm Password"></div>
          </div><!-- row -->
          <hr>

            <div class="row">

                      <div class="form-group col-xs-12">
                        <label for="month" class="sr-only">Date of Birth</label>
                        <input class="form-control @error('dob') is-invalid @enderror"  id="dob" name="dob" value="{{ old('dob') }}" placeholder="Date of Birth" >
                          @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <p class="error">{{ $message }}</p>
                            </span>
                          @enderror
                      </div>

                    </div>
                      <div class="row">
                         <div class="form-group col-xs-12">
                          <label for="lastname" class="sr-only">Church</label>

                          <select  class="selectpicker btn-primary form-control input-group-lg @error('church_id') is-invalid @enderror" data-live-search="true" type="text" name="church_id" value="{{ old('uchurch') }}" placeholder="Church">
                          <option selected disabled>Choose From a List of Churches</option>
                           @foreach($churches as $church)
                                <option  data-tokens="{{ $church->name}}" value="{{ $church->id }}">{{ $church->name}}</option>
                                @endforeach
                          </select>


                        </div>

                      </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city" class="sr-only">City</label>
                        <input id="city" class="form-control input-group-lg reg_name @error('city') is-invalid @enderror" type="text" name="city" value="{{ old('city') }}"  autocomplete="city" placeholder="Your city"/>
                         @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="country" class="sr-only"></label>
                          <select  class="selectpicker btn-primary form-control input-group-lg @error('country') is-invalid @enderror" data-live-search="true" type="text" name="country" value="{{ old('country') }}" placeholder="Church">
                          <option selected disabled>Choose From a List of Churches</option>
                           @foreach($countries as $country)
                                <option  data-tokens="{{ $country->name}}" value="{{  $country->name }}">{{ $country->name}}</option>
                                @endforeach
                          </select>
                          @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                      </div>
                    </div><hr>





          <button type="submit" class="btn btn-primary btn-block btn-signin">
                                    {{ __('Register') }}
                                </button>
                            </form><hr>

                  <div class="row">
                    <div class="col-md-4 col-sm-12">
                      <p>{{ __('Have an account?') }} <a href="{{ route('login')}}">{{ __('Login') }}</a></p>
                    </div>

                    <div class="col-md-8 col-sm-12">
                       <p>By Signing up, you agree to the <a href="/policy">Terms and conditions</a></p>
                    </div>
                  </div>



                </div><!--Registration Form Contents Ends-->

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
