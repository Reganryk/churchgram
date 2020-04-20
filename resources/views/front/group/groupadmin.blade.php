@extends('layouts.user')
@section('title', $groupadmin->uname)
@section('content')





    <div class="churchgram-mainpanel">
      <div class="container">
        <div class="row row-sm row-timeline userprofile" >

          <!---------------------Latest events coming--------------------->
          <div class="col-md-3 mg-t-20  mg-lg-t-0" style="top: 20px;">
            <div class="card card-connection btn-br">
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
                   <div class="card card-people-list pd-25 mg-t-20 btn-br">
              <div class="churchgram-card-title">Church Upcoming Events</div>
              <div class="media-list">
                <div class="scrollbarreply" id="mainscroll1" style="padding: 4px;">
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span style="color: #6F42C1">Church Premises</span> at <span>Thur 04 2020 | 8:00pm</span></p>
                  </div><!-- media-body -->
                   <a href="" class="btn btn-sm btn-primary" style="border-radius: 8px;">Get Along</a>
                </div><!-- media -->
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
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

            <div class="card card-people-list pd-25 mg-t-20 btn-br">
              <div class="churchgram-card-title">Groups by {{ $groupadmin->uname }}</div>
              <div class="media-list">
                <div class="scrollbarright" id="mainscroll" style="padding: 2px;">
              <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in </span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->
                  <div class="media">
                  <img src="{{ URL::to('/') }}/storage/churches/profilepics/{{ $groupadmin->propic}}" alt="">
                  <div class="media-body">
                    <a href="">Praise and Worship Overnight </a>
                    <p><span>Opening up the Minds of married people in Rural Areas</span></p>
                  </div><!-- media-body -->
                   <button  class="btn btn-sm btn-primary" style="border-radius: 8px;">Join</button>
                </div><!-- media -->


            </div>

              </div><!-- media-list -->
            </div><!-- card -->



          </div><!-- col-4 -->

                    <div class="col-md-8">
            <div class="">
              <div class="">
                <div class="timeline-item timeline-day" style="padding: 10px;">
                  <div class="timeline-time">&nbsp;</div>

                </div><!-- timeline-item -->


               <div class="scrollbar btn-br" id="mainscroll1">
                <div class="timeline-item " style="padding: 20px; background-color: #fff; " ><hr>
                 <div class="" >


       <div class="timeline">

            <div class="timeline-cover" style="background: url({{ URL::to('/') }}/storage/users/banners/{{ $groupadmin->banner}}) no-repeat; background-position: top; background-size: cover;">


          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-xs">
            <div class="container">
            <div class="row">
              <div class="col-md-3" style="margin-bottom: 130px; margin-left: 40px;">
                <div class="profile-info" >

                  <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $groupadmin->propic}}" alt="" class="img-responsive profile-photo" />

                  <h3 style="text-align: center; text-transform: capitalize;">{{ $groupadmin->uname }}</h3>
                  <p class="text-muted"></p>
                </div>
              </div>
              <div class="col-md-9" style="background: #1B84E7; border-radius:10px; margin-left: 20px; ">
             <ul class="list-inline profile-menu">
                  <li><a href="{{ route('userprofile',[ 'uname' =>str_slug(Auth::user()->uname )])}}" class="active" >About</a></li>
                  <li><a href="{{ route('usergallery',[ 'uname' =>str_slug(Auth::user()->uname )])}}">Gallery</a></li>
                  <li><a href="{{ route('userfriends',[ 'uname' =>str_slug(Auth::user()->uname )])}}" >Friends</a></li>

                </ul>

                <ul class="follow-me list-inline" style="display: flex;">
                  <li style="margin-top: 3px;"> <button class="btn btn-danger " style="padding: 5px; margin-right: 5px; border-radius: 8px;">999 Twins</button></li>
                  <li style="margin-top: 5px;"> <button class="btn btn-warning btn-sm" style="padding: 5px; margin-right: 5px; border-radius: 8px;">Twin User</button></li>

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

             <div class="profile-info image-box" >

                  <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $groupadmin->propic}}" alt="" class="img-responsive profile-photo" />
                        <div class="image-box__overlay" style="border-radius: 100%; height: 50px; width: 50px;" >
                          <img style="border-radius: 100%;height: 50px; width: 50px;object-fit: fill; object-position: center;" src="{{ asset('frontend/images/10.png')}}">
                          <form action="{{ route('uploadavatar')}}" method="Post"enctype="multipart/form-data">
                          {{ csrf_field() }}
                           <input type="file" class="fileuploadpp" name="propic" onchange='{this.form.submit();}'>
                         </form>
                       </div>


                  <h3 style="text-align: center; text-transform: capitalize;">{{ $groupadmin->uname }}</h3>
                  <p class="text-muted"></p>
                </div>
            <div class="mobile-menu">
                   <ul class="list-inline profile-menu" style="display: inline-flex; margin-bottom: 5px;">
                  <li><a href="{{ route('userprofile',[ 'uname' =>str_slug(Auth::user()->uname )])}}" class="active" >About</a></li>
                  <li><a href="{{ route('usergallery',[ 'uname' =>str_slug(Auth::user()->uname )])}}">Gallery</a></li>
                  <li><a href="{{ route('userfriends',[ 'uname' =>str_slug(Auth::user()->uname )])}}" >Friends</a></li>
                   <li><a href="{{ route('userhistory',[ 'uname' =>str_slug(Auth::user()->uname )])}}">History</a></li>
                </ul><br>

            </div>
          </div><!--Timeline Menu for Small Screens End-->
          <br>
      </div>


    </div>



                                   <!------------------------------------Friend Requests---------------------->
                        <hr>
 <div class="card card-profile" style="padding: 10px;">
              <div class="card-body">
                <div class="media btn-br" >
                                 <div class="media-body" >
                <div id="carousel12" class="carousel slide" data-ride="carousel">

                @if(count($groupadmin->card))
                <ol class="carousel-indicators">
                  <?php $x = 0; ?>
                      @foreach($groupadmin->card as $card)
                      @if ($x == 0)
                  <li data-target="#carousel12" data-slide-to="0" class="active"></li>
                  @else($x == 1)
                  <li data-target="#carousel12" data-slide-to="{{ $x++ }}"></li>
                  @endif
                   <?php $x++; ?>
                  @endforeach
                </ol>
                <div class="carousel-inner" role="listbox" style="border-radius: 8px;">
                   <?php $x = 0; ?>
                      @foreach($groupadmin->card as $card)
                      @if ($x == 0)
                    <div class="carousel-item active"  style="border-radius: 8px;">
                    <div class=" pd-30  d-flex align-items-center"  style="background-color: {{ $card->colored }};border-radius: 8px;" >
                    <div class="tx-white" >
                        <p class="tx-uppercase tx-11 tx-spacing-2">{{ $card->cat }}</p>
                        <p class="lh-5 mg-b-20" style="height: 110px">{{ $card->body }}</p><i>{{ $card->tag }}</i><hr>

                      </div>
                    </div><!-- d-flex -->
                  </div>
                  @else
                     <div class="carousel-item" style="border-radius: 8px;" >
                    <div class=" pd-30  d-flex align-items-center" style="background-color: {{ $card->colored }};border-radius: 8px;">
                    <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-spacing-2">{{ $card->cat }}</p>
                        <p class="lh-5 mg-b-20" style="height: 110px">{{ $card->body }}</p>
                        <i>{{ $card->tag }}</i><hr>

                      </div>
                    </div><!-- d-flex -->
                  </div>
                    @endif
                    <?php $x++; ?>
                  @endforeach
                </div>
                @else
                 <div class="media-body">
                    <h3 class="card-profile-name" style="text-transform: capitalize;">User Has No Cards at the moment</h3>


                    <p class="mg-b-0" style="height: 100px">Cards help us post our daily life. They help other people get to know who your. Lets me hope {{ $groupadmin->uname }} will think about posting one </p><br>

                  </div>




                @endif
              </div>
              </div>

                <div class="media-body">
                    <h3 class="card-profile-name" style="text-transform: capitalize;">{{ $groupadmin->fname }}&nbsp;{{$groupadmin->lname }}</h3>
                    <p class="card-profile-position">Currently attends: <a href="https://deepcodeplus.com">{{ $groupadmin->uname }}</a></p>
                    <p class="card-profile-position">Lives Around : {{ $groupadmin->city }}&nbsp;{{ $groupadmin->country }}</p>

                    <p class="mg-b-0" style="height: 100px">{{ $groupadmin->about }}</p><br>

                      <div class="card-footer">
                 <a href="#aboutuser">Edit Profile</a>
                <div>

                  <a href="">Profile Settings</a>
                </div>
              </div><!-- card-footer -->
                  </div><!-- media-body -->
              </div>
          </div>
      </div>

              <hr>

