

<div class="col-md-3 mg-t-20 mg-lg-t-0" >

  @include('front.includes.radio')
@include('front.includes.cards')
<div class="bd-0" style="background: #fff; border-radius: 8px;">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs text-center">
                    <li class="nav-item">
                      <a class="nav-link  active pd-y-8" href="#updates1" data-toggle="tab">Updates</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="#freinds1" data-toggle="tab">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#churches1" data-toggle="tab">Groups</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#churchestimeline" data-toggle="tab">Churches</a>
                    </li>
                  </ul>
                </div><!-- card-header -->

                <div class="card-body bd bd-t-0">
                  <div class="tab-content">
                    <div class="tab-pane active" id="updates1">
          <!--------------------------------Latest timeline Updates------------------>
            <div class="">
              <div class="post-group">
                <div class="scrollbarright" id="mainscroll" style="padding: 10px;">
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
              </div>
              </div><!-- post-group -->
            </div><!-- card -->
                    </div><!-- tab-pane -->


  <div class="tab-pane " id="churchestimeline">
  <div class="post-group">
  <div class="scrollbarright" id="mainscroll" style="padding: 10px;">

  <div class=" card-people-list">
  <div class="churchgram-card-title">Churches Near You</div><hr>
      <div class="media-list">
        @foreach($churches as $church)
      <div class="media">
      <img src="{{ URL::to('/') }}/storage/church/profilepics/{{ $church->churchprofile->propic}}" alt="">
      <div class="media-body">
      <a href="">{{ $church->uname }}</a>
      <p style="text-transform: capitalize;">Pr. {{ $church->headpastor}}</p>
      </div><!-- media-body -->
      <div class=""> <a href="" class="btn btn-primary btn-sm btn-br"> Twin</a></div>
      </div><!-- media -->
      @endforeach


      </div><!-- media-list -->
  </div><!-- card -->

  </div>
  </div>
  </div>

                    <div class="tab-pane" id="freinds1">
                         <div class="">
                  <div class="post-group">
                 <div class="scrollbarright" id="mainscroll" style="padding: 10px;">

                   <div class="card-people-list">
            <div class="churchgram-card-title">People you may know</div><hr>
            <div class="media-list">
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Amber Heard</a>
                  <p>Software Engineer</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Richard Salomon</a>
                  <p>Architect</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Warren Vito</a>
                  <p>Sales Representative</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Charlene Plateros</a>
                  <p>Sales Representative</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Allan Palban</a>
                  <p>Sales Representative</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
            </div><!-- media-list -->
          </div><!-- card -->

                 </div>
               </div>
             </div>
                    </div><!-- tab-pane -->
                    <div class="tab-pane" id="churches1">
                         <div class="">
                  <div class="post-group">
                 <div class="scrollbarright" id="mainscroll" style="padding: 10px;">

                   <div class=" card-people-list">
            <div class="churchgram-card-title">Churches Near You</div><hr>
            <div class="media-list">
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Amber Heard</a>
                  <p>Software Engineer</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Richard Salomon</a>
                  <p>Architect</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Warren Vito</a>
                  <p>Sales Representative</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Charlene Plateros</a>
                  <p>Sales Representative</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
              <div class="media">
                <img src="images/users/regan/profilepic/2.jpg" alt="">
                <div class="media-body">
                  <a href="">Allan Palban</a>
                  <p>Sales Representative</p>
                </div><!-- media-body -->
                <a href=""><i class="icon ion-person-add tx-20"></i></a>
              </div><!-- media -->
            </div><!-- media-list -->
          </div><!-- card -->

                 </div>
               </div>
             </div>
                    </div><!-- tab-pane -->
                  </div><!-- tab-content -->
                </div><!-- card-body -->
              </div><!-- card -->



          </div><!-- col-3 -->
        </div>
      </div>
    </div>


