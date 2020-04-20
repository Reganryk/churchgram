<div class="bd-0 hidden-xs" style="background: #fff; border-radius: 8px;">
<div class="card-header">
<ul class="nav nav-tabs card-header-tabs">
<li class="nav-item">
<a class="" href="#dashboard" disabled data-toggle="tab" style="text-align: center; color: #1CAF9A; background-color: #F7F7F7">Hey &nbsp;{{ Auth::user()->uname }}!&nbsp;&nbsp;&nbsp; Welcome</a>
</li>

</ul>
</div><!-- card-header -->

<div class=" bd bd-t-0">
<div class="">
<div class="tab-pane active" id="dashboard">
<!--------------------------------Latest timeline Updates------------------>
<div class="">
<div class="post-group">
<div class="scrollbarright" id="mainscroll" style="padding: 2px;">
   <div class="card-contact1 mg-b-20">
            <div class="tx-center">
              <a href=""><img style="height: 150px; width: 150px; object-fit: cover; object-position: cover;" src="{{ URL::to('/') }}/storage/users/profilepics/{{ Auth::user()->userprofile->propic }}" alt=""></a>
              <h5 class="mg-t-10 mg-b-5"><a href="" class="contact-name">Maricel Villalon</a></h5>
              <p>Product Director</p>
              <p class="contact-social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-google"></i></a>
              </p>
            </div><!-- tx-center -->
          </div><!-- card -->

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
                      <p><a href="{{ route('userchurchprofile', ['id'=>$user->church->id,'name' => $user->church->name])}}" style="color: #42433E">{{ $user->church->name }}</a></p>
                      </div><!-- media-body -->
                      <a id="{{ $user->uname }}twin" class="btn btn-sm btn-br btn-primary " href="{{ route('usertwinuser', ['uname' => $user->uname]) }}">Twin</a>

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