<!------------------------------------Friend Requests---------------------->
<div style="padding: 10px;">
@if(count($groupadmin->post))
@foreach($groupadmin->post->sortByDesc('updated_at') as $post)
<div class="row " style="background: #E9EBEE; padding:10px; border-radius: 8px;"><!-------Post comment-->


<div class="col-2 col-lg-2">
<a href="userabout.php"> <img style="margin-top: 7px; " src="{{ URL::to('/') }}/storage/users/profilepics/{{ $post->user->userprofile->propic }}" alt="" class="profile-photo-md"/></a></div>
<div class="col-7 col-lg-9">

<div style="padding:5px; "  > <a href="/user-about">{{ $post->user->uname}}</a>&nbsp;&nbsp; <a style="color:#343A40; " href="{{ route('userchurchprofile', ['id'=>$post->user->church->id,'name' => $post->user->church->name])}}">{{ $post->user->church->name }}</a><br style="line-height:2px;"><span style="color: #4662D4;"> {{ $post->created_at->format('D d M Y | h:i a') }}</span></div>
</div>
<div class="col-2 col-lg-1"  style="margin-top: 10px;">

<div class="dropdown dropdown-b">
<a href="" style="align-content: center;" class="header-notification text-center" data-toggle="dropdown">
<i class="icon ion-android-more-vertical"></i>

