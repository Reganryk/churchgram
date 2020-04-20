@extends('layouts.user')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')



@include('front.includes.leftnav')
<div class="col-md-5"  style="background: #fff; border-radius: 8px;">

<div class="timeline-item timeline-day" style="padding: 10px;">
<div class="timeline-time">&nbsp;</div>

</div><!-- timeline-item -->
<div class="scrollbar" id="mainscroll1">
<div class="timeline-item" style="padding: 20px;"><hr>


<div style="padding: 10px; width: 100%">
	 <div class="search-box1">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary pull-right" style="width: 100px"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
</div>

            <div class="people-nearby">
              <div class="">
                <div  ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1430.9622861411456!2d32.58164514422266!3d0.3180599767778936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbc0f9d74b39b%3A0x4538903dd96b6fec!2sKampala!5e1!3m2!1sen!2sug!4v1552648210495" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
              <hr>


                      <div class="nearby-user">
                <h2>Latest New Albums</h2><hr>
                <div class="row">
                  <div class="col-md-2 col-3" style="padding: 6px;">
                    <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic}}" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-6">
                    <div class="musicmain">
                    <h4><a href="muscianprofile.php" class="profile-link">Natheniel Bassey</a></h4>
                    <p><span>Album: </span>Sing Along with the Angels<span><br>Release Date : </span>12th/June/2018</p>

                    <div class="reaction">
                    <p class="tx-10 mg-b-0" style="font-size: 12px"><a href=""><i style="color: #8DC63F"  class="icon ion-thumbsup"></i>&nbsp;&nbsp; 13</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><i style="color: red" class="fa fa-thumbs-down"></i>&nbsp;&nbsp; 0</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" >&nbsp;&nbsp;<i  class="fa fa-gavel tx-purple"></i> &nbsp;20 &nbsp;Downloads</a></p>
                  </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-3" style="">
                    <a href="#payalbum" class="btn-fill"><button class="btn btn-warning pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;">Buy Album</button></a>

                     <a href="albumlist.php" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Album List</button></a>
                     <a href="#addtolist" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Add to Playlist</button></a>
                      <a href="#report" class="btn-fill"><button class="btn btn-danger  btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Report Album</button></a>

                  </div>
                </div><hr>

                       <div class="row">
                  <div class="col-md-2 col-3" style="padding: 6px;">
                    <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic}}" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-6">
                    <div class="musicmain">
                    <h4><a href="muscianprofile.php" class="profile-link">Natheniel Bassey</a></h4>
                    <p><span>Album: </span>Sing Along with the Angels<span><br>Release Date : </span>12th/June/2018</p>

                    <div class="reaction">
                    <p class="tx-10 mg-b-0" style="font-size: 12px"><a href=""><i style="color: #8DC63F"  class="icon ion-thumbsup"></i>&nbsp;&nbsp; 13</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><i style="color: red" class="fa fa-thumbs-down"></i>&nbsp;&nbsp; 0</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" >&nbsp;&nbsp;<i  class="fa fa-gavel tx-purple"></i> &nbsp;20 &nbsp;Downloads</a></p>
                  </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-3" style="">
                    <a href="#payalbum" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Download</button></a>

                     <a href="albumlist.php" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Album List</button></a>
                     <a href="#addtolist" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Add to Playlist</button></a>
                      <a href="#report" class="btn-fill"><button class="btn btn-danger  btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Report Album</button></a>

                  </div>
                </div><hr>


                       <div class="row">
                  <div class="col-md-2 col-3" style="padding: 6px;">
                    <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic}}" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-6">
                    <div class="musicmain">
                    <h4><a href="muscianprofile.php" class="profile-link">Natheniel Bassey</a></h4>
                    <p><span>Album: </span>Sing Along with the Angels<span><br>Release Date : </span>12th/June/2018</p>

                    <div class="reaction">
                    <p class="tx-10 mg-b-0" style="font-size: 12px"><a href=""><i style="color: #8DC63F"  class="icon ion-thumbsup"></i>&nbsp;&nbsp; 13</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><i style="color: red" class="fa fa-thumbs-down"></i>&nbsp;&nbsp; 0</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" >&nbsp;&nbsp;<i  class="fa fa-gavel tx-purple"></i> &nbsp;20 &nbsp;Downloads</a></p>
                  </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-3" style="">
                    <a href="#payalbum" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Download</button></a>

                     <a href="albumlist.php" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Album List</button></a>
                     <a href="#addtolist" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Add to Playlist</button></a>
                      <a href="#report" class="btn-fill"><button class="btn btn-danger  btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Report Album</button></a>

                  </div>
                </div><hr>


                       <div class="row">
                  <div class="col-md-2 col-3" style="padding: 6px;">
                    <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic}}" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-6">
                    <div class="musicmain">
                    <h4><a href="muscianprofile.php" class="profile-link">Natheniel Bassey</a></h4>
                    <p><span>Album: </span>Sing Along with the Angels<span><br>Release Date : </span>12th/June/2018</p>

                    <div class="reaction">
                    <p class="tx-10 mg-b-0" style="font-size: 12px"><a href=""><i style="color: #8DC63F"  class="icon ion-thumbsup"></i>&nbsp;&nbsp; 13</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><i style="color: red" class="fa fa-thumbs-down"></i>&nbsp;&nbsp; 0</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" >&nbsp;&nbsp;<i  class="fa fa-gavel tx-purple"></i> &nbsp;20 &nbsp;Downloads</a></p>
                  </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-3" style="">
                    <a href="#payalbum" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Download</button></a>

                     <a href="albumlist.php" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Album List</button></a>
                     <a href="#addtolist" class="btn-fill"><button class="btn btn-primary pull-right btn-fill btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Add to Playlist</button></a>
                      <a href="#report" class="btn-fill"><button class="btn btn-danger  btn-danger pull-right btn-sm btn-block btn-br  "style="margin-bottom: 3px;"> Report Album</button></a>

                  </div>
                </div><hr>



              </div>
          </div>
      </div>


</div>


@include('front.includes.popups')

</div>
@include('front.includes.sidenav')

</div><!-- container -->
</div><!-- churchgram-mainpanel -->


@endsection
