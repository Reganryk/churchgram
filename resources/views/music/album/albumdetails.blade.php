@extends('layouts.music')
@section('title', 'Welcome '.  Auth::guard('music')->user()->uname )
@section('content')

        <div class="manager-wrapper">
          <div class="manager-right">
            <div class="row row-sm">


    <div class="churchgram-mainpanel">
      <div class="container ">
        <div class="dash-headline-two">
          <div>
            <h4 class="tx-inverse mg-b-5">{{ $albumdetails->name }}</h4>
            <p class="mg-b-0">{{ $albumdetails->release_date  }}</p>
          </div>
          <div class="d-h-t-right">
            <div class="summary-item">
              <h1>$17</h1>
              <span>Earnings</span>
            </div>
            <div class="summary-item">
              <h1>296</h1>
              <span>Likes</span>
            </div>
            <div class="summary-item">
              <h1>296</h1>
              <span>Downloads</span>
            </div>
          </div>
        </div><!-- dash-headline-two -->



         <div class="section-wrapper mg-t-20">

          <div class="row">

@foreach($albumdetails->albumtrack as $albumtrack)
 <div class="col-lg-6" style="margin-top: 8px;">
              <div class="mail-list">

                <div class="mail-item active">
                  <div class="d-flex justify-content-between mg-b-2">
                    <div class="tx-14">
                      <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                      <a href="" class="tx-gray-500 mg-l-5"><i class="icon ion-android-attach"></i></a>
                    </div>
                    <span class="tx-12">20 Downloads</span>
                  </div><!-- d-flex -->
                  <h6 class="tx-14"><a href="" class="tx-inverse">{{ $albumtrack->title }}</a></h6>
                  <p class="tx-13 mg-b-10">{{ $albumtrack->about }}</p>

                  <audio controls id="player" style="width: 100%;padding: 4px;">
  <source src="{{ URL::to('/') }}/storage/music/albums/tracks/{{ $albumtrack->albumtrack}}" type="audio/mpeg">
  <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default />
  Your browser does not support HTML5 audio.
