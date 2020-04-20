
@include('front.includes.insertpost')
<!------------------------------------Friend Requests---------------------->

@foreach($posts->sortByDesc('updated_at') as $post)

@if(!is_null($post->user_id))

@include('front.timeline.userpost.userpost')

@elseif(!is_null($post->group_id))

@include('front.timeline.grouppost.grouppost')

@elseif(!is_null($post->church_id))

@include('front.timeline.churchpost.churchpost')

@elseif(!is_null($post->music_id))

@include('front.timeline.musicpost.musicpost')

@endif

@endforeach


<!------------------------------------Friend Requests---------------------->







