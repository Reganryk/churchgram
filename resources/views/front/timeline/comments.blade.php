@if($post->postcomment->count())
<div class="post-comment">
<div class="scrollbarcomment" id="mainscroll">
@foreach($post->postcomment  as $comment )
<div class="row" id="postcomments" style="padding: 5px; border-bottom: 1px solid #E9EBEE; border-radius: 8px; font-size: 12px;"><!-------Post comment-->

<div class="col-2 col-md-1">
<img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $comment->user->userprofile->propic }}" alt="" class="profile-photo-sm"/>
</div>

<div class="col-10 col-md-11" style="margin-top: 7px;">
  <div style="background-color: #E9EBEE;padding-left: 7px; padding-right:7px; border-radius: 8px; ">
<span  style="margin-top: 4px; padding: 6px; "><a href="/user-about">{{ $comment->user->uname }}</a>&nbsp;&nbsp; {{ $comment->user->country }}, {{ $comment->user->city }} &nbsp;&nbsp;<span style="color: #4662D4;">{{ $comment->created_at->diffForHumans() }}</span>
</div>
</div><br>

<div class="col-2 col-md-1"></div>
<div class="col-10 col-md-11" style="padding-left: 20px;">
<span class="timeline-text">{{ $comment->body }}</span><br>
<span class="tx-10 mg-b-0" style="font-size: 12px">&nbsp;&nbsp;<a href=""><i style="color: #8DC63F"  class="icon ion-thumbsup"></i> 13</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><i style="color: red" class="fa fa-thumbs-down"></i> 0</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#reply" data-toggle="modal" data-target="#reply"><i  class="icon ion-reply tx-purple"></i>&nbsp;20 Replies</a></span>
</div>
</div>
@endforeach

</div>
</div><br>
@endif


<script type="text/javascript">
function comments(){
    $('#postcomments').load('front.timeline.comments',function () {
         $(this).unwrap();
    });
}


</script>
