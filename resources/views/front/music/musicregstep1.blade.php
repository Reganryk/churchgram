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

    <title>Register a New muisc Here</title>

    <!-- Vendor css -->
    <link href="{{ asset('frontend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">

    <!-- churchgram CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/churchgram.css')}}">

  </head>
  <body  style="background: url({{ asset('frontend/images/bg/2.png)')}}; background-size: cover; " >

    <div class="d-md-flex flex-row">

       <div class="signin-left">
        <div class="signin-box">
          <h2 class="churchgram-logo"><a href="index.html">muiscgram<span>.</span></a></h2>

          <p style="font-size: 18px; color: #fff;">Trying to register a muisc upgrades your Account Automatically. Therefore we will need upgraded information and  credentials so that we can be able to trust you with information of your Users</p>

          <p style="font-size: 18px; color: #fff;">We have a couple of Policies, Terms and Conditions. Before you go forward, we would like to advise you to Read through</p>

          <p><a href="" class="btn btn-outline-secondary pd-x-25">Read Policies, Terms and Conditions</a></p>
          <p><a href="/muiscgram/newsfeed.php" class=" pd-x-25"><i class="icon ion-reply"></i>I would like to cancel</a></p>

          <p class="tx-12" style="color: #fff;">muiscgram Team  ©  2019 - <script>document.write(new Date().getFullYear());</script>. All rights reserved</p>
        </div>
      </div><!-- signin-left -->
      <div class="signin-right">

        <div class="signin-box signup">
          <h3 class="signin-title-primary">Get Started!</h3>
          <h5 class="signin-title-secondary lh-4">Lets first get the Vital Information.</h5>

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
                @endif

         <form action="{{ route('usercreatemusic1')}}" method="Post" >
          @csrf
            <div class="row row-xs mg-b-10">
            <div class="col-sm"><input type="text" maxlength="50" class="form-control" name="name" data-toggle="tooltip-primary" data-placement="top" title="Make the Name Short and Simple. For any Longer names you can Abbreviate them" placeholder="Your Name"></div>

            <div class="col-sm mg-t-10 mg-sm-t-0"><input type="number" maxlength="15" name="phone" class="form-control" data-toggle="tooltip-primary" data-placement="top" title="Enter a Number that we contact you"  placeholder="Phone Number"></div>
          </div><!-- row -->

          <div class="row row-xs mg-b-10">
            <div class="col-sm"><input type="email" maxlength="50" class="form-control" name="email" placeholder="Email"></div>
            <div class="col-sm mg-t-10 mg-sm-t-0"><input name="password" type="password" class="form-control" data-toggle="tooltip-primary" data-placement="top" title="You will Require this Password every time you try to access the muisc Dashboard" placeholder="Password"></div>
          </div><!-- row -->

              <div class="form-group ">
            <select name="church_id"  class="form-control" maxlength="20" data-toggle="tooltip-primary" data-placement="top" title="Please this is automatic"  placeholder="Country" >
                @if(is_null(Auth::user()->musicreg->church_id))
                <option selected disabled>Choose Country</option>
                @else
                <option selected value="{{ Auth::user()->church->id }}" >{{Auth::user()->church->uname}}</option>
                @endif
                @foreach($churches as $church)
                <option value="{{ $church->id }}">{{ $church->name }}</option>
                @endforeach
            </select>

        </div><!-- form-group -->

          <button class="btn btn-primary btn-block btn-signin">Continue</button>
         </form>

          <p class="mg-t-40 mg-b-0">Terms and Conditions? <a href="regloc.php">Download Here <i class="fa fa-download"></i></a></p>
        </div><!-- signin-box -->

      </div><!-- signin-right -->

    </div><!-- d-flex -->

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
