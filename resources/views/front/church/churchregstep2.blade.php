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
        <h2 class="churchgram-logo"><a href="index.html">Hey {{ Auth::user()->uname}}<span>.</span></a></h2>
        <h2 class="signin-title-primary">Church Location is important to us!</h2>
        <h6 class="signin-title-secondary">Make sure your at the Location of the Church you Registering.<br>
        Please switch off your VPN because we have to get you Real Location for proper placement of the Church. Otherwise cancel and try again when your at the exact location<hr>
    These will capture Automatically. Otherwise fill in the Remaining information</h6>
    @if (session('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
                @endif
    <form action="{{ route('usercreatechurch2create', ['id' =>Auth::user()->churchreg->id]) }}" method="Post" >
          @csrf
         <div class="form-group">
          <input  name="uname" type="text" class="form-control" maxlength="20" data-toggle="tooltip-primary" data-placement="top" title="Please this is automatic" @if(is_null(Auth::user()->churchreg->uname)) placeholder="Use username(only 20 Letters)" @else Value="{{Auth::user()->churchreg->uname }}" @endif >
        </div><!-- form-group -->

         <div class="form-group ">
            <select name="country" type="country" class="form-control" maxlength="20" data-toggle="tooltip-primary" data-placement="top" title="Please this is automatic"  placeholder="Country" >
                @if(is_null(Auth::user()->churchreg->country))
                <option selected disabled>Choose Country</option>
                @else
                <option selected value="{{ Auth::user()->churchreg->country }}" >{{Auth::user()->churchreg->country}}</option>
                @endif
                @foreach($countries as $country)
                <option value="{{ $country->name }}">{{ $country->name }}</option>
                @endforeach
            </select>

        </div><!-- form-group -->

        <div class="form-group">
          <input name="city" type="city" class="form-control" maxlength="20" data-toggle="tooltip-primary" data-placement="top" title="Please this is automatic" @if(is_null(Auth::user()->churchreg->city)) placeholder="Which city is the Church Located" @else Value="{{Auth::user()->churchreg->city }}" @endif  >
        </div><!-- form-group -->
         <div class="form-group mg-b-50">
          <input name="headpastor" type="text" class="form-control" maxlength="40" data-toggle="tooltip-primary" data-placement="top" title="Please this is automatic" @if(is_null(Auth::user()->churchreg->headpastor)) placeholder="Church Head Pastor(Just Both Names; dont add Pr..so and so)" @else Value="{{Auth::user()->churchreg->headpastor }}" @endif    >
        </div><!-- form-group -->

       <div class="row">
        <div class="col-md-3"
        >@error('uname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="col-md-3"
        >@error('country')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="col-md-3"
        >@error('city')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="col-md-3"
        >@error('headpastor')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

       </div>
        <button class="btn btn-primary btn-block btn-signin" data-toggle="tooltip-primary" data-placement="top" title="If this is not your Area, Please reload or go back and Restart the process">Confirm</button>
    </form>
        <p class="mg-b-0">Want to cancel? <a href="churchalms.php">Back</a></p>
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
