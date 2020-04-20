<!DOCTYPE html>
<html lang="en">
  <head>
              <!-- meta tags -->
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








    <!-- Top Banner
    ================================================= -->
<section class="welcomelogin" >
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
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Enter Your Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                        </div><!-- form-group -->
                        <div class="form-group mg-b-50">
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="error">{{ $message }}</p>
                                    </span>
                                @enderror
                        </div><!-- form-group -->
                         @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                               <button class="btn btn-primary btn-block btn-signin">Sign In</button>


                               <div class="signup-separator"><span>{{ __('or Login using') }}</span></div>

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

    </section>

  <div class="welcomeads">
    <!-- Features Section
    ================================================= -->
    <section id="features">
      <div class="container wrapper">
        <div class="row slideUp">
          <div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2">
            <div class="feature-icon"><i class="icon ion-person-add"></i></div>
            <h3>See Churches near You</h3>
          </div>
          <div class="feature-item col-md-2 col-sm-6 col-xs-6">
            <div class="feature-icon"><i class="icon ion-images"></i></div>
            <h3>Publish Posts to Timeline</h3>
          </div>
          <div class="feature-item col-md-2 col-sm-6 col-xs-6">
            <div class="feature-icon"><i class="icon ion-chatbox-working"></i></div>
            <h3>Private Chats with everyone</h3>
          </div>
          <div class="feature-item col-md-2 col-sm-6 col-xs-6">
            <div class="feature-icon"><i class="icon ion-compose"></i></div>
            <h3>Listen to Live Preaching</h3>
          </div>
        </div>
        <h2 class="sub-title">find awesome people like you</h2>
        <div id="incremental-counter" data-value="101242"></div>
        <p>People Already Signed Up</p>
        <img src="images/face-map.png" alt="" class="img-responsive face-map slideUp hidden-sm hidden-xs" />
      </div>

    </section>

    <!-- Download Section
    ================================================= -->
    <section id="app-download">
      <div class="container wrapper">
        <h1 class="section-title slideDown">Download</h1>
        <ul class="app-btn list-inline slideUp">
          <li><button class="btn-secondary"><img src="images/app-store.png" alt="App Store" /></button></li>
          <li><button class="btn-secondary"><img src="images/google-play.png" alt="Google Play" /></button></li>
        </ul>
        <h2 class="sub-title">stay connected anytime, anywhere</h2>
      </div>
    </section>

    <!-- Image Divider
    ================================================= -->
    <div class="img-divider hidden-sm hidden-xs"></div>

    <!-- Facts Section
    ================================================= -->
    <section id="site-facts">
      <div class="container wrapper">
        <div class="circle">
          <ul class="facts-list">
            <li>
              <div class="fact-icon"><i class="icon ion-ios-people-outline"></i></div>
              <h3 class="text-white">1,01,242</h3>
              <p>People registered</p>
            </li>
            <li>
              <div class="fact-icon"><i class="icon ion-images"></i></div>
              <h3 class="text-white">21,01,242</h3>
              <p>Posts published</p>
            </li>
            <li>
              <div class="fact-icon"><i class="icon ion-checkmark-round"></i></div>
              <h3 class="text-white">41,242</h3>
              <p>People online</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Live Feed Section
    ================================================= -->
    <section id="live-feed">
      <div class="container wrapper">
        <h1 class="section-title slideDown">live feed</h1>
        <ul class="online-users list-inline slideUp">
          <li><a href="#" title="Alexis Clark"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="James Carter"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Robert Cook"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Richard Bell"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Anna Young"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Julia Cox"><img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        </ul>
        <h2 class="sub-title">see what’s happening now</h2>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Sarah</a> just posted a photo from Moscow</p>
                <p class="text-muted">20 Secs ago</p>
              </div>
            </div>
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">John</a> Published a post from Sydney</p>
                <p class="text-muted">1 min ago</p>
              </div>
            </div>
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Julia</a> Updated her status from London</p>
                <p class="text-muted">5 mins ago</p>
              </div>
            </div>
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Sophia</a> Share a photo from Virginia</p>
                <p class="text-muted">10 mins ago</p>
              </div>
            </div>
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Linda</a> just posted a photo from Toronto</p>
                <p class="text-muted">20 mins ago</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Nora</a> Shared an article from Ohio</p>
                <p class="text-muted">22 mins ago</p>
              </div>
            </div>
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Addison</a> Created a poll from Barcelona</p>
                <p class="text-muted">23 mins ago</p>
              </div>
            </div>
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Diana</a> Posted a video from Captown</p>
                <p class="text-muted">27 mins ago</p>
              </div>
            </div>
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Sarah</a> Shared friend's post from Moscow</p>
                <p class="text-muted">30 mins ago</p>
              </div>
            </div>
            <div class="feed-item">
              <img src="http://placehold.it/300x300" alt="user" class="img-responsive profile-photo-sm" />
              <div class="live-activity">
                <p><a href="#" class="profile-link">Emma</a> Started a new job at Torronto</p>
                <p class="text-muted">33 mins ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="copyright" style="padding: 10px;">
        <p>Churchgram Team  ©  2019 - <script>document.write(new Date().getFullYear());</script>. All rights reserved</p>
      </div>
    </footer>





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
