@extends('layouts.user')
@section('title', 'The best Christian Social Media Welcome'. Illuminate\Support\Str::title(Auth::user()->uname))
@section('content')
@include('front.includes.leftnav')

<div class="col-md-5 c0l-12"  style="background: #fff; border-radius: 8px;">
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

                <img style="height: 300px; width: 100%; object-position: center; object-fit: cover;" src="{{ URL::to('/') }}/storage/music/albums/covers/{{ $album->albumcover}}" alt="user" class="btn-br" />




              <div class="nearby-user">


<table class="table">
  <tr>
    <td>No</td>
    <td>Track Art</td>
    <td style="width: 150px">Song Name</td>

    <td \></td>
    <td></td>

  </tr>

@foreach($album->albumtrack as $track)
   <tr>
    <td>{{ $loop->iteration}}</td>
    <td> <img style="height: 40px; width: 50px; object-position: center; object-fit: cover;" src="{{ URL::to('/') }}/storage/music/albums/covers/{{ $track->trackcover}}" alt="user" class="btn-br" /></td>
    <td style="line-height: 20px;">{{ $track->title }}</td>

    <td >
                 <audio controls id="player" style="width: 120px; height: 40px">
  <source src="{{ URL::to('/') }}/storage/music/albums/tracks/{{ $track->albumtrack}}" type="audio/mpeg">
  <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default />
  Your browser does not support HTML5 audio.
</audio></td>
<td style="width: 12px" ><i style="font-size: 18px; margin-top: 13px;" class="fa fa-plus"></i></td>
   @if(is_null($track->price))
    <td style="width: 12px"><i style="font-size: 18px; margin-top: 13px;" class="fa fa-download"></i></td>
    @else
     <td style="width: 12px"><i style="font-size: 18px; margin-top: 13px;" class="fa fa-user"></i></td>
    @endif
  </tr>
   @endforeach

</table>
<hr>




                </div>




            </div>
  </div>



              <div class="nearby-user" style="padding: 8px;">
                <h2>Other Albums by <span style="text-transform: capitalize;">{{ $album->music->uname }}</span></h2><hr>
                 @foreach($morefrom as $albumcd)
                <div class="row">
                  <div class="col-md-2 col-3">
                    <img src="{{ URL::to('/') }}/storage/music/albums/covers/{{ $albumcd->albumcover}}" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-7">
                    <div class="musicmain">
                    <h6><a href="{{ route('user.musicprofile', ['uname' => $albumcd->uname])}}" class="profile-link">{{ $albumcd->music->uname }}</a></h6>
                    <p><span></span>{{ $albumcd->name }}<br>
                    <span class="text-muted">Released : </span>{{ $albumcd->release_date }}<br>

                    <a class="btn text-green" style="margin-right: -14px; font-size: 11px; "><i style="font-size: 10px;" class="fa fa-thumbs-up"></i> 13</a>
                    <a class="btn text-red" style="margin-right: -14px; font-size: 11px; "><i style="font-size: 10px;" class="fa fa-thumbs-down"></i> 12</a>
                     <a class="btn text-red" style="margin-right: -14px; font-size: 11px; "><i style="font-size: 10px;"class="fa fa-eye"></i> 50</a>
                    <a class="btn text-red"  style="margin-right: -14px; font-size: 11px; "><i style="font-size: 10px;" class="fa fa-download"></i> 50</a>
                  </p>
                  </div>
                  </div>

                  <div class="col-md-3 col-2" style="">
                    @if(is_null($albumcd->price))
                    <a href="#payalbum" class="btn-fill"><button class="btn btn-primary pull-right btn-br btn-sm "style="margin-bottom: 3px;"> Download </button></a>
                    @else
                     <a href="#payalbum" class="btn-fill"><button class="btn btn-warning pull-right btn-br btn-sm "style="margin-bottom: 3px;"> Buy Album</button></a>
                    @endif

                     <a href="{{ route('user.albumtracks',['id'=> $albumcd->id])}}" class="btn-fill"><button class="btn btn-primary pull-right btn-br btn-sm  "style="margin-bottom: 3px;">Album List</button></a>

                     <a href="{{route('addtrackstoplaylist', ['id' => $albumcd->id])}}" id="{{ $albumcd->id}}playlist" class="btn-fill"><button class="btn btn-primary pull-right btn-br btn-sm "style="margin-bottom: 3px;"> To My List</button></a>

                     <a href="#report" class="btn-fill"><button class="btn btn-default pull-right btn-br btn-sm "style="margin-bottom: 3px;"> Report</button></a>

                  </div>
                </div><hr>
        @endforeach


              </div>
</div>
</div>
</div>
</div>

<style type="text/css">

</style>


@include('front.includes.sidenav')
@include('front.includes.popups')

@include('front.includes.chatbox')
@endsection
