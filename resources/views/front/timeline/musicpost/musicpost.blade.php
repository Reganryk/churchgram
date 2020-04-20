<div class="row " id="{{ $post->id }}" style="background: #E9EBEE; padding: 4px; border-radius: 8px;">
<div class="col-3 col-md-2">
<a href="userabout.php"> <img style="margin-top: 7px; " src="{{ URL::to('/') }}/storage/music/profilepics/{{ $post->music->musicprofile->propic }}" alt="" class="profile-photo-md"/></a></div>
<div class="col-7 col-md-9">
<div style="padding:5px; "  > <a href="/user-about">{{ $post->music->uname }}</a>&nbsp;&nbsp; <a style="color:#343A40; " href="">{{ $post->music->recording_studio }}</a><br style="line-height:2px;"><span style="color: #4662D4;"> {{ $post->created_at->format('D d M Y | h:i a') }}</span></div>
</div>
<div class="col-2 col-md-1"  style="margin-top: 10px;">
<div class="dropdown dropdown-b">
<a href="" style="align-content: center;" class="header-notification text-center" data-toggle="dropdown">
<i class="icon ion-android-more-vertical"></i></a>
<div class="dropdown-menu" style="width: 40px;  margin-left: -150px">
<div class="dropdown-list" >
<nav class="nav dropdown-nav" >
	@if($post->music_id == Auth::user()->id)
	<a href="#sharenewsfeed" data-toggle="modal" data-target="#sharenewsfeed" class="nav-link"><i class="icon ion-share"></i>Share</a>
	<a href="#editpost"  data-toggle="modal" data-target="#editpost" class="nav-link"><i class="icon ion-edit"></i>Edit</a>
	<a href="#"   class="nav-link"><i class="icon ion-image"></i>Add Image</a>
	<a href="" class="nav-link"><i class="icon ion-eye"></i>Hide</a>
	<a href="" class="nav-link"><i class="icon ion-trash-b"></i>Delete</a>
	@else
	<a href="#sharenewsfeed" data-toggle="modal" data-target="#sharenewsfeed" class="nav-link"><i class="icon ion-share"></i>Share</a>
	<a href="" class="nav-link"><i class="icon ion-arrow-shrink"></i>Report Post</a>
	<a href="" class="nav-link"><i class="icon ion-arrow-shrink"></i>Report Post</a>
	@endif
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
 <video class="post-video" controls loop> <source style="cursor:none;" src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" type="video/mp4"> </video>
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

@if($postimage->image_ext == 'mp4')
 <video class="post-video" controls> <source src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" type="video/mp4"> </video>
@elseif($postimage->image_ext == 'mp3')

<div class="col-12 col-lg-12" style="padding: 5px;">
<audio controls id="player" style="width: 100%;padding: 4px;">
  <source src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" type="audio/mpeg">
  <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default />
  Your browser does not support HTML5 audio.
</audio>
<script type="text/javascript">
var audioplayerid = document.querySelector('#{{ $postimage->id}}');
var allAudios = document.querySelectorAll('audio');

function stopAllAudio(){
	allAudios.forEach(function(audio){
		audio.pause();
	});
}

document.querySelector('#{{ $postimage->id}}').addEventListener('click', function(){
	stopAllAudio();
	audioplayerid.play();
})
</script>
</div>
@elseif($postimage->image_ext != 'mp3' < '1')
<div class="col-12 col-lg-12" style="padding: 5px;">
<a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"><img src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" style="height: 200px; width: 100%; object-fit: cover; object-position: center;" class="img-fluid "  alt=""></a>
</div><!-- col-6 -->
@elseif($postimage->image_ext != 'mp3' > '1')
<div class="col-6 col-lg-6" style="padding: 5px;">
<a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"><img src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" style="height: 200px; width: 100%; object-fit: cover; object-position: center;" class="img-fluid "  alt=""></a>
</div><!-- col-6 -->
@endif

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
<p class="tx-10 mg-b-0" style="font-size: 12px">

	<a href="{{ route('userpostlike',['id' =>$post->id]) }}" id="{{ $post->id }}like" ><i style="color: #8DC63F"  class="fa fa-thumbs-up"></i>&nbsp;&nbsp;{{ $post->postlike->where('status', True)->count() }}</a>




&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href=""><i style="color: red" class="fa fa-thumbs-down"></i>&nbsp;&nbsp;{{ $post->postlike->where('status', False)->count() }}</a>
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

@include('front.timeline.timelinepops')
