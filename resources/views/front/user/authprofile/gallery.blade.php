@extends('layouts.user')
@section('title', Auth::user()->uname,'| History')
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












                </div><!-- media -->
              </div><!-- card-body -->

            </div><!-- card -->



              <div class="card card-latest-activity mg-t-20">
              <div class="card-body">
              <div class="churchgram-card-title">We will only Display Photos from your Posts</div>

              <div class="timeline-item timeline-day" style="padding: 10px;">
              <div class="timeline-time">&nbsp;</div>
              </div><!-- timeline-item -->


              <div class="scrollbar" id="mainscroll1">
              <div class="timeline-item" style="padding: 20px;"><hr>



<div>

  <div>



   <div class=" row">

    @foreach(Auth::user()->postimage as $postimage)
    <div class="col-4 col-lg-4" style="padding: 5px;">
<a href="#{{ $postimage->id }}" data-toggle="modal" data-target="#{{ $postimage->id }}"><img src="{{ URL::to('/') }}/storage/users/posts/{{ $postimage->image }}" style="height: 200px; width: 100%; object-fit: cover; object-position: center;" class="img-fluid "  alt=""></a>
</div><!-- col-6 -->


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
<a class="carousel-control-prev" href="#{{ $postimage->id - 1 }}" data-target="#{{ $postimage->id -1 }}" role="button" data-slide="prev">
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


  </div>

  </div>
</div>







              </div><!-- timeline-item -->
              </div><!-- scrollbar -->
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
