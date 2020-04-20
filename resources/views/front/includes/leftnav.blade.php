
<div class="churchgram-mainpanel">
<div class="container">

<div class="churchgram-pageheader">



</div><!-- churchgram-pageheader -->

<div class="row row-sm row-timeline">
<div class="col-md-3">
<div class="bd-0 hidden-xs" style="background: #fff; border-radius: 8px;">
<div class="card-header">
<ul class="nav nav-tabs card-header-tabs">
<li class="nav-item">
<a class="" href="#dashboard" disabled data-toggle="tab" style="text-align: center; color: #1B84E7; background-color: #F7F7F7">Hey &nbsp;{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}!&nbsp;&nbsp; Welcome</a>
</li>

</ul>
</div><!-- card-header -->

<div class=" bd bd-t-0">
<div class="">
<div class="tab-pane active" id="dashboard">
<!--------------------------------Latest timeline Updates------------------>
<div class="">
<div class="post-group">
<div class="scrollbarright" id="mainscroll" style="padding: 2px; text-align: left;">
   <div class="card-contact1">
            <div class="tx-center">
              <a href=""><img style="height: 150px; width: 150px; object-fit: cover; object-position: cover; border-radius: 100%" src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic }}" alt=""></a>
              <h5 class="mg-t-10 mg-b-5"><a href="" class="contact-name">{{ Auth::user()->uname }}</a></h5>
              <p>{{ Auth::user()->church->uname }}</p>
              <p class="contact-social" >
                <a href="" style="padding-right: 10px;"><i class="fa fa-facebook"></i></a>
                <a href="" style="padding-right: 10px;"><i class="fa fa-twitter"></i></a>
                <a href="" style="padding-right: 10px;"><i class="fa fa-google"></i></a>
                 <a href="" style="padding-right: 10px;"><i class="fa fa-whatsapp"></i></a>
              </p>
            </div><!-- tx-center -->
          </div><!-- card -->
  <div class="" >

