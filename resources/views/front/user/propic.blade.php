@extends('layouts.user')
@section('title', Illuminate\Support\Str::title(Auth::user()->uname).' | Enter you Profile Picture')
@section('content')

<div class="section-wrapper text-center ">

          <div class="row">

            <div class="col-sm-12 col-md-3 offset-md-4  mg-t-20 mg-md-t-0">
            	 <div>
          <label class="section-title">Add your Profile Picture</label><br>
          <p class="mg-b-10 mg-sm-b-40">A nice picture of you would work well</p>
         </div>
          <hr>
            @if(is_null(Auth::user()->userprofile->propic))

                     <form action="{{ route('uploadavatar')}}" method="Post" enctype="multipart/form-data">
                      <img src="{{ asset('uploads/user/profilepics/def.jpg')}}" alt="" class="img-responsive profile-photo" />
                        {{ csrf_field() }}
                        <input  type="file" id="post-files"  name="propic" class="custom-file-input" style="padding: 150px;" data-overwrite-initial="false" onchange='{this.form.submit();}'>
                      </form>
                  @else
                  <figure class="overlay">
               <img for="propic" src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic}}" class="img-fluid rounded-circle" alt="">
              <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                <div class="img-option">

                      <form action="{{ route('uploadavatar')}}" method="Post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input  type="file" id="post-files"  name="propic" class="custom-file-input" style="padding: 150px;" data-overwrite-initial="false" onchange='{this.form.submit();}'>
                      </form>

                </div>
              </figcaption>
            </figure>

                  @endif



             <a href="{{ route('userfinishedprofile', [ 'uname' =>str_slug(Auth::user()->uname )])}}" class="btn btn-primary btn-block">Will add it Later</a>
            </div><!-- col -->


          </div><!-- row -->
        </div><!-- section-wrapper -->
@endsection