</audio>

                </div><!-- mail-item -->


              </div><!-- mail-list -->


  </div><!-- col-6 -->
  @endforeach
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <hr>

        <div class="report-summary-header">
          <div>
            <h4 class="tx-inverse mg-b-3">Overall Report Summary</h4>
            <p class="mg-b-0"><i class="icon ion-calendar mg-r-3"></i> January 01, 2018 - January 31, 2018</p>
          </div>
          <div>
            <a href="" class="btn btn-secondary"><i class="icon ion-ios-clock-outline tx-22"></i> Activity Logs</a>
            <a href="" class="btn btn-secondary"><i class="icon ion-ios-gear-outline tx-24"></i> Edit Settings</a>
          </div>
        </div><!-- d-flex -->

        <div class="row no-gutters dashboard-chart-one">
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>420</h1>
                <p>Total Employee</p>
              </div>
              <div>
                <div class="tx-24 mg-b-10 tx-center op-5">
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                </div>
                <label>Female (66%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-primary progress-bar-xs wd-65p" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>Male (34%)</label>
                <div class="progress">
                  <div class="progress-bar bg-danger progress-bar-xs wd-35p" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>55</h1>
                <p>Total Products</p>
              </div>
              <div>
                <div class="tx-16 mg-b-15 tx-center op-5">
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-400"></i>
                  <i class="icon ion-cube tx-gray-400"></i>
                </div>
                <label>Digital products (85%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-success progress-bar-xs wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>Non-digital products (15%)</label>
                <div class="progress">
                  <div class="progress-bar bg-warning progress-bar-xs wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>30</h1>
                <p>Total Franchise</p>
              </div>
              <div>
                <div class="tx-22 mg-b-10 tx-center op-5">
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                </div>
                <label>Local (75%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-purple progress-bar-xs wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>International (25%)</label>
                <div class="progress">
                  <div class="progress-bar bg-pink progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md col-lg-4">
            <div class="card card-revenue">
              <h6>Monthly Revenue</h6>
              <p>Calculated every 15th of the month</p>
              <h1>$32,500 <span class="tx-success">1.4% up</span></h1>
              <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
              <label>Last month: <span>$79,554</span></label>
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

        <hr>

        <div class="report-summary-header">
          <div>
            <h4 class="tx-inverse mg-b-3">Most Popular Products</h4>
            <p class="mg-b-0"><i class="icon ion-calendar mg-r-3"></i> January 01, 2018 - January 31, 2018</p>
          </div>
          <div>
            <a href="" class="btn btn-secondary">Top Rated Products</a>
            <a href="" class="btn btn-secondary">View All Products</a>
          </div>
        </div><!-- d-flex -->

        <div class="row row-sm">
          <div class="col-md-6 col-lg-4">
            <div class="card card-popular-product">
              <label class="prod-id">Product ID: #PD-1754</label>
              <h5 class="prod-name"><a href="">US 360 Home Security IP Camera Night</a></h5>
              <p class="prod-by">By: <a href="">ThmPxls Security</a></p>
              <div class="row">
                <div class="col-5">
                  <h1>1885</h1>
                  <p>Total Sales</p>
                </div><!-- col -->
                <div class="col-7">
                  <h1>$12,056</h1>
                  <p>Earnings</p>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-lg-4 mg-t-20 mg-md-t-0">
            <div class="card card-popular-product">
              <label class="prod-id">Product ID: #PD-1753</label>
              <h5 class="prod-name"><a href="">US KS-5 Junior Lite DVD Karaoke 9500</a></h5>
              <p class="prod-by">By: <a href="">ThmPxls Security</a></p>
              <div class="row">
                <div class="col-5">
                  <h1>1862</h1>
                  <p>Total Sales</p>
                </div><!-- col -->
                <div class="col-7">
                  <h1>$13,113</h1>
                  <p>Earnings</p>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-popular-product">
              <label class="prod-id">Product ID: #PD-1754</label>
              <h5 class="prod-name"><a href="">US 360 Home Security IP Camera Night</a></h5>
              <p class="prod-by">By: <a href="">ThmPxls Digital</a></p>
              <div class="row">
                <div class="col-5">
                  <h1>1799</h1>
                  <p>Total Sales</p>
                </div><!-- col -->
                <div class="col-7">
                  <h1>$11,091</h1>
                  <p>Earnings</p>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

      </div><!-- container -->
    </div><!-- churchgram-mainpanel -->






            </div><!-- row -->

            <a href="" class="btn btn-light btn-block mg-t-20">Load more Albums</a>

          </div><!-- manager-right -->
          <div class="manager-left">
            <a href="" class="btn btn-contact-new" data-toggle="modal" data-target="#createalbum">Create Album Track</a>

             @if (session('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
                @endif
            <nav class="nav">
            	@foreach(Auth::guard('music')->user()->album as $cat)
              <a href=""{{ route('music.musicalbumdetails', ['id'=>$cat->id, 'name'=>str_slug($cat->name ) ])}}" class="nav-link active">
                <span>{{ $cat->name }}</span>
                <span>{{ $cat->albumtrack->count() }}</span>
              </a>
              @endforeach




            </nav>




          </div><!-- manager-left -->
        </div><!-- manager-wrapper -->



<!----===================================================-->
    <div id="createalbum" class="modal fade effect-just-me" style="border-radius: 10px;">
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
                    <h3 class="tx-gray-800 tx-normal mg-b-5">Add a Track to {{ $albumdetails->name}}</h3>
                    <br>

                    <form action="{{ route('music.createtrack')}}" method="Post" enctype="multipart/form-data"  style="border-radius: 8px;">
                    	@csrf
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="title" class="form-control pd-y-12" placeholder="Album Name">
                    </div><!-- form-group -->
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                      <input type="date" data-toggle="tooltip-primary" data-placement="top" title="Enter Album Realease Date"  name="release_date" class="form-control pd-y-12" placeholder="Enter Album Realease Date">
                    </div><!-- form-group -->
                    </div>
                    </div>
                      <input type="hidden" name="music_id" value="{{ Auth::guard('music')->user()->id }}">

                    <input type="hidden" name="album_id" value="{{ $albumdetails->id}}">

                     <div class="form-group" id="pricetag">
                      <input type="number" name="price" class="form-control file pd-y-12" placeholder="Enter Album Price. Leave blank if its free">
                    </div><!-- form-group -->

                      <div class="form-group">
                      <textarea  class="form-control pd-y-12" maxlength="100" rows="2" name="about" placeholder="Enter Album Discription">  </textarea>
                    </div><!-- form-group -->

                      <div class="form-group">
                      <input type="file" name="trackcover" accept="image/*"  class="form-control file pd-y-12" placeholder="Album Cover">
                    </div><!-- form-group -->

                      <div class="form-group">
                      <input type="file" name="albumtrack" accept="audio/*" class="form-control file pd-y-12" placeholder="Album Cover">
                    </div><!-- form-group -->
                    <button type="submit" class="btn btn-block btn-warning">Submit Track</button>


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
