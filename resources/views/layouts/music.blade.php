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

<title>Churchgram | @yield('title')</title>

<!-- vendor css -->
<link href="{{ asset('musiccss/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{ asset('musiccss/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
<link href="{{ asset('musiccss/lib/chartist/css/chartist.css')}}" rel="stylesheet">
<link href="{{ asset('musiccss/lib/rickshaw/css/rickshaw.min.css')}}" rel="stylesheet">

<!-- churchgram CSS -->
<link rel="stylesheet" href="{{ asset('musiccss/css/churchgram.css')}}">
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>

</head>
<body>

@include('music.includes.header')

@yield('content')

@include('music.includes.footer')

<script src="{{ asset('musiccss/lib/jquery/js/jquery.js')}}"></script>
<script src="{{ asset('musiccss/lib/popper.js/js/popper.js')}}"></script>
<script src="{{ asset('musiccss/lib/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{ asset('musiccss/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
<script src="{{ asset('musiccss/lib/chartist/js/chartist.js')}}"></script>
<script src="{{ asset('musiccss/lib/d3/js/d3.js')}}"></script>
<script src="{{ asset('musiccss/lib/rickshaw/js/rickshaw.min.js')}}"></script>
<script src="{{ asset('musiccss/lib/jquery.sparkline.bower/js/jquery.sparkline.min.js')}}"></script>

<script src="{{ asset('musiccss/js/ResizeSensor.js')}}"></script>
<script src="{{ asset('musiccss/js/dashboard.js')}}"></script>
<script src="{{ asset('musiccss/js/churchgram.js')}}"></script>
</body>
</html>
