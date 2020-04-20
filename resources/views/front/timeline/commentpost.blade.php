<div class="post-comment">
<form class="comment_form" action="{{ route('storecomment')}}" method="POST">
    {{ csrf_field() }}

<div class="row">
<div class="col-2 col-md-2">
<img src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic }}" alt="" class="profile-photo-sm"/>
</div>
<div class="col-7 col-md-8">
<input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}"/>
<input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}"/>
<textarea type="text" id="body" rows="1" class="form-control btn-br" name="body" style="border-radius: 8px;" placeholder="Post a comment"/></textarea>
</div>
<div class="col-3 col-md-2">
<button type="submit" id="postcommentsubmit" style="border-radius: 8px;" onclick="submitpostcomment()" class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i> </button>
</div>
</div>
</form>
</div><hr>
