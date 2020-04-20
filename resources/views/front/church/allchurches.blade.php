@extends('layouts.user')
@section('title', 'The best Christian Social Media Welcome'. Illuminate\Support\Str::title(Auth::user()->uname))
@section('content')


@include('front.includes.leftnav')

<div class="col-md-5"  style="background: #fff; border-radius: 8px;">

<div class="timeline-item timeline-day" style="padding: 10px;">
<div class="timeline-time">&nbsp;</div>

</div><!-- timeline-item -->
<div class="scrollbar" id="mainscroll1">
<div class="timeline-item" style="padding: 20px;"><hr>


<div class="row">


 <div class="col-md-12">
  <div style="padding: 10px; width: 100%">
      <div class="search-box1">
      <input type="text" class="form-control" placeholder="Search">
      <button class="btn btn-primary"><i class="fa fa-search"></i></button>
  </div><!-- search-box -->
</div>
</div>
<div class="col-md-12">
         <div class="people-nearby">
              <div class="">
                <div  ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1430.9622861411456!2d32.58164514422266!3d0.3180599767778936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbc0f9d74b39b%3A0x4538903dd96b6fec!2sKampala!5e1!3m2!1sen!2sug!4v1552648210495" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
              </div><h2 style="text-align: center;">Showing Churches Near You First</h2><hr>


              <div class="nearby-user">
                <div class="row">
                @foreach($churches as $church)

                  <div class="col-md-2  col-3 " style="padding: 5px; border-bottom: 1px solid #E9EBEE; border-bottom-left-radius:8px;">
                    <img style="margin-top:10%" src="{{ URL::to('/') }}/storage/church/profilepics/{{ $church->churchprofile->propic}} " alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-8 col-9 text-center" style="padding: 5px; border-bottom: 1px solid #E9EBEE; ">
                    <span><a href="{{ route('userchurchprofile', ['uname' => str_slug($church->uname)])}}" class="profile-link">{{ $church->name }} </a> - <span style="color: #1CAF9A; text-align: center;">500m away</span></span>
                    <p><span class="text-muted">Hey, we belive God is the Head of Everything join us Every Monday, Tues, Friday for prayer. </span><br><span>Pr.Jackson Pacy</span> </p>
                  </div>
                  <div class="col-md-2 col-2 hidden-xs" style="padding: 5px; border-bottom: 1px solid #E9EBEE; border-bottom-right-radius: 8px;">
                    <button style="border-radius: 8px; margin-top:30%;" class="btn btn-default pull-right btn-fill btn-sm">Twinned</button>
                  </div><hr style="color:black">


                @endforeach
            </div>
              </div>

            </div>

</div>



</div>

</div>
</div>
</div>



@include('front.includes.sidenav')
@include('front.includes.popups')
@endsection
