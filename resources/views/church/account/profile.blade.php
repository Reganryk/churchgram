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


    <div class="row row-sm">
          <div class="col-lg-8">
            <div class="card card-profile">
              <div class="card-body">
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <h3 class="card-profile-name">Katherine Lumaad</h3>
                    <p class="card-profile-position">Executive Director at <a href="">ThemePixels, Inc.</a></p>
                    <p>San Francisco, California</p>

                    <p class="mg-b-0">A consummate human capital management professional with international training and talent management implementations experience across the entire universe...<a href="">Read more</a></p>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- card-body -->
              <div class="card-footer">
                <a href="" class="card-profile-direct">+256701026913</a><span class="btn btn-primary btn-sm">Change Whatsapp Contact<i class="fa far-user"></i></span>
                <div>
                  <a href="">Change Profile Picture</a>
                  <a href="">Change Banner</a>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->

            <ul class="nav nav-activity-profile mg-t-20">
              <li class="nav-item"><a href="" class="nav-link"><i class="icon ion-ios-redo tx-purple"></i>Share Post</a></li>
              <li class="nav-item"><a href="" class="nav-link"><i class="icon ion-image tx-primary"></i>Share Post to Group</a></li>
              <li class="nav-item"><a href="" class="nav-link"><i class="icon ion-document-text tx-success"></i>Create an Update</a></li>
            </ul><!-- nav -->
 <div class="card card-latest-activity mg-t-20">
              <div class="card-body">
                <div class="churchgram-card-title">Latest Activity</div>
              </div>
            </div>
          <

