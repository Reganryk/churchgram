<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Churchgram | @yield('title')</title>
      <script>
        // rename myToken as you like
        window.myToken =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
    <!-- Vendor css -->
    <link href="{{ asset('frontend/lib/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- <link href="frontend/lib/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <link href="{{ asset('frontend/lib/fontawesome-free-5.6.1-web/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/medium-editor/css/medium-editor.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/fileinput/css/fileinput.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/summernote/css/summernote-bs4.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- churchgram CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/churchgram.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/fav.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/fav.png')}}">

  </head>
  <body style="background-color:rgba(241, 239, 253, 1);" >
    <div >
@include('front.includes.header')
@yield('content')
@include('front.includes.popups')

@include('front.includes.footer')
</div>

     <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
   {{--  <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script> --}}
{{--     <script type="text/javascript" src="{{ asset('js/forms.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://code.jQuery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('frontend/lib/jquery/js/jquery.js')}}"></script>
    <script src="{{ asset('frontend/lib/popper.js/js/popper.js')}}"></script>
    <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('frontend/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{ asset('frontend/lib/moment/js/moment.js')}}"></script>
    <script src="{{ asset('frontend/lib/d3/js/d3.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
    <script src="{{ asset('frontend/lib/gmaps/js/gmaps.js')}}"></script>
    <script src="{{ asset('frontend/lib/datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('frontend/lib/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{ asset('frontend/lib/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>
    <script src="{{ asset('frontend/lib/fileinput/js/fileinput.js')}}"></script>
    <script src="{{ asset('frontend/lib/fileinput/js/plugins/sortable.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/fileinput/js/plugins/purify.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/fileinput/js/plugins/piexif.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/parsleyjs/js/parsley.js')}}"></script>
    <script src="{{ asset('frontend/lib/summernote/js/summernote-bs4.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/medium-editor/js/medium-editor.js')}}"></script>
    <script src="{{ asset('frontend/js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('frontend/js/widgets.js')}}"></script>
    <!-------personal js------------>
    <script src="{{ asset('frontend/js/churchgram.js')}}"></script>




    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>

  </body>
</html>
