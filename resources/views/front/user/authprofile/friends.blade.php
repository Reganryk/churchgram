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
  <div class="churchgram-card-title">All My Friends</div>
  <div class="timeline-item timeline-day" style="padding: 10px;">
  <div class="timeline-time">&nbsp;</div>
  </div><!-- timeline-item -->
  <div class="scrollbar" id="mainscroll1">
  <div class="timeline-item" style="padding: 20px;"><hr>


  <div class="friend-list">
  <div class="row">
  @foreach(Auth::user()->usertwins->where('is_confirmed', True) as $twin)
  <div class="col-md-6 col-sm-6">
  <div class="friend-card">
  <img style="height: 150px; width: 100%" src="{{ URL::to('/') }}/storage/users/banners/{{ $twin->usertwin->userprofile->banner}}" alt="profile-cover" class="img-responsive cover" />
  <div class="card-info">
  <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $twin->usertwin->userprofile->propic}}" alt="user" class="profile-photo-lg" />
  <div class="friend-info">
  <h5><a href="timeline.html" class="profile-link">{{ $twin->usertwin->uname }}</a></h5>
  <p>Member at <a href=""> {{ $twin->usertwin->church->uname }}</a></p>

  <a href="{{ route('useruntwinuser', ['user_twin' => $twin->usertwin->id ]) }}" id="{{ $twin->usertwin->uname }}" class="btn btn-outline-secondary btn-sm btn-br">Untwin</a>
  </div>
  </div>
  </div>
  </div>


<script>
jQuery(document).ready(function(){
  jQuery('#{{ $twin->usertwin->una }}').click(function(e){
     e.preventDefault();
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url:"{{ route('useruntwinuser', ['uname' => $twin->usertwin->uname ]) }}",
        success:function(data){
          $('#{{ $twin->usertwin->uname }}').removeClass('btn-primary ');
          $('#{{ $twin->usertwin->uname }}').addClass('btn-default disabledclick');
          $('#{{ $twin->usertwin->uname }}').html('Twinn');
       }
    })

  })
});
</script>
  @endforeach
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