<div class="scrollbar" id="mainscroll1">
            <div class="card card-latest-activity mg-t-20">
              <div class="card-body">
                <div class="churchgram-card-title">Latest Activity</div>
                <div class="media media-author">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <h6><a href="">Katherine</a></h6>
                    <p>Timeline Post/ Group Post</p>
                  </div><!-- media-body -->
                  <span>2 hours ago</span>
                </div><!-- media -->


                <div class="row no-gutters">
                  <div class="col-md-4">
                    <a href=""><img src="http://via.placeholder.com/1024x1280" class="img-fit-cover" style="height:150px;padding: 3px;" alt=""></a>
                      <a href=""><img src="http://via.placeholder.com/1024x1280" class="img-fit-cover"  style="height:150px;padding: 3px;" alt=""></a>
                  </div><!-- col-4 -->
                  <div class="col-md-8">
                    <div class="post-wrapper">

                      <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

                    </div><!-- post-wrapper -->
                  </div><!-- col-8 -->
                </div><!-- row -->

              </div><!-- card-body -->
              <div class="card-footer">
                <a href="">Comment 50</a>
                <a href="">Likes 60</a>
                <a href="">Dislikes 100</a>
              </div><!-- card-footer -->
            </div><!-- card -->

                  <div class="card card-latest-activity mg-t-20">
              <div class="card-body">
                <div class="churchgram-card-title">Latest Activity</div>
                <div class="media media-author">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <h6><a href="">Katherine</a></h6>
                    <p>Timeline Post/ Group Post</p>
                  </div><!-- media-body -->
                  <span>2 hours ago</span>
                </div><!-- media -->


                <div class="row no-gutters">
                  <div class="col-md-4">
                    <a href=""><img src="http://via.placeholder.com/1024x1280" class="img-fit-cover" style="height:150px;padding: 3px;" alt=""></a>
                      <a href=""><img src="http://via.placeholder.com/1024x1280" class="img-fit-cover"  style="height:150px;padding: 3px;" alt=""></a>
                  </div><!-- col-4 -->
                  <div class="col-md-8">
                    <div class="post-wrapper">

                      <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

                    </div><!-- post-wrapper -->
                  </div><!-- col-8 -->
                </div><!-- row -->

              </div><!-- card-body -->
              <div class="card-footer">
                <a href="">Comment 50</a>
                <a href="">Likes 60</a>
                <a href="">Dislikes 100</a>
              </div><!-- card-footer -->
            </div><!-- card -->

                  <div class="card card-latest-activity mg-t-20">
              <div class="card-body">
                <div class="churchgram-card-title">Latest Activity</div>
                <div class="media media-author">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <h6><a href="">Katherine</a></h6>
                    <p>Timeline Post/ Group Post</p>
                  </div><!-- media-body -->
                  <span>2 hours ago</span>
                </div><!-- media -->


                <div class="row no-gutters">
                  <div class="col-md-4">
                    <a href=""><img src="http://via.placeholder.com/1024x1280" class="img-fit-cover" style="height:150px;padding: 3px;" alt=""></a>
                      <a href=""><img src="http://via.placeholder.com/1024x1280" class="img-fit-cover"  style="height:150px;padding: 3px;" alt=""></a>
                  </div><!-- col-4 -->
                  <div class="col-md-8">
                    <div class="post-wrapper">

                      <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.


                <a href="">Read More <i class="fa fa-angle-down"></i></a>

                      </p>

                    </div><!-- post-wrapper -->
                  </div><!-- col-8 -->
                </div><!-- row -->

              </div><!-- card-body -->
              <div class="card-footer">
                <a href="">Comment 50</a>
                <a href="">Likes 60</a>
                <a href="">Dislikes 100</a>
              </div><!-- card-footer -->
            </div><!-- card -->



          </div>



            <div class="card card-recommendation mg-t-20">
              <div class="card-body pd-25">
                <div class="churchgram-card-title">Member Requests</div>
                <div class="media align-items-center mg-y-25">
                  <img src="http://via.placeholder.com/500x500" class="wd-40 rounded-circle" alt="">
                  <div class="media-body mg-l-15">
                    <h6 class="tx-14 mg-b-2"><a href="">Regan Rumanzi</a></h6>
                    <p class="mg-b-0">Address: Kampala Uganda</p>
                  </div><!-- media-body -->
                  <span class="tx-12">Nov 20, 2017</span>
                </div><!-- media -->

              <div class="row">

            <div class="col-md mg-t-20 mg-md-t-0">

                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bd-t tx-center">
                  <a href="">Reply Request</a>
                </div><!-- card-footer -->
            </div><!-- col -->
          </div>
              </div><!-- card-body -->

              <div class="card-footer pd-y-12 pd-x-25 bd-t bd-gray-300">
                <a href="">More Uread Requests (2) <i class="fa fa-angle-down"></i></a>
              </div><!-- card-footer -->
            </div>
          </div><!-- col-8 -->

          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-connection">
              <div class="row row-xs">
                <div class="col-4 tx-primary">129</div>
                <div class="col-8">people viewed your profile in the past 90 days</div>
              </div><!-- row -->
              <hr>
              <div class="row row-xs">
                <div class="col-4 tx-purple">845</div>
                <div class="col-8">
                  Twinned you this Week <br>
                  <a href="">Grow Your Network</a>
                </div>
              </div><!-- row -->
            </div><!-- card -->



            <div class="card card-people-list mg-t-20">
              <div class="churchgram-card-title">People You Many Know</div>
              <div class="media-list">

                @foreach($users as $user)
                <div class="media">
                  <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $user->userprofile->propic}}" alt="">
                  <div class="media-body">
                    <a href="">{{$user->uname}}</a>
                    <p>{{$user->church->uname}}</p>
                  </div><!-- media-body -->
                   <a href="" data-toggle="{{$user->uname}}" data-placement="bottom" title="Invite"><i class="icon ion-person-add tx-20"></i></a>
                </div><!-- media -->

                     <script>
              $(function(){
                'use strict';

                // Initialize tooltip
                $('[data-toggle="tooltip"]').tooltip();

                // colored tooltip
                $('[data-toggle="{{$user->uname}}"]').tooltip({
                  template: '<div class="tooltip tooltip-purple" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                });
              </script>

                @endforeach



              </div><!-- media-list -->
            </div><!-- card -->


            <div class="card pd-25 mg-t-20">
              <div class="churchgram-card-title">Contact &amp; Personal Info</div>

              <div class="media-list mg-t-25">
                <div class="media">
                  <div><i class="icon ion-link tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Websites</h6>
                    <a href="" class="d-block">http://themepixels.me</a>
                    <a href="" class="d-block">http://themeforest.net</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-ios-telephone-outline tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Phone Number</h6>
                    <span class="d-block">+1 234 5678 910</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-ios-email-outline tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Email Address</h6>
                    <span class="d-block">yourname@sample.com</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-twitter tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Twitter</h6>
                    <a href="#" class="d-block">@themepixels</a>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- media-list -->
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->




	</div>
</div>

@endsection
