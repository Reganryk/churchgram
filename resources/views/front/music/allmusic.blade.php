@extends('layouts.user')
@section('title', 'The best Christian Social Media Welcome'. Illuminate\Support\Str::title(Auth::user()->uname))
@section('content')
@include('front.includes.leftnav')

<div class="col-md-5"  style="background: #fff; border-radius: 8px;">
<div class="timeline-item timeline-day" style="padding: 10px;">
<div class="timeline-time">&nbsp;</div>
</div><!-- timeline-item -->
<div class="scrollbar" id="mainscroll1">
<div class="timeline-item" style="padding: 20px;"><hr>



 <div class="row">
  <div class="col-md-12">
    <div style="padding: 10px; width: 100%">
   <div class="search-box1">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
</div>
  </div>

    <div class="col-md-12">
     <div class="people-nearby">
      <hr>

                 <video class="post-video" controls> <source src="" type="video/mp4"> </video>

              <hr>


              <div class="nearby-user">
                <div class="row">


                       <div class="people-nearby">

              <div class="nearby-user" style="padding: 8px;">
                <h2>Latest New Albums</h2><hr>
                 @foreach($allalbums as $album)
                <div class="row">
                  <div class="col-md-2 col-3">
                    <img src="{{ URL::to('/') }}/storage/music/albums/covers/{{ $album->albumcover}}" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-7">
                    <div class="musicmain">
                    <h6><a href="{{ route('user.musicprofile', ['uname' => $album->uname])}}" class="profile-link">{{ $album->music->uname }}</a></h6>
                    <p><span></span>{{ $album->name }}<br>
                    <span class="text-muted">Released : </span>{{ $album->release_date }}<br>

                    <a class="btn text-green" style="margin-right: -14px; font-size: 11px; "><i style="font-size: 10px;" class="fa fa-thumbs-up"></i> 13</a>
                    <a class="btn text-red" style="margin-right: -14px; font-size: 11px; "><i style="font-size: 10px;" class="fa fa-thumbs-down"></i> 12</a>
                     <a class="btn text-red" style="margin-right: -14px; font-size: 11px; "><i style="font-size: 10px;"class="fa fa-eye"></i> 50</a>
                    <a class="btn text-red"  style="margin-right: -14px; font-size: 11px; "><i style="font-size: 10px;" class="fa fa-download"></i> 50</a>
                  </p>
                  </div>
                  </div>

                  <div class="col-md-3 col-2" style="">
                    @if(is_null($album->price))
                    <a href="#payalbum" class="btn-fill"><button class="btn btn-primary pull-right btn-br btn-sm "style="margin-bottom: 3px;"> Download </button></a>
                    @else
                     <a href="#payalbum" class="btn-fill"><button class="btn btn-warning pull-right btn-br btn-sm "style="margin-bottom: 3px;"> Buy Album</button></a>
                    @endif

                     <a href="{{ route('user.albumtracks',['id'=> $album->id])}}" class="btn-fill"><button class="btn btn-primary pull-right btn-br btn-sm  "style="margin-bottom: 3px;">Album List</button></a>

                     <a href="{{route('addtrackstoplaylist', ['id' => $album->id])}}" id="{{ $album->id}}playl" style="margin-bottom: 3px;" class="btn  btn-primary pull-right btn-br btn-sm">To My List</a>

                     <a href="#report" class="btn-fill"><button class="btn btn-default pull-right btn-br btn-sm "style="margin-bottom: 3px;"> Report</button></a>

                  </div>
                </div><hr>


<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('#{{ $album->id}}playlist').click(function(e){
 e.preventDefault();
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"{{route('addtrackstoplaylist', ['id' => $album->id])}}",
    success:function(data){
      $('#{{ $album->id}}playlist').removeClass('btn-primary ');
      $('#{{ $album->id}}playlist').addClass('btn-default ');
      $('#{{ $album->id}}playlist').html('Added to PList');
   }
  })

 })
});

</script>
@endforeach

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@include('front.includes.sidenav')
@include('front.includes.popups')
@include('front.includes.chatbox')
@endsection