</div>


         <div class="manager-left">
            <a href="" class="btn btn-contact-new"> Create Post</a>
            <nav class=""  >
          <div class=" card-people-list1  " >

              <div class="media-list sidenavmain "style="padding-left: 12%; padding-right: 12%; ">
               <div class="media" style="padding: 2px;">
                  <i style="font-size: 21px;color:#1CAF9A; margin-left: 10px;" class="icon ion-ios-bell"></i>
                  <div class="media-body">
                    <a href="notifications.php"><span  style="font-size: 16px; margin-right: 20px; color:#585959 ">News Feed</span></a>

                  </div ><!-- media-body -->
                   <a href="notifications.php"><span  style="color:#1CAF9A; ">234</span></a>

                </div><!-- media -->
              </div>

               <div class="media-list sidenavmain "style="padding-left: 12%; padding-right: 12%; ">
               <div class="media" style="padding: 2px;">
                  <i style="font-size: 21px;color:#F7941E; margin-left: 10px;" class="icon ion-chatboxes"></i>
                  <div class="media-body">
                    <a href="notifications.php"><span  style="font-size: 16px; margin-right: 20px; color:#585959 ">My Messages</span></a>

                  </div ><!-- media-body -->
                   <a href="notifications.php"><span  style="color:#F7941E; ">234</span></a>

                </div><!-- media -->
              </div>

               <div class="media-list sidenavmain "style="padding-left: 12%; padding-right: 12%; ">
               <div class="media" style="padding: 2px;">
                  <i style="font-size: 21px;color:#FF0000; margin-left: 10px;" class="icon ion-ios-bell"></i>
                  <div class="media-body">
                    <a href="notifications.php"><span  style="font-size: 16px; margin-right: 20px; color:#585959 ">Tithe or Donate</span></a>

                  </div ><!-- media-body -->
                   <a href="notifications.php"><span  style="color:#FF0000; ">234</span></a>

                </div><!-- media -->
              </div>

               <div class="media-list sidenavmain "style="padding-left: 12%; padding-right: 12%; ">
               <div class="media" style="padding: 2px;">
                  <i style="font-size: 21px;color:#662D91; margin-left: 10px;" class="icon ion-ios-lightbulb"></i>
                  <div class="media-body">
                    <a href="notifications.php"><span  style="font-size: 16px; margin-right: 20px; color:#585959 ">Churches Nearby</span></a>

                  </div ><!-- media-body -->
                   <a href="notifications.php"><span  style="color:#662D91; ">234</span></a>

                </div><!-- media -->
              </div>

               <div class="media-list sidenavmain "style="padding-left: 12%; padding-right: 12%; ">
               <div class="media" style="padding: 2px;">
                  <i style="font-size: 21px;color:#1C75BC; margin-left: 10px;" class="icon ion-android-contacts"></i>
                  <div class="media-body">
                    <a href="notifications.php"><span  style="font-size: 16px; margin-right: 20px; color:#585959 "> Twins Nearby</span></a>

                  </div ><!-- media-body -->
                   <a href="notifications.php"><span  style="color:#1C75BC; ">234</span></a>

                </div><!-- media -->
              </div>

                <div class="media-list sidenavmain "style="padding-left: 12%; padding-right: 12%; ">
               <div class="media" style="padding: 2px;">
                  <i style="font-size: 21px;color:#EF4D8B; margin-left: 10px;" class="icon ion-android-calendar"></i>
                  <div class="media-body">
                    <a href="notifications.php"><span  style="font-size: 16px; margin-right: 20px; color:#585959 ">Events Nearby</span></a>

                  </div ><!-- media-body -->
                   <a href="notifications.php"><span  style="color:#EF4D8B; ">234</span></a>

                </div><!-- media -->
              </div>

                <div class="media-list sidenavmain "style="padding-left: 12%; padding-right: 12%; ">
               <div class="media" style="padding: 2px;">
                  <i style="font-size: 21px;color:#9E1F63; margin-left: 10px;" class="icon ion-ios-barcode"></i>
                  <div class="media-body">
                    <a href="notifications.php"><span  style="font-size: 16px; margin-right: 20px; color:#585959 "> Online Radios</span></a>

                  </div ><!-- media-body -->
                   <a href="notifications.php"><span  style="color:#9E1F63; ">234</span></a>

                </div><!-- media -->
              </div>



            </div>
            </nav>
          </div>


          <div>

   <div class="manager-left"><br>
    <div class="churchgram-card-title text-center"><h5>My Groups</h5></div><hr>
            <nav class=""  >
          <div class=" card-people-list2 " >

            @foreach(Auth::user()->group as $group)
              <div class="media-list "style="padding-left: 12%; padding-right: 12%;">
                <div class="media" >
                  <img style="height: 35px; width: 35px; object-position:center; object-fit: cover; border-radius: 100%" src="{{ URL::to('/') }}/storage/group/profilepictures/{{ $group->propic}}" alt="">
                  <div class="media-body">
                    <a href="" style="font-size: 12px; margin-right: 20px;line-height: 17px; color: #585959;">{{ $group->uname}}</a>

                  </div ><!-- media-body -->
                   <a href="" data-toggle="" style="margin-right: 15px; color: #4662D4;" data-placement="bottom" title="Invite">25</a>
                </div><!-- media -->
              </div>
              @endforeach





           <div class="dropdown-list-footer">
                  <a href="#creategroup" data-toggle="modal" data-target="#creategroup"> Create a Group</a>
                </div>

            </div>
            </nav>
          </div>
          </div>



                    <div>

   <div class="manager-left"><br>
    <div class="churchgram-card-title text-center"><h5>Explore</h5></div><hr>
            <nav class=""  >
          <div class=" card-people-list1  " >

              <div class="media-list "style="padding-left: 12%; padding-right: 12%;">
                <div class="media" >
                  <i style="font-size: 25px;color:#1C75BC; margin-left: 10px;" class="icon ion-android-contacts"></i>
                  <div class="media-body">
                    <a href="" style="font-size: 13px; margin-right: 20px; color: #585959;">Register a Church</a>

                  </div ><!-- media-body -->

                </div><!-- media -->
              </div>

           <div class="media-list "style="padding-left: 12%; padding-right: 12%;">
              <div class="media" >
               <i style="font-size: 25px;color:#1C75BC; margin-left: 10px;" class="icon ion-android-contacts"></i>
                <div class="media-body">
                  <a href="" style="font-size: 13px; margin-right: 20px;  color: #585959;">Register as Musician</a>

                </div ><!-- media-body -->

              </div><!-- media -->
            </div>



            <div class="media-list "style="padding-left: 12%; padding-right: 12%;">
              <div class="media" >
              <i style="font-size: 25px;color:#1C75BC; margin-left: 10px;" class="icon ion-android-contacts"></i>
                <div class="media-body">
                  <a href="" style="font-size: 13px; margin-right: 20px;  color: #585959;">Create Analysis Report</a>

                </div ><!-- media-body -->

              </div><!-- media -->
            </div>

            <div class="media-list "style="padding-left: 12%; padding-right: 12%;">
              <div class="media" >
                <i style="font-size: 25px;color:#1C75BC; margin-left: 10px;" class="icon ion-android-contacts"></i>
                <div class="media-body">
                  <a href="" style="font-size: 13px; margin-right: 20px;  color: #585959;">Churchgram Shares</a>

                </div ><!-- media-body -->

              </div><!-- media -->
            </div>

             <div class="media-list "style="padding-left: 12%; padding-right: 12%;">
              <div class="media" >
               <i style="font-size: 25px;color:#1C75BC; margin-left: 10px;" class="icon ion-android-contacts"></i>
                <div class="media-body">
                  <a href="" style="font-size: 13px; margin-right: 20px;  color: #585959;">My Settings</a>

                </div ><!-- media-body -->

              </div><!-- media -->
            </div>

             <div class="media-list "style="padding-left: 12%; padding-right: 12%;">
              <div class="media" >
               <i style="font-size: 25px;color:#1C75BC; margin-left: 10px;" class="icon ion-android-contacts"></i>
                <div class="media-body">
                  <a href="" style="font-size: 13px; margin-right: 20px;  color: #585959;">Logout</a>

                </div ><!-- media-body -->

              </div><!-- media -->
            </div>
            <hr>
            <a href="" style="background-color: #FFFFFF !important;"> <div style="background-color: #FFFFFF !important;" class="churchgram-card-title text-center"><h6 style="background-color: #FFFFFF !important;">Churchgram For Developers</h6></div></a><hr>





            </div>
            </nav>
          </div>
          </div>


