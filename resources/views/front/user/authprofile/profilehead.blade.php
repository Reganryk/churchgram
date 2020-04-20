
       <div class="timeline">

            <div class="timeline-cover image-box" style="background: url({{ URL::to('/') }}/storage/users/banners/{{ Auth::user()->userprofile->banner}}) no-repeat; background-position: center; background-size: cover; ">
              <div class="image-box__overlay pull-right" style="border-radius: 8px; height: 35px; width: 130px;" >
                          <span style="font-size: 18px;"> &nbsp;&nbsp;&nbsp;Change Banner</span>
                          <form action="{{ route('uploadbanner')}}" method="Post"enctype="multipart/form-data">
                          {{ csrf_field() }}
                           <input type="file" class="fileuploadpp" name="banner" onchange='{this.form.submit();}'>
                         </form>
                       </div>


          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="container">
            <div class="row">
              <div class="col-md-3" style="margin-bottom: 130px; margin-left: 40px;">
                <div class="profile-info image-box" >

                  <img style="border-radius: 100%;height: 200px; width: 200px;object-fit: cover; object-position: center;" src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic}}" alt="" class="img-responsive profile-photo"  />
                        <div class="image-box__overlay" style="border-radius: 100%; height: 50px; width: 50px;" >
                          <img style="border-radius: 100%;height: 50px; width: 50px;object-fit: cover; object-position: center;" src="{{ asset('frontend/images/10.png')}}">
                          <form action="{{ route('uploadavatar')}}" method="Post"enctype="multipart/form-data">
                          {{ csrf_field() }}
                           <input type="file" class="fileuploadpp" name="propic" onchange='{this.form.submit();}'>
                         </form>
                       </div>


                  <h3 style="text-align: center; text-transform: capitalize;">{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</h3>
                  <p class="text-muted"></p>
                </div>
              </div>
              <div class="col-md-9" style="background: #1B84E7; border-radius:10px;margin-left: 20px; ">
             <ul class="list-inline profile-menu">
                  <li><a href="{{ route('userprofile',[ 'uname' =>str_slug(Auth::user()->uname )])}}" class="active" >About</a></li>
                  <li><a href="{{ route('usergallery',[ 'uname' =>str_slug(Auth::user()->uname )])}}">Gallery</a></li>
                  <li><a href="{{ route('userfriends',[ 'uname' =>str_slug(Auth::user()->uname )])}}" >Friends</a></li>
                   <li><a href="{{ route('userhistory',[ 'uname' =>str_slug(Auth::user()->uname )])}}">History</a></li>
                </ul>
                <ul class="follow-me list-inline">

                  <li>

                       <div class="dropdown dropdown-b">
            <a href="" style="align-content: right;" class="header-notification1" data-toggle="dropdown">
              <i class="icon ion-android-more-vertical"></i>

            </a>
            <div class="dropdown-menu" style="width: 40px;  margin-left: -150px">
              <div class="dropdown-list" >
              <nav class="nav dropdown-nav" >
                <a href="#sharenewsfeed" data-toggle="modal" data-target="#sharenewsfeed" class="nav-link"><i class="icon ion-share"></i>Share</a>
                <a href="#editpost"  data-toggle="modal" data-target="#editpost" class="nav-link"><i class="icon ion-edit"></i>Edit</a>
                <a href="#"   class="nav-link"><i class="icon ion-image"></i>Add Image</a>
                <a href="" class="nav-link"><i class="icon ion-eye"></i>Hide</a>
                <a href="" class="nav-link"><i class="icon ion-trash-b"></i>Delete</a>
                <a href="" class="nav-link"><i class="icon ion-arrow-shrink"></i>Report Post</a>

              </nav>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
                  </li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->
        </div>

              <style type="text/css">

        @media (min-width: 767px) {
       .hidden-cd {
         display: none;
       }
    }

        </style>

         <div class="navbar-mobile hidden-cd" style="position: absolute;">

             <div class="profile-info image-box" >

                  <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic}}" alt="" class="img-responsive profile-photo" />
                        <div class="image-box__overlay" style="border-radius: 100%; height: 50px; width: 50px;" >
                          <img style="border-radius: 100%;height: 50px; width: 50px;object-fit: fill; object-position: center;" src="{{ asset('frontend/images/10.png')}}">
                          <form action="{{ route('uploadavatar')}}" method="Post"enctype="multipart/form-data">
                          {{ csrf_field() }}
                           <input type="file" class="fileuploadpp" name="propic" onchange='{this.form.submit();}'>
                         </form>
                       </div>


                  <h3 style="text-align: center; text-transform: capitalize;">{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</h3>
                  <p class="text-muted"></p>
                </div>
            <div class="mobile-menu">
                   <ul class="list-inline profile-menu" style="display: inline-flex; margin-bottom: 5px;">
                  <li><a href="{{ route('userprofile',[ 'uname' =>str_slug(Auth::user()->uname )])}}" class="active" >About</a></li>
                  <li><a href="{{ route('usergallery',[ 'uname' =>str_slug(Auth::user()->uname )])}}">Gallery</a></li>
                  <li><a href="{{ route('userfriends',[ 'uname' =>str_slug(Auth::user()->uname )])}}" >Friends</a></li>
                   <li><a href="{{ route('userhistory',[ 'uname' =>str_slug(Auth::user()->uname )])}}">History</a></li>
                </ul><br>

            </div>
          </div><!--Timeline Menu for Small Screens End-->
      </div>
    </div>
  </div>
  <br>