</a>
<div class="dropdown-menu" style="width: 40px;  margin-left: -150px">
<div class="dropdown-list" >
<nav class="nav dropdown-nav" >
<a href="#sharenewsfeed" data-toggle="modal" data-target="#sharenewsfeed" class="nav-link"><i class="icon ion-share"></i>Share</a>
<a href="#editpost"  data-toggle="modal" data-target="#editpost" class="nav-link"><i class="icon ion-edit"></i>Edit</a>
<a href="#"   class="nav-link"><i class="icon ion-image"></i>Add Image</a>
<a href="" class="nav-link"><i class="icon ion-eye"></i>Hide</a>
<a href="" class="nav-link"><i class="icon ion-trash-b"></i>Delete</a>
<a href="" class="nav-link"><i class="icon ion-arrow-shrink"></i>Report Post</a>

</nav>
</div><!-- dropdown-list -->
</div><!-- dropdown-menu-right -->
</div><!-- dropdown -->
</div>
</div><br>

<p class="timeline-text">{{ $post->body }}</p>

@if($post->postimage->count())
<div class="row mg-b-15">

@if($post->postimage->count() == 1)
@foreach($post->postimage as $postimage)
@if($postimage->image_ext == 'mp4')
<video class="post-video" controls> <source src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" type="video/mp4"> </video>
@elseif($postimage->image_ext == 'mp3')

<audio controls id="player" style="width: 100%;padding: 4px;">
  <source src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" type="audio/mpeg">
  <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default />
  Your browser does not support HTML5 audio.
</audio>
@else
<div class="col-12 col-lg-12" style="padding: 5px;">
<a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"><img src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" style="height: 300px; width: 100%; object-fit: cover; object-position: center;" class="img-fluid "  alt=""></a>
</div><!-- col-6 -->
@endif

@endforeach

@elseif($post->postimage->count()  == 2)
@foreach($post->postimage as $postimage)

