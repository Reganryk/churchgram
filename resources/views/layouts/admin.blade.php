<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admincss/assets/images/favicon.png')}}">
<title>Churchgram Admin - Dashboard</title>
<!-- Custom CSS -->
<link href="{{ asset('admincss/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
<link href="{{ asset('admincss/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
<link href="{{ asset('admincss/assets/libs/morris.js/morris.css')}}" rel="stylesheet">
    <link href="{{ asset('admincss/assets/libs/footable/css/footable.core.min.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('admincss/dist/css/style.min.css')}}" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
<div class="lds-ripple">
<div class="lds-pos"></div>
<div class="lds-pos"></div>
</div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">


@include('admin.includes.header')

@yield('content')

@include('admin.includes.footer')
</div>


<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('admincss/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('admincss/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('admincss/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<script src="{{ asset('admincss/dist/js/app.min.js')}}"></script>
<script src="{{ asset('admincss/dist/js/app.init.horizontal.js')}}"></script>
<script src="{{ asset('admincss/dist/js/app-style-switcher.horizontal.js')}}"></script>
<!-- churchgramscrollbar scrollbar JavaScript -->
<script src="{{ asset('admincss/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ asset('admincss/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('admincss/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admincss/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('admincss/dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{ asset('admincss/assets/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{ asset('admincss/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!--c3 charts -->
<script src="{{ asset('admincss/assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{ asset('admincss/assets/extra-libs/c3/c3.min.js')}}"></script>
<!--chartjs -->
<script src="{{ asset('admincss/assets/libs/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('admincss/assets/libs/morris.js/morris.min.js')}}"></script>

<script src="{{ asset('admincss/dist/js/pages/dashboards/dashboard1.js')}}"></script>
 <script src="{{ asset('admincss/assets/libs/footable/dist/footable.all.min.js')}}"></script>
    <script src="{{ asset('admincss/dist/js/pages/tables/footable-init.js')}}"></script>
</body>

</html>
