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

    <title>Register a New Church Here</title>

    <!-- Vendor css -->
    <link href="{{ asset('frontend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">

    <!-- churchgram CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/churchgram.css')}}">

  </head>

  <body  style="background: url({{ asset('frontend/images/bg/2.png)')}}; background-size: cover; " >

    <div class="signin-wrapper">

      <div class="signin-box">
        <h2 class="churchgram-logo"><a href="javascript::void(0)">Hey {{ Auth::user()->uname}}<span>.</span></a></h2>
           @if (session('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
                @endif
        <h2 class="signin-title-primary">Your have finished!</h2>
        <h6 class="signin-title-secondary">We have taken your Infomation. We are going to Review it and get back to you.<br>
          Keep the email you have just regitered active so that we can communicate to you any new update about your approval status.</h6>
          <hr>
    <h6 style="text-align: center;"><span > Otherwise Welcome to the the Churchgram Team,<br> Rumanzi Regan Churchgram CEO.<br>Kampala Uganda<span></h6>
      <hr>
      <p class="text-center"><i>Email us: <a href="mailto:churchregister@churchgram.org"> churchregister@churchgram.org</a>- or get to us on Phone:<a href="tel:256701026913"> 256701026913</a></i></p>
            <p class="mg-b-0">Go back to Timeline <a href="{{ route('timeline')}}">Back</a></p>

      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->





    <script src="{{ asset('frontend/lib/jquery/js/jquery.js')}}"></script>
    <script src="{{ asset('frontend/lib/popper.js/js/popper.js')}}"></script>
    <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.js')}}"></script>

    <script src="{{ asset('frontend/js/churchgram.js')}}"></script>

       <script>
      $(function(){
        'use strict';

        // Initialize tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // colored tooltip
        $('[data-toggle="tooltip-primary"]').tooltip({
          template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-success"]').tooltip({
          template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-warning"]').tooltip({
          template: '<div class="tooltip tooltip-warning" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-danger"]').tooltip({
          template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-info"]').tooltip({
          template: '<div class="tooltip tooltip-info" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-indigo"]').tooltip({
          template: '<div class="tooltip tooltip-indigo" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-purple"]').tooltip({
          template: '<div class="tooltip tooltip-purple" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-teal"]').tooltip({
          template: '<div class="tooltip tooltip-teal" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-orange"]').tooltip({
          template: '<div class="tooltip tooltip-orange" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-pink"]').tooltip({
          template: '<div class="tooltip tooltip-pink" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
      });
    </script>
  </body>
</html>
