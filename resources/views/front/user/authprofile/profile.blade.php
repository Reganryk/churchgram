@extends('layouts.user')
@section('title', Auth::user()->uname)
@section('content')

@include('front.user.authprofile.profilehead')


    <div class="churchgram-mainpanel">
      <div class="container">

        <div class="row row-sm">
          <div class="col-md-3">
            @include('front.user.userleftnav')
          </div>
          <div class="col-md-6">
            <div class="card card-profile">
              <div class="card-body">
                <div class="media btn-br" >





                <div class="media-body" >
                <div id="carousel12" class="carousel slide" data-ride="carousel">

                @if(count($usercards))
                <ol class="carousel-indicators">
                  <?php $x = 0; ?>
                      @foreach($usercards as $card)
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
                      @foreach($usercards as $card)
                      @if ($x == 0)
                    <div class="carousel-item active"  style="border-radius: 8px;">
                    <div class=" pd-30  d-flex align-items-center"   style="background-image: url({{ URL::to('/') }}/storage/users/banners/{{ Auth::user()->userprofile->banner}}); border-radius: 8px;" >
                    <div class="tx-white" >
                        <p class="tx-uppercase tx-11 tx-spacing-2">{{ $card->cat }}</p>
                        <p class="lh-5 mg-b-20" style="height: 110px">{{ $card->body }}</p><i>{{ $card->tag }}</i><hr>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                          <a href="#createcard" data-toggle="modal" data-target="#createcard" class="tx-white-8 hover-white pd-x-5">Create Card</a>
                        </nav><hr>
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
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                          <a href="#createcard" data-toggle="modal" data-target="#createcard" class="tx-white-8 hover-white pd-x-5">Create Card</a>
                        </nav><hr>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                    @endif
                    <?php $x++; ?>
                  @endforeach
                </div>
                @else
                 <div class="media-body">
                    <h3 class="card-profile-name" style="text-transform: capitalize;">Create your First Card</h3>


                    <p class="mg-b-0" style="height: 100px">Well your first card is your first cut. Create your card, share your testimony,inspiration, prayer request. </p><br>

                  </div>



                 <a href="#createcard" data-toggle="modal" data-target="#createcard" class="btn btn-primary btn-teal btn-br btn-block">Create Card</a>
                @endif
              </div>
              </div>







                  <div class="media-body">
                    <h3 class="card-profile-name" style="text-transform: capitalize;">{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</h3>
                    <p class="card-profile-position">Currently attends: <a href="https://deepcodeplus.com">{{ Auth::user()->church->name }}</a></p>
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




@include('front.includes.insertpost')
<!------------------------------------Friend Requests---------------------->


@foreach(Auth::user()->post as $post)
<div class="row " style="background: #E9EBEE; padding: 4px; border-radius: 8px;"><!-------Post comment-->


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
   <a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"><h5><br>Load More</h5><br>
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
<p class="tx-10 mg-b-0" style="font-size: 12px"><a href="{{ route('userpostlike',['id'=>$post->id]) }}" id="{{ $post->id }}like" ><i style="color: #8DC63F"  class="fa fa-thumbs-up"></i>&nbsp;&nbsp;{{ $post->postlike->count() }}</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><i style="color: red" class="fa fa-thumbs-down"></i>&nbsp;&nbsp;{{ $post->postlike->count() }}</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" >&nbsp;&nbsp;<i  class="fa fa-gavel tx-purple"></i> &nbsp;{{ $post->postcomment->count() }} &nbsp;Comments</a></p>

 <script>
  jQuery(document).ready(function(){
    jQuery('#{{ $post->id }}like').click(function(e){
    e.preventDefault();
    var this_ = $(this)
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({

    success:function(data){
      $('{{ $post->id }}like').removeClass('btn-primary ');
      $('#{{ $post->id }}like').addClass('btn-default disabled');
      $('#{{ $post->id }}like').html('{{ $post->postlike->count() }} + 1 ');
    }
    })

    })
  });
</script>
<hr>



@include('front.timeline.comments')

@include('front.timeline.commentpost')

@endforeach


                   <!------------------------------------Friend Requests---------------------->




 </div><!-- timeline-body -->
                </div><!-- timeline-item -->




              </div><!-- timeline-group -->
            </div><!-- card -->




              </div><!-- card-body -->

            </div><!-- card -->




          </div><!-- col-8 -->

          <div class="col-md-3 mg-t-20 mg-lg-t-0">
     @include('front.user.authprofile.rightnav')
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
@endsection
