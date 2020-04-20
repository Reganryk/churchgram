@extends('layouts.user')
@section('title', $church->name )
@section('content')



<div class="container">
<div class="col-md-11">
       <div class="timeline">

            <div class="timeline-cover" style="background: url({{ URL::to('/') }}/storage/church/banners/{{ $church->churchprofile->banner}}) no-repeat; background-position: top; background-size: cover;">


          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-xs">
            <div class="container">
            <div class="row">
              <div class="col-md-5" style="margin-bottom: 130px; margin-left: 40px;">
                <div class="profile-info" >

                  <img src="{{ URL::to('/') }}/storage/church/profilepics/{{ $church->churchprofile->propic}}" alt="" class="img-responsive profile-photo" />

                  <h3 style="text-align: center; text-transform: capitalize;">{{ $church->name }}</h3>
                  <p class="text-muted"></p>
                </div>
              </div>
              <div class="col-md-9" style="background: #1CAF9A; border-radius:10px;  margin-left: 20px; ">
             <ul class="list-inline profile-menu">
                  <li><a href="{{ route('userprofile',[ 'uname' =>str_slug(Auth::user()->uname )])}}" class="active" >About</a></li>
                  <li><a href="{{ route('usergallery',[ 'uname' =>str_slug(Auth::user()->uname )])}}">Gallery</a></li>
                  <li><a href="{{ route('userfriends',[ 'uname' =>str_slug(Auth::user()->uname )])}}" >Members</a></li>
                   <li><a href="{{ route('userhistory',[ 'uname' =>str_slug(Auth::user()->uname )])}}">History</a></li>
                </ul>

                <ul class="follow-me list-inline" style="display: flex;">
                	<li style="margin-top: 3px;"> <button class="btn btn-danger " style="padding: 5px; margin-right: 5px; border-radius: 8px;">999 Twins</button></li>
                	<li style="margin-top: 5px;"> <button class="btn btn-warning btn-sm" style="padding: 5px; margin-right: 5px; border-radius: 8px;">Twin Church</button></li>
                	<li style="margin-top: 5px;" > <button class="btn btn-danger btn-sm" style="padding: 5px; margin-right: 5px; border-radius: 8px;">Listen In  <i class="fa fa-play"></i></button></li>
                	<li style="margin-top: 3px;"><a href="" style="align-content: right;" class="header-notification1" data-toggle="dropdown">
              <i class="icon ion-share"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->
        </div>
        <style type="text/css">

		    @media (min-width: 767px) {
		   .hidden-cd {
		     display: none;
		   }
		}

        </style>

         <div class="navbar-mobile hidden-cd" style="position: absolute;">

            <div class="profile-info">
              <img src="{{ URL::to('/') }}/storage/church/profilepics/{{ $church->churchprofile->propic}}" alt="" class="img-responsive profile-photo" />
              <h4 style="color: #fff;">{{ $church->name }}</h4>

            </div>
            <div class="mobile-menu">
              <ul class="list-inline" style="display: inline-flex; margin-bottom: 5px;">
                <li><a href="churchtimeline.php" class="active">Timeline</a></li>
                <li><a href="churchtimeline-about.php">About</a></li>
                <li><a href="churchtimeline-album.php">Album</a></li>
                <li><a href="churchtimeline-friends.php">Friends</a></li>
              </ul><br>
              <div style="padding: 5px;">
              	 <button class="btn btn-danger " style="padding: 5px; margin-right: 5px; border-radius: 8px;">999 Twins</button>
               <button class="btn btn-primary btn-sm" style="padding: 5px; margin-right: 5px; border-radius: 8px;">Twin Church</button>
              <button class="btn btn-primary btn-sm" style="padding: 5px; margin-right: 5px; border-radius: 8px;">Listen In <i class="fa fa-play"></i></button>
          </div>
            </div>
          </div><!--Timeline Menu for Small Screens End-->
      </div>


    </div>
  </div>
  </div>
    <br>


    <div class="churchgram-mainpanel">
      <div class="container">

        <div class="row row-sm">
          <div class="col-lg-7">
            <div class="card card-profile">
              <div class="card-body">
                <div class="media">





                <div class="media-body">
                <div id="carousel12" class="carousel slide" data-ride="carousel">


                <ol class="carousel-indicators">

                  <li data-target="#carousel12" data-slide-to=""></li>
              </ol>

                <div class="carousel-inner" role="listbox">

                     <div class="carousel-item active">
                    <div class="bg-danger pd-30  d-flex align-items-center">
                    <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-spacing-2">Hey every Body</p>
                        <p class="lh-5 mg-b-20" style="height: 100px">The best ICT PERSONELO</p>
                        <i>mARK gREAT</i><hr>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                          <a href="#createcard" data-toggle="modal" data-target="#createcard" class="tx-white-8 hover-white pd-x-5">Create Card</a>
                        </nav><hr>
                      </div>
                    </div><!-- d-flex -->
                  </div>


                 <div class="media-body">
                    <h3 class="card-profile-name" style="text-transform: capitalize;">Create your First Card</h3>


                    <p class="mg-b-0" style="height: 100px">Well your first card is your first cut. Create your card, share your testimony,inspiration, prayer request. </p><br>

                  </div>



                 <a href="#createcard" data-toggle="modal" data-target="#createcard" class="btn btn-primary btn-teal btn-block">Create Card</a>

              </div>
              </div>







                  <div class="media-body">
                    <h3 class="card-profile-name" style="text-transform: capitalize;">{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</h3>
                    <p class="card-profile-position">Currently attends: <a href="https://deepcodeplus.com">{{ Auth::user()->uchurch }}</a></p>
                    <p>{{ Auth::user()->city }}&nbsp;{{ Auth::user()->country }}</p>

                    <p class="mg-b-0" style="height: 100px">{{ Auth::user()->userprofile->about }}</p><br>

                      <div class="card-footer">
                 <a href="#aboutuser">Edit Profile</a>
                <div>

                  <a href="">Profile Settings</a>
                </div>
              </div><!-- card-footer -->
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- card-body -->

            </div><!-- card -->

          <div class="section-wrapper mg-t-20">
            <a href="{{ route('createpost')}}" class="btn btn-primary btn-block">Create a Post</a>
        </div><!-- section-wrapper -->


            <div class="card card-latest-activity mg-t-20">
              <div class="card-body">
                <div class="churchgram-card-title">Latest Posts By You</div>


              <div class="">
                <div class="timeline-item timeline-day" style="padding: 10px;">
                  <div class="timeline-time">&nbsp;</div>

                </div><!-- timeline-item -->


               <div class="scrollbar" id="mainscroll1">
                <div class="timeline-item" style="padding: 20px;"><hr>
                 <div class="" >



                   <!------------------------------------Friend Requests---------------------->





 </div><!-- timeline-body -->
                </div><!-- timeline-item -->




              </div><!-- timeline-group -->
            </div><!-- card -->




              </div><!-- card-body -->

            </div><!-- card -->




          </div><!-- col-8 -->
      </div>


          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-connection">
              <div class="row row-xs">
                <div class="col-4 tx-primary">129</div>
                <div class="col-8">people viewed your profile in the past 90 days</div>
              </div><!-- row -->
              <hr>
              <div class="row row-xs">
                <div class="col-4 tx-purple">845</div>
                <div class="col-8">
                  connections <br>
                  <a href="">Grow your network</a>
                </div>
              </div><!-- row -->
            </div><!-- card -->
                   <div class="card card-people-list pd-25 mg-t-20">
              <div class="churchgram-card-title">Church Upcoming Events</div>
              <div class="media-list">
              	<div class="scrollbarright" id="mainscroll1" style="padding: 4px;">
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="dropdown-list-footer">
                  <a href="#"><i class="fa fa-angle-up"></i> Events End Here</a>
                </div>

            </div>

              </div><!-- media-list -->
            </div><!-- card -->

            <div class="card card-people-list pd-25 mg-t-20">
              <div class="churchgram-card-title">Groups by {{ $church->uname }}</div>
              <div class="media-list">
              	<div class="scrollbarright" id="mainscroll" style="padding: 2px;">
              <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in </span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->


            </div>

              </div><!-- media-list -->
            </div><!-- card -->

                   <div class="card card-people-list pd-25 mg-t-20">
              <div class="churchgram-card-title">Active Donations by {{ $church->uname }}</div>
              <div class="media-list">
              	<div class="scrollbarright" id="mainscroll" style="padding: 2px;">
                     <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Kabale Gospel Explosion</a>
                    <p><span>We are have put a cresade in Kabale. Please</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Details</button>
                </div><!-- media -->

                    <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Kabale Gospel Explosion</a>
                    <p><span>We are have put a cresade in Kabale. Please</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Details</button>
                </div><!-- media -->

                    <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Kabale Gospel Explosion</a>
                    <p><span>We are have put a cresade in Kabale. Please</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Details</button>
                </div><!-- media -->

                    <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Kabale Gospel Explosion</a>
                    <p><span>We are have put a cresade in Kabale. Please</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Details</button>
                </div><!-- media -->

                    <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $church->churchprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Kabale Gospel Explosion</a>
                    <p><span>We are have put a cresade in Kabale. Please</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Details</button>
                </div><!-- media -->






            </div>

              </div><!-- media-list -->
            </div><!-- card -->


            <div class="card pd-25 mg-t-20">
              <div class="churchgram-card-title">Contact &amp; Personal Info</div>

              <div class="media-list mg-t-25">

                <div class="media mg-t-25">
                  <div><i class="icon ion-ios-telephone-outline tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Phone Number</h6>
                    <span class="d-block">{{ Auth::user()->uphone }}</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-ios-email-outline tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Email Address</h6>
                    <span class="d-block">{{ Auth::user()->email }}</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-twitter tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Twitter</h6>
                    <a href="#" class="d-block">{{ Auth::user()->userprofile->twitter }}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                 <div class="media mg-t-25">
                  <div><i class="icon ion-social-facebook tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Facebook</h6>
                    <a href="#" class="d-block">{{ Auth::user()->userprofile->facebook }}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                 <div class="media mg-t-25">
                  <div><i class="icon ion-social-whatsapp tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Whatsapp</h6>
                    <a href="#" class="d-block">{{ Auth::user()->userprofile->whatsapp }}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- media-list -->
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

      </div><!-- container -->
    </div><!-- churchgram-mainpanel -->




    @if(is_null(Auth::user()->userprofile->about))
 <div id="aboutuser" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">

              <div class="col-lg-12 bg-white br-2">
                <div class="pd-y-30 pd-xl-x-30">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="pd-x-30 pd-y-10">
                    <h3 class="tx-gray-800 tx-normal mg-b-5">Post Your Prayer Request!</h3>

                    <br>
                     <div class="form-group">
                      <input type="text" name="prayerreq" class="form-control pd-y-12" placeholder="Prayer Request Heading">
                    </div><!-- form-group -->

          <div class="editable tx-16 bd pd-30 tx-inverse">Compose Your Prayer requests Here</div>

                   <button class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i>Post Prayer Request</button>
                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


    @endif

@include('front.includes.chatbox')
@endsection
