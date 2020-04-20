@extends('layouts.church')
@section('title', 'Welcome '.  Auth::guard('church')->user()->name )
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
   <div class="row">
          <div class="col-lg-6">
            <h3 class="tx-inverse mg-b-15">Welcome back! Tips Today</h3>
            <p class="mg-b-40">Create a card Every to make you members get more excited. Create card inform of daily devotion and other things</p>

            <h6 class="churchgram-card-title mg-b-15">Your Alms Summary</h6>
            <div class="row no-gutters">
              <div class="col-sm-6">
                <div class="card card-earning-summary">
                  <h6>Donations</h6>
                  <h1>$950</h1>
                  <span>Based on last price</span>
                </div><!-- card -->
              </div><!-- col-6 -->
              <div class="col-sm-6">
                <div class="card card-earning-summary mg-sm-l--1 bd-t-0 bd-sm-t">
                  <h6>Tithe</h6>
                  <h1>$12,420</h1>
                  <span>Based on last price</span>
                </div><!-- card -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0">
            <div class="card card-dash-headline">
              <h4>Advertise on our Site. Start Today</h4>
              <p>Advertise your Donations and Events with us. Create you Event and then Advertise of the Time Line for more People to see</p>
              <div class="row row-sm">
                <div class="col-sm-6">
                  <a href="" class="btn btn-primary btn-block">Try Now</a>
                </div><!-- col-6 -->
                <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                  <a href="" class="btn btn-success btn-block">Read Manual</a>
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->


                <div class="row row-xs mg-t-20">
          <div class="col-md-6 col-lg-3 order-lg-1">


            <div class="card card-activities pd-20 mg-t-10">
              <h6 class="churchgram-card-title">Recent Activities</h6>
              <p>Last activity was 1 hour ago</p>

              <div class="media-list">
                <div class="media">
                  <div class="activity-icon bg-primary">
                    <i class="icon ion-stats-bars"></i>
                  </div><!-- activity-icon -->
                  <div class="media-body">
                    <h6>Report has been updated</h6>
                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
                    <span>2 hours ago</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="activity-icon bg-success">
                    <i class="icon ion-trophy"></i>
                  </div><!-- activity-icon -->
                  <div class="media-body">
                    <h6>Achievement Unlocked</h6>
                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
                    <span>2 hours ago</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="activity-icon bg-purple">
                    <i class="icon ion-image"></i>
                  </div><!-- activity-icon -->
                  <div class="media-body">
                    <h6>Added new images</h6>
                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
                    <span>2 hours ago</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- media-list -->
            </div><!-- card -->


          </div><!-- col-3 -->
          <div class="col-md-6 col-lg-3 mg-t-10 mg-md-t-0 order-lg-3">
            <div class="card">
              <div class="card-body">
                <h6 class="churchgram-card-title mg-b-20">Donations Progress</h6>

                <label class="mg-b-5">Mbarara Tweheyo</label>
                <div class="progress mg-b-15">
                  <div class="progress-bar bg-warning progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label class="mg-b-5">Customer Men</label>
                <div class="progress mg-b-15">
                  <div class="progress-bar bg-primary progress-bar-xs wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label class="mg-b-5">Sula Abaliko</label>
                <div class="progress mg-b-15">
                  <div class="progress-bar bg-danger progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label class="mg-b-5">Mateka Gafude</label>
                <div class="progress mg-b-15">
                  <div class="progress-bar bg-success progress-bar-xs wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                 <label class="mg-b-5">Mateka Gafude</label>
                <div class="progress mg-b-15">
                  <div class="progress-bar bg-success progress-bar-xs wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-lg-6 mg-t-10 mg-lg-t-0 order-lg-2">
            <div class="scrollbar" id="mainscroll1">
               <div class="card card-quick-post mg-t-10">
              <h6 class="churchgram-card-title">Share Your Thoughts</h6>
              <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="What's on your mind?"></textarea>
              </div><!-- form-group -->


              <div class="form-group">
                <input type="file" name="image[]" multiple  class="form-control"/>
              </div><!-- form-group -->



              <div class="card-footer">

                <nav>
                  <a href=""><i class="icon ion-images"></i></a>
                  <a href=""><i class="icon ion-aperture"></i></a>
                  <a href=""><i class="icon ion-calendar"></i></a>
                </nav>
                 <button class="btn btn-purple">Share Post</button>
              </div><!-- card-footer -->
            </div><!-- card -->







</div>
          </div><!-- col-6 -->
        </div><!-- row -->

      </div>
    </div>

@endsection