<div class="col-6 col-lg-6" style="padding: 5px;">
<a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"><img src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" style="height: 200px; width: 100%; object-fit: cover; object-position: center;" class="img-fluid "  alt=""></a>
</div><!-- col-6 -->
@endforeach
@else($post->postimage->count()  > 2)

 <?php $x = 0; ?>
@foreach($post->postimage->take(4) as $postimage)
@if ($x == 3)
<div class="col-6 col-lg-6 image-box" style="padding: 5px;">

<a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"  style="height: 200px; width: 100%; object-fit: cover; object-position: center;">
<img class="image-box__background" src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" style="height: 200px; width: 100%; object-fit: cover; object-position: center; margin-top: 5px;" class="img-fluid "  alt=""></a>


   <div class="image-box__overlay"></div>
  <div class="image-box__content">
   <a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"><h5><br>Load More <br>{{$post->postimage->count() - 4 }}</h5><br>
    <h1><i style="font-size: 50px" class="fa fa-align-center"></i></h1><br></a>

  </div>
</div><!-- col-6 -->

@else
<div class="col-6 col-lg-6" style="padding: 5px;">
<a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"><img src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" style="height: 200px; width: 100%; object-fit: cover; object-position: center;" class="img-fluid "  alt=""></a>
</div><!-- col-6 -->

 @endif
 <?php $x++; ?>
@endforeach



@endif

@foreach($post->postimage as $postimage)
<div id="{{ $postimage->id }}" class="modal fade effect-scale">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
<div id="carousel11" class="carousel slide br-2" data-ride="carousel">
<ol class="carousel-indicators indicators-bottom-left">
<li data-target="#carousel11" data-slide-to="0" class="active"></li>
<li data-target="#carousel11" data-slide-to="1"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<figure class="overlay">
<img src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" class="img-fluid" alt="">
<figcaption class="overlay-body d-flex align-items-end justify-content-center">
<div class="img-option img-option-sm">
<a href="#" class="img-option-link"><div><i class="icon ion-android-share-alt"></i></div></a>
<a href="#" class="img-option-link"><div><i style="color: #8DC63F" class="icon ion-thumbsup"></i>&nbsp;1</div></a>
<a href="#" class="img-option-link"><div><i style="color: red" class="fa fa-thumbs-down"></i>&nbsp;1</div></a>
<a href="#" class="img-option-link"><div><i class="fa fa-download"></i>&nbsp;1</div></a>
<a href="#" class="img-option-link"><div><i class="icon ion-trash-a"></i>&nbsp;</div></a>
</div>
</figcaption>

</figure>
</div>



</div><!-- carousel-inner -->
<a class="carousel-control-prev" href="#{{ $postimage->id - 1 }}" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#{{ $postimage->id + 1 }}" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div><!-- carousel -->

</div><!-- modal-content -->
</div><!-- modal-dialog -->
</div><!-- modal -->
@endforeach
<br>
</div><!-- row -->
@endif

<hr>
<p class="tx-10 mg-b-0" style="font-size: 12px"><a href=""><i style="color: #8DC63F"  class="icon ion-thumbsup"></i>&nbsp;&nbsp; 13</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><i style="color: red" class="fa fa-thumbs-down"></i>&nbsp;&nbsp; 0</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" >&nbsp;&nbsp;<i  class="fa fa-gavel tx-purple"></i> &nbsp;{{ $post->postcomment->count() }} &nbsp;Comments</a></p>
<hr>



@include('front.timeline.comments')

@include('front.timeline.commentpost')

@endforeach
</div>

@else
<h4 style="text-align: center; color:#ABB1BA ">User has No Posts Yet</h4>
@endif


                 </div><!-- timeline-body -->
                </div><!-- timeline-item -->




              </div><!-- timeline-group -->
            </div><!-- card -->
          </div><!-- col-9 -->
        </div>



        </div><!-- row -->





      </div><!-- container -->
    </div><!-- churchgram-mainpanel -->

@include('front.includes.chatbox')
@endsection
