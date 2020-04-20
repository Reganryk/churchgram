@extends('layouts.user')
@section('title', Auth::user()->uname,'| Create Post')
@section('content')


    <div class="churchgram-mainpanel">
      	<div class="container">

        <div class="churchgram-pageheader">


        </div><!-- churchgram-pageheader -->

        <div class="row row-sm row-timeline">
          <div class="col-md-3 hidden-xs">
            @include('front.includes.cards')
            <br>
            @include('front.includes.cards')
          </div>
          	<div class="col-md-6">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden" >
          <div class="modal-body pd-0" >
            <div class="row no-gutters">

              <div class="col-lg-12 bg-white br-2">
                <div class="pd-y-20 pd-xl-x-20">

                  <div class="pd-x-20 pd-y-20">
                    @if (session('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
                @endif
                    <h3 class="tx-gray-800 tx-normal mg-b-2">Share Update!</h3>

                   <form action="{{ route('storepost')}}" method="Post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <br>
                    <div class="row">
                      <div class="col-md-2 ">
                       <div class="profile-info" >
                  @if(is_null(Auth::user()->userprofile->propic))
                  <img src="{{ asset('uploads/user/profilepics/def.jpg')}}" alt="" class="img-responsive profile-photo" />
                  @else
                  <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic}}" alt="" class="img-responsive profile-photo" />
                  @endif

                  <p class="text-muted"></p>
                </div>
                      </div>

                     <div class=" col-md-6 form-group">
                      <select type="text"  name="visible_to"  class="form-control pd-y-5" placeholder="Change who can see this Post" style="border-radius: 10px;">
                        <option disabled selected>Change who can see this Post</option>
                        <option value="public">Public</option>
                        <option value="friends">My Friends</option>
                         <option value="me">Only Me</option>

                      </select>
                                @error('visible_to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div><!-- form-group -->
                  </div>
                     <div class="form-group">
                        <textarea type="text" name="body" id="editor" style="width: 100%" placeholder="What did you have in Mind Today. No bad Language. If You Post non-chrictian content, you will stand a risk of loosing your account"></textarea>

                         <script>
             <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
                         @if ($errors->has('body'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('body') }}</strong>
                            </span>
                            @endif
                               <br>
                    </div><!-- form-group -->
                      <div class="form-group">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        </div>
                        @endif
                          <input id="postupload" type="file"  name="image[]" accept="image/*,.mp4,.mp3*" class="file" data-overwrite-initial="false"  multiple>
                      </div>

                         <script>
                           $(function(){
                              $("#postupload").click(function(){
                                 var $fileUpload = $("input[accept='.mp4' ]");
                                 if (parseInt($fileUpload.get(0).files.length) > 1){
                                    alert("You are only allowed to upload a maximum of 3 files");
                                 }
                              });
                           });
                        </script>
                   <br>
                   <div class="row">
                    <div class="col-md-12">
                    <button type="submit" id="postupload" class="btn btn-outline-secondary btn-teal btn-block mg-b-10" ><i class="fa fa-paper-plane mg-r-5"></i> Post Update</button>
                    </div>
                   </div>

                   </form>

                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->


          	</div>
          	<div class="col-md-3">
        @include('front.includes.cards')


          	</div>
          </div>
      	</div>
  	</div>
@endsection
