
    <div class="churchgram-header ">
      <div class="container  churchgram-sticky-header">
        <div class="churchgram-header-left">
          <h3 class="churchgram-logo1"><a href="{{ route('timeline')}}">Churchgram<span>.</span></a></h3>

          <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
        </div><!-- churchgram-header-left -->
        <div class="churchgram-header-right">

            <!-------------------------------------dropdown msg---------------------->
               <div class="dropdown dropdown-a" style="border-radius: 8px;">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-funnel"></i>
              <span class="indicator a-indicator"></span>
            </a>
            <div class="dropdown-menu" style="width: 300px;  margin-right: -40px">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Radio List</h6>
                <div>
                  <a >Play Your Favorite List</a>
                </div>
              </div><!-- dropdown-menu-header -->



              <div class="dropdown-list">
                <!-- loop starts here -->
                 <div class="scrollbarradiodrop" id="mainscroll">
                <a href="messages.php" class="dropdown-link">
                  <div class="media">
                    <img src="images/users/regan/profilepic/1.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="messages.php" class="dropdown-link">
                  <div class="media">
                    <img src="images/users/regan/profilepic/3.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="messages.php" class="dropdown-link read">
                  <div class="media">
                    <img src="images/users/regan/profilepic/2.jpg" alt="">
                    <div class="media-body">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="messages.php" class="dropdown-link read">
                  <div class="media">
                    <img src="images/users/regan/profilepic/4.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-list-footer">
                  <a href="/useronlineradiolist"><i class="fa fa-angle-down"></i> Show All Radios</a>
                </div>
              </div><!-- dropdown-list -->
            </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->


  <!-------------------------------------Friend Requests---------------------->
           <div class="dropdown dropdown-a">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-person-add"></i>
              @if( count(Auth::user()->usertwinsreq->where('is_confirmed',False)))
              <span class="indicator a-indicator"></span>
              @else
              <span class="indicator d-indicator"></span>
              @endif
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Twin Requests</h6>
                <div>
                  <a href="">Mark All as Read</a>

                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-list">
                <div class="scrollbarradiodrop" id="mainscroll">
                <!-- loop starts here -->
                @foreach(Auth::user()->usertwinsreq->where('is_confirmed',False) as $twin)
                <div class="dropdown-link">
                  <div class="media">
                    <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $twin->usertwin->userprofile->propic}}" alt="">
                    <div class="media-body">

                      <div class="media-body">
                      <a href="{{ route('userprofileview', ['id'=>$twin->usertwin->id, 'uname'=>$twin->usertwin->uname])}}">{{ $twin->usertwin->uname }}</a>

                      <p><a href="{{ route('userchurchprofile', ['id'=>$twin->usertwin->church->id,'name' => $twin->usertwin->church->name])}}" style="color: #42433E">{{ $twin->usertwin->church->name }}</a> <br>
                      <span>{{ $twin->created_at->format('D d M Y | h:i a') }} </span></p>

                         <a style=" width: 80px;" id="{{ $twin->usertwin->uname }}twin" class="btn btn-sm btn-br btn-warning " href="{{ route('usertwinuser', ['uname' => $twin->usertwin->uname]) }}">Reject</a>

                        <a style="margin-left: 10px; width: 80px;" id="{{ $twin->usertwin->uname }}twin" class="btn btn-sm btn-br btn-primary " href="{{ route('usertwinuser', ['uname' => $twin->usertwin->uname]) }}">Twin</a>
                      </div><!-- media-body -->



                    </div>

                  </div><!-- media -->

                  </div>

                @endforeach
              </div>


                <div class="dropdown-list-footer">
                  <a href="user/friendrequestlist"><i class="fa fa-angle-down"></i> Show All Friend Request</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->


      <!-------------------------------------dropdown msg---------------------->
               <div class="dropdown dropdown-a">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-chatboxes"></i>
              <span class="indicator a-indicator"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Messages</h6>
                <div>
                  <a href="">Mark All as Read</a>

                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-list">
                <!-- loop starts here -->
                <a href="messages.php" class="dropdown-link">
                  <div class="media">
                    <img src="images/users/regan/profilepic/1.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="messages.php" class="dropdown-link">
                  <div class="media">
                    <img src="images/users/regan/profilepic/3.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="messages.php" class="dropdown-link read">
                  <div class="media">
                    <img src="images/users/regan/profilepic/2.jpg" alt="">
                    <div class="media-body">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="messages.php" class="dropdown-link read">
                  <div class="media">
                    <img src="images/users/regan/profilepic/4.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-list-footer">
                  <a href="/user-message-list"><i class="fa fa-angle-down"></i> Show All Messages</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->




           <!-------------------------------------dropdown notofications---------------------->
          <div class="dropdown dropdown-b">
            <a href="" onclick="markNotificationAsRead('{{ count(Auth::user()->unreadNotifications) }}')"   class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bell"></i>
              @if(count(Auth::user()->unreadNotifications))
              <span class="indicator a-indicator"></span>
              @else
               <span class="indicator d-indicator"></span>
               @endif
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Notifications</h6>
                <div>
                  <a href="">Mark All as Read</a>

                </div>
              </div><!-- dropdown-menu-header -->

              <div class="dropdown-list">
                <div class="scrollbarradiodrop" id="mainscroll">
                <!-- loop starts here -->
                 @foreach(Auth::user()->notifications as $notify)
                  @include('front.notify.'.snake_case(class_basename( $notify->type)))
                  @endforeach
              </div><!-- dropdown-list -->
              <div class="dropdown-list-footer">
                  <a href="/usernotifications"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                </div>
            </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              @if(is_null(Auth::user()->userprofile->propic))
               <img src="{{ asset('uploads/user/profilepics/def.jpg')}}" alt="">
              @else
              <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic }}" alt="">
              @endif
              <span>{{ Auth::user()->uname }}</span>
              <i class="fa fa-angle-down"></i>
            </a>


            <div class="dropdown-menu " >
              <nav class="nav" >

                <a style="width: 500px !important;" href="{{ route('userprofile',[ 'uname' =>str_slug(Auth::user()->uname )])}}" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="/usereditprofile" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="{{ route('userhistory',[ 'uname' =>str_slug(Auth::user()->uname )])}}" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                <a href="/useraccountsettings" target="_blank" class="nav-link"><i class="icon ion-ios-gear"></i>Account Settings</a>
                <a class="nav-link"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         <i class="icon ion-power"></i>{{ __('Sign Out') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- churchgram-header -->





    <div class="churchgram-navbar ">
      <div class="container">
        <div class="container-nav">
        <ul class="nav" style="background: #2A675B">

              <li class="nav-item">
            <a class="nav-link" href="{{ route('timeline')}}">
              <i class="icon ion-ios-home" style="color: #fff;"></i>
              <span >Home</span>
            </a>

          </li>

          <li class="nav-item with-sub">
            <a class="nav-link" >
              <i class="icon ion-ios-person" style="color: #fff;"></i>
              <span class="highlight">Groups</span>
            </a>
               <div class="sub-item">
              <ul>

                <li><a href="{{ route('allgroups')}}">All Groups</a></li>
                <li><a href="{{ route('user.joinedgroups')}}">Joined Groups</a></li>
                <li><a href="#creategroup" data-toggle="modal" data-target="#creategroup">Create Group</a></li>

              </ul>
            </div><!-- sub-item -->

          </li>
            <li class="nav-item with-sub">
            <a class="nav-link">
              <i class="icon ion-ios-lightbulb" style="color: #fff;"></i>
              <span class="highlight">Churches</span>
            </a>
             <div class="sub-item">
              <ul>
                <li><a href="{{ route('allchurches')}}">All Churches</a></li>
                <li><a href="{{ route('mychurches')}}">My Churches</a></li>
                @if(Auth::user()->churchreg)
                @if(Auth::user()->churchreg->status == 'new' )
                <li><a href="{{ route('registerchurch')}}">Edit Your Application</a></li>
                @elseif(Auth::user()->churchreg->status == 'approve')
                 <li><a target="_blank" href="/church" nofollow >Church Dashboard</a></li>
                @endif
                @else
                  <li><a href="{{ route('registerchurch')}}">Register Church</a></li>
                @endif


              </ul>
            </div><!-- sub-item -->

          </li>


             <li class="nav-item with-sub ">
            <a class="nav-link">
              <i class="icon ion-music-note" style="color: #fff;"></i>
              <span class="highlight">Music</span>
            </a>
             <div class="sub-item">
              <ul>
                <li><a href="{{ route('allmusic')}}">All Music</a></li>
                <li><a href="{{ route('user.playlist', ['uname'=>Auth::user()->uname])}}">My Playlists</a></li>
                 @if(Auth::user()->musicreg)
                  @if(Auth::user()->churchreg->status == 'new')
                <li><a href="{{ route('registermusic')}}">Edit Your Application</a></li>
                  @elseif(Auth::user()->churchreg->status == 'approve')
                   <li><a target="_blank" href="/music">My Dashboard</a></li>
                 @endif
                 @else
                 <li><a href="{{ route('registermusic')}}">Musician Register!</a></li>

                 @endif

              </ul>
            </div><!-- sub-item -->
          </li>
              <li class="nav-item with-sub ">
            <a class="nav-link">
              <i class="icon ion-ios-barcode" style="color: #fff;"></i>
              <span class="highlight">Radios</span>
            </a>
             <div class="sub-item">
              <ul>
                <li><a href="/all-radios">All Radios</a></li>
                <li><a href="/user-radios">My Radios</a></li>
                <li><a href="/main-radio">Churchgram Radio</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>
           <li class="nav-item with-sub ">
            <a class="nav-link">
              <i class="icon ion-social-rss" style="color: #fff;"></i>
              <span class="highlight">Live Tv</span>
            </a>
             <div class="sub-item">
              <ul>
                <li><a href="/all-events">Live Stations</a></li>
                <li><a href="/user-events">My Stations</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>
            <li class="nav-item with-sub ">
            <a class="nav-link" >
              <i class="icon ion-social-usd" style="color: #fff;"></i>
              <span class="highlight"> Alms</span>
            </a>
             <div class="sub-item">
              <ul>
                <li><a href="{{ route('userquickalms') }}">Quick Alms</a></li>
                <li><a href="{{ route('useralms') }}">My Alms</a></li>
                <li><a href="{{ route('useralmsettings') }}">Alms Settings</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>
          <li class="nav-item with-sub ">
            <a class="nav-link ">
              <i class="icon ion-ios-gear" style="color: #fff;"></i>
              <span class="highlight">Me</span>
            </a>
             <div class="sub-item">
              <ul>
                <li><a href="#sharechurchgram" data-toggle="modal" data-target="#sharechurchgram">Share Churchgram</a></li>
                <li><a href="/user-account-settings">Account Settings</a></li>
                <li><a href="#becomeagent" data-toggle="modal" data-target="#becomeagent">Become Agent</a></li>
                <li><a href="#creategroup" data-toggle="modal" data-target="#creategroup">Create Group</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>



        </ul>
      </div>
      </div><!-- container -->
    </div><!-- churchgram-navbar -->
