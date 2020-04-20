@extends('layouts.church')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')
<div class="churchgram-mainpanel">
	<div class="container">
		<div class="churchgram-pageheader">
		<ol class="breadcrumb churchgram-breadcrumb">
		<li class="breadcrumb-item"><a href="/">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
		</ol>
		<h6 class="churchgram-pagetitle">@yield('title')</h6>
		</div><!-- churchgram-pageheader -->





	</div>
</div>


@endsection
