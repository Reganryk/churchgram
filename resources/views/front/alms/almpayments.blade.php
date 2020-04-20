@extends('layouts.user')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')

    @include('front.includes.chatbox')
@endsection
