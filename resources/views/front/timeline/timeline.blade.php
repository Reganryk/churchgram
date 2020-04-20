@extends('layouts.user')
@section('title', 'The best Christian Social Media Welcome'. Illuminate\Support\Str::title(Auth::user()->uname))
@section('content')

@include('front.includes.leftnav')
<div class="col-md-5"  style="background: #fff; border-radius: 8px;">

<div class="scrollbar" id="mainscroll1">
<div class="timeline-item" style="padding: 5px;"><hr>

<div class="col-md-12">
@include('front.timeline.posts')

</div>


</div>
</div>
</div>

@include('front.includes.sidenav')
@include('front.includes.popups')
@include('front.includes.chatbox')
@endsection