<style type="text/css">
  .sidenavmain{
    margin-top: 5px;
    border-radius: 8px;

  }

  .card-people-list1  :hover{
    background-color: #E9EBEE;
  }
</style>

<!-- page-wrapper -->
</div>
</div><!-- post-group -->
</div><!-- card -->
</div><!-- tab-pane -->



</div><!-- tab-content -->
</div><!-- card-body -->


<div class="tab-pane" id="churches1">
<div class="">
<div class="post-group">
  <div class="bd-0" style="background: #fff; border-radius: 8px;">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs text-center">
                    <li class="nav-item">
                      <a class="nav-link  active pd-y-8" href="#friendsuggets" data-toggle="tab">Friend Suggestions</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="#myplaylist" data-toggle="tab">My Music Playlist&nbsp;&nbsp; </a>
                    </li>

                  </ul>
                </div><!-- card-header -->
<div class="scrollbarright" id="mainscroll" style="padding: 10px;">




                  <div class="tab-content">

          <!--------------------------------Latest timeline Updates------------------>
      <div class="tab-pane" id="myplaylist">
          <div class="post-group" style="padding: 7px;">
            <div class="churchgram-card-title">Latest News Updates</div><hr>
              <div class="post-item">
              <span class="post-date">Today, 3:30pm</span>
              <p class="post-title"><a href="">Maybe Just Don't Drink Coffee</a></p>
              <p class="tx-12 mg-b-0"><a href="">Elisse Joson</a> San Francisco, CA</p>
              </div><!-- post-item -->
              <div class="post-item">
              <span class="post-date">Dec 21, 2017 5:00am</span>
              <p class="post-title"><a href="">What Romance Really Means After 10 Years of Marriage</a></p>
              <p class="tx-12 mg-b-10"><a href="">Elisse Joson</a> San Francisco, CA</p>
              <p class="tx-12 mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button...</p>
              </div><!-- post-item -->
              <div class="post-item">
              <span class="post-date">Dec 21, 2017 5:00am</span>
              <p class="post-title"><a href="">What Romance Really Means After 10 Years of Marriage</a></p>
              <p class="tx-12 mg-b-10"><a href="">Elisse Joson</a> San Francisco, CA</p>
              <p class="tx-12 mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button...</p>
              </div><!-- post-item -->
              <div class="post-item">
              <span class="post-date">Dec 21, 2017 5:00am</span>
              <p class="post-title"><a href="">What Romance Really Means After 10 Years of Marriage</a></p>
              <p class="tx-12 mg-b-10"><a href="">Elisse Joson</a> San Francisco, CA</p>
              <p class="tx-12 mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button...</p>
              </div><!-- post-item -->
              <div class="post-item">
              <span class="post-date">Dec 20, 2017 4:20am</span>
              <p class="post-title"><a href="">Buying organic veggies at the supermarket is a waste of money</a></p>
              <p class="tx-12 mg-b-10"><a href="">Elisse Joson</a> San Francisco, CA</p>
              <p class="tx-12 mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button...</p>
              </div><!-- post-item -->

            </div><!-- post-group -->
          </div><!-- card -->


          <div class="tab-pane active" id="friendsuggets">
            <div class="">
              <div class="post-group">
                <div class="scrollbarright" id="mainscroll" style="padding: 10px;">

                    <div class="card-people-list">
                      <div class="churchgram-card-title">People you may know</div><hr>
                      <div class="media-list">
                      @foreach($usertwinadds as $user)
                      @if($user->id != Auth::user()->id)

                      <div class="media" id="{{ $user->id }}}">
                      <img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $user->userprofile->propic}}" alt="">
                      <div class="media-body">
                      <a href="{{ route('userprofileview', ['id'=>$user->id, 'uname'=>$user->uname])}}">{{ $user->uname }}</a>
                      <p><a href="{{ route('userchurchprofile', ['id'=>$user->church->id,'name' => $user->church->name])}}" style="color: #42433E">{{ $user->church->uname }}</a></p>
                      </div><!-- media-body -->
                      <a id="{{ $user->uname }}twin" onclick="twinuserrequest()" class="btn btn-sm btn-br btn-primary " href="{{ route('usertwinuser', ['uname' => $user->uname]) }}">Twin</a>

                  <script>
                    jQuery(document).ready(function(){
                      jQuery('#{{ $user->uname }}twin').click(function(e){
                     e.preventDefault();
                     $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                      });
                      $.ajax({
                        url:"{{ route('usertwinuser', ['uname' => $user->uname]) }}",
                        success:function(data){
                          $('#{{ $user->uname }}twin').removeClass('btn-primary ');
                          $('#{{ $user->uname }}twin').addClass('btn-default disabledclick hidden');
                          $('#{{ $user->id }}}').addClass('hidden');
                       }
                      })

                     })
                  });
                  </script>
                      </div><!-- media -->

                      @endif

                      @endforeach
                      </div><!-- media-list -->
                  </div><!-- card -->


                </div>
              </div>
            </div>
          </div><!-- tab-pane -->




    </div><!-- tab-content -->
  </div><!-- card-body -->


</div>
</div>
</div>
</div><!-- tab-pane -->
</div><!-- card -->
</div>




