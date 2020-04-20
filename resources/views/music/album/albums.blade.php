@extends('layouts.music')
@section('title', 'Welcome '.Auth::guard('music')->user()->uname  )
@section('content')

        <div class="manager-wrapper">
          <div class="manager-right">
            <div class="row row-sm">


            	@foreach($albums as $album)
              <div class="col-sm-6 col-lg-4" style="padding: 5px;">
                <div class="card-contact1">
                  <div class="tx-center">
                    <a href=""><img style="height: 200px; width: 100%; object-fit: cover;" src="{{ URL::to('/') }}/storage/music/albums/covers/{{ $album->albumcover}}" class="card-img" alt=""></a>
                    <h6 class="mg-t-10 mg-b-5" style="height: 30px;">{{ $album->name }}</h6>
                    @if(is_null($album->price))
                    <p>Album Cost: Free</p>
                    @else
                    <p>Album Cost: {{ $album->price }}</p>
                    @endif


                  <p class="contact-item">
                    <span>Album Tracks:</span>
                    <span>{{ $album->albumtrack->count() }}</span>
                  </p><!-- contact-item -->
                  <p class="contact-item">
                    <span>Downloads:</span>
                    <a href="">person1@domain.com</a>
                  </p><!-- contact-item -->
                  <p class="contact-item">
                  	 @if(is_null($album->price))
                  	  <span>Donations:</span>
                    @else
                     <span>Revenue:</span>
                    @endif

                    <a href=""></a>
                  </p><!-- contact-item -->
                </div><!-- card --><hr>
                <a href="{{ route('music.musicalbumdetails', ['id'=>$album->id, 'name'=>str_slug($album->name ) ])}}" class="btn btn-primary btn-block btn-sm">Album Details</a>
              </div><!-- col -->
          </div>
              @endforeach






            </div><!-- row -->

            <a href="" class="btn btn-light btn-block mg-t-20">Load more Albums</a>

          </div><!-- manager-right -->
          <div class="manager-left">
            <a href="" class="btn btn-contact-new" data-toggle="modal" data-target="#createalbum">Create Album</a>

             @if (session('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
                @endif
            <nav class="nav">
            	@foreach($albumcats as $cat)
              <a href="" class="nav-link active">
                <span>{{ $cat->name }}</span>
                <span>{{ $cat->album->count() }}</span>
              </a>
              @endforeach




            </nav>




          </div><!-- manager-left -->
        </div><!-- manager-wrapper -->



<!----===================================================-->
    <div id="createalbum" class="modal fade effect-just-me">
      <div class="modal-dialog modal-lg" style="width:80%;" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">
              <div class="col-md-12 bg-primary">
                 <div class="pd-y-30 pd-xl-x-30 pd-40">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>


                  <div class="pd-y-10 ">
                    <h3 class="tx-gray-800 tx-normal mg-b-5">Add Your Album</h3>
                    <br>

                    <form action="{{ route('music.createalbum')}}" method="Post" enctype="multipart/form-data" >
                    	@csrf
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control pd-y-12" placeholder="Album Name">
                    </div><!-- form-group -->
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                      <input type="url" name="link" class="form-control pd-y-12" placeholder="Enter a Link where to Read more information(Optional)">
                    </div><!-- form-group -->
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    	<select  name="albumcat_id" onchange="" class="form-control pd-y-12">
                    		<option selected="" disabled="">Choose Album Category</option>
                    		@foreach($albumcats as $cat)
                    		<option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    		@endforeach
                    	</select>

                    </div><!-- form-group -->
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                      <input type="date" data-toggle="tooltip-primary" data-placement="top" title="Enter Album Realease Date"  name="release_date" class="form-control pd-y-12" placeholder="Enter Album Realease Date">
                    </div><!-- form-group -->
                    </div>
                    </div>
                    <input type="hidden" name="music_id" value="{{ Auth::guard('music')->user()->id }}">

                     <div class="form-group" id="pricetag">
                      <input type="number" name="price" class="form-control file pd-y-12" placeholder="Enter Album Price. Leave blank if its free">
                    </div><!-- form-group -->

                      <div class="form-group">
                      <textarea  class="form-control pd-y-12" maxlength="100" rows="2" name="about" placeholder="Enter Album Discription">  </textarea>
                    </div><!-- form-group -->

                      <div class="form-group">
                      <input type="file" name="albumcover" accept="image/*" class="form-control file pd-y-12" placeholder="Album Cover">
                    </div><!-- form-group -->
                    <button type="submit" class="btn btn-block btn-warning">Submit Album</button>


                    </form>


                  </div>


                </div><!-- pd-20 -->
              </div><!-- col-6 -->

            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

@endsection
