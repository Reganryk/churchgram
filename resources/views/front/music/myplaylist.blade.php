@extends('layouts.user')
@section('title', Auth::user()->uname )
@section('content')
@include('front.includes.leftnav')

<div class="col-md-5 c0l-12"  style="background: #fff; border-radius: 8px;">
<div class="timeline-item timeline-day" style="padding: 10px;">
<div class="timeline-time">&nbsp;</div>
</div><!-- timeline-item -->
<div class="scrollbar" id="mainscroll1">
<div class="timeline-item" style="padding: 20px;">




<div class="nearby-user">
<div class="row">

 <hr>

 <video class="post-video" controls> <source src="" type="video/mp4"> </video>

 <hr>

<div class="people-nearby">
	<hr>
<div class="nearby-user" style="padding: 8px;">
@foreach($albums  as $album)
    <div class="row">
  <div class="col-md-2 col-3">
    <img src="{{ URL::to('/') }}/storage/music/albums/covers/{{ $album->albumcover }}" alt="user" class="profile-photo-lg" />
  </div>
  <div class="col-md-7 col-7">
    <div class="musicmain">
    <h6><a href="{{ route('user.musicprofile', ['uname' => $album->uname])}}" class="profile-link">{{ $album->music }}</a></h6>
    <p><span></span>{{ $album->name }}<br>
    <span class="text-muted">Released : </span>{{ $album->release_date }}<br>

  </p>
  </div>
  </div>

  <div class="col-md-3 col-2" style="">
    @if(is_null($album->price))
    <a href="#payalbum" class="btn-fill"><button class="btn btn-primary pull-right btn-br btn-sm "style="margin-bottom: 3px;">Donate</button></a>
    @else
     <a href="#payalbum" class="btn-fill"><button class="btn btn-warning pull-right btn-br btn-sm "style="margin-bottom: 3px;">Purchase</button></a>
    @endif
     @if(is_null($album->price))
    <a href="#payalbum" class="btn-fill"><button class="btn btn-primary pull-right btn-br btn-sm "style="margin-bottom: 3px;">Download</button></a>
    @else
     <a href="#payalbum" class="btn-fill"><button class="btn btn-warning pull-right btn-br btn-sm "style="margin-bottom: 3px;">{{ $album->Price}}</button></a>
    @endif

     <a href="{{ route('user.albumtracks',['id'=> $album->id])}}" class="btn-fill"><button class="btn btn-primary pull-right btn-br btn-sm  "style="margin-bottom: 3px;">Remove from PList</button></a>


  </div>
</div><hr>
<div class="row text-center">
	<div class="col-md-2 col-2">
		 <a class="btn text-green" style="margin-right: -14px; font-size: 13px; "><i style="font-size: 16px;" class="fa fa-thumbs-up"></i> 13</a>
	</div>
	<div class="col-md-2 col-2">
		 <a class="btn text-red" style="margin-right: -14px; font-size: 13px; "><i style="font-size: 16px;" class="fa fa-thumbs-down"></i> 12</a>
	</div>
	<div class="col-md-2 col-2">
		<a class="btn text-red" style="margin-right: -14px; font-size: 13px; "><i style="font-size: 16px;"class="fa fa-eye"></i> 50</a>
	</div>
	<div class="col-md-2 col-2">
		<a class="btn text-red"  style="margin-right: -14px; font-size: 13px; "><i style="font-size: 16px;" class="fa fa-download"></i> 50</a>
	</div>
    <div class="col-md-2 col-2">
		<a class="btn text-red"  style="margin-right: -14px; font-size: 13px; "><i style="font-size: 16px;" class="fa fa-bank"></i></a>
	</div>
	<div class="col-md-2 col-2">
		<a class="btn text-red"  style="margin-right: -14px; font-size: 13px; "><i style="font-size: 16px;" class="fa fa-trash"></i></a>
	</div>
</div>





<hr>

@endforeach
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
