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

    <div class="section-wrapper mg-t-20">
          <label class="section-title">User List</label>
          <p class="mg-b-20 mg-sm-b-40">A user list group for contact app and more.</p>

          <div class="row">
            <div class="col-lg-12 mg-t-20 mg-lg-t-0">
              <div class="list-group list-group-striped list-group-user">
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Marilyn Tarter</p>
                    <span>Clemson, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Belinda Connor</p>
                    <span>Los Angeles, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Theodore Gristen</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Andrew Wiggins</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->

                     <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->

                     <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->

                     <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->

                     <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->

                     <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->

                     <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
              </div><!-- list-group -->

          </div><!-- row -->
        </div><!-- section-wrapper -->


	</div>
</div>

@endsection
