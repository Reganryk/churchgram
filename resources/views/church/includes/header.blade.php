
    <div class="churchgram-header">
      <div class="container">
        <div class="churchgram-header-left">
          <h3 class="churchgram-logo"><a href="index.php">{{ Auth::user()->uname }}<span>.</span></a></h3>

          <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
        </div><!-- churchgram-header-left -->
        <div class="churchgram-header-right">
          <div class="dropdown dropdown-a">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bolt-outline"></i>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Activity Logs</h6>
                <div>
                  <a href="">Filter List</a>
                  <a href="">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-activity-list">
                <div class="activity-label">Today, December 13, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">10:15am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Purchased christmas sale cloud storage</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">9:48am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-danger"></span></div>
                    <div class="col-8">Login failure</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">7:29am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-warning"></span></div>
                    <div class="col-8">(D:) Storage almost full</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">3:21am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">1 item sold <strong>Christmas bundle</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-label">Yesterday, December 12, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">6:57am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Earn new badge <strong>Elite Author</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              </div><!-- dropdown-activity-list -->
              <div class="dropdown-list-footer">
                <a href="page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-b">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline"></i>
              <span class="indicator"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Notifications</h6>
                <div>
                  <a href="">Mark All as Read</a>
                  <a href="">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-list">
                <!-- loop starts here -->
                <a href="" class="dropdown-link">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="dropdown-link">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-link read">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-link read">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-list-footer">
                  <a href="page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="{{ URL::to('/') }}/storage/church/profilepics/{{ Auth::user()->churchprofile->propic}}" alt="">
              <span>Katherine</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="{{ route('churchaccount', ['uname' =>str_slug(Auth::user()->uname )])}}" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                <a href="/churchgram/newsfeed.php" target="_blank" class="nav-link"><i class="icon ion-ios-gear"></i>Open Newsfeed</a>
                <a href="/churchgram/index.php" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- churchgram-header -->

    <div class="churchgram-navbar active">
      <div class="container">
        <ul class="nav" style="background: #231F20">
              <li class="nav-item ">
            <a class="nav-link" href="/church">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>



          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('churchmsgs')}}">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Messages</span>
              <span class="square-8"></span>
            </a>
          </li>
             <li class="nav-item  with-sub ">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Groups</span>
            </a>
              <div class="sub-item">
              <ul>
                <li><a href="{{ route('churchgroups')}}">Groups by You</a></li>
                <li><a href="{{ route('churchaccountset')}}">Create Group</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>
              <li class="nav-item with-sub ">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span> Events</span>
            </a>
               <div class="sub-item">
              <ul>
                <li><a href="{{ route('churchevents')}}">Events by Me</a></li>
                <li><a href="{{ route('churchaccountset')}}">Create Event</a></li>

              </ul>
            </div><!-- sub-item -->

          </li>
             <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-funnel-outline"></i>
              <span>Radio</span>
            </a>
               <div class="sub-item">
              <ul>
                <li><a href="{{ route('churchradio')}}">My Radio</a></li>
                <li><a href="{{ route('churchaccountset')}}">Other Radios</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>
           <li class="nav-item with-sub ">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>My Tv</span>
            </a>
               <div class="sub-item">
              <ul>
                <li><a href="{{ route('churchtv')}}">My TV</a></li>
                <li><a href="{{ route('churchaccountset')}}">Other TVs</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>
            <li class="nav-item with-sub ">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span> Alms</span>
            </a>
               <div class="sub-item">
              <ul>
                 <li><a href="{{route('churchtithe')}}">Tithe</a></li>
                <li><a href="index2.html">Campaigns</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Settings</span>
            </a>
               <div class="sub-item">
              <ul>
                <li><a href="{{ route('churchaccountset')}}">Account Settings</a></li>
                <li><a href="{{ route('churchgroupsset')}}">Group Settings</a></li>
                <li><a href="{{ route('churcheventsset')}}">Events Settings</a></li>
                <li><a href="{{ route('churchradioset')}}">Radio Settings</a></li>
                <li><a href="{{ route('churchtvset')}}">TV  Settings</a></li>
                <li><a href="{{ route('churchalmset')}}">Alms Settings</a></li>
                <li><a href="{{ route('churchgeneralset')}}">General Settings</a></li>

              </ul>
            </div><!-- sub-item -->
          </li>



        </ul>
      </div><!-- container -->
    </div><!-- churchgram-navbar -->




