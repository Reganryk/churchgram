<!------------------picture modal------->
 <!-- ------=========================--newsfeed Picture-Modal======================================== -->






 <!-- ------=========================--newsfeed share-updatet======================================== -->
    <div id="createpost" class="modal fade effect-scale" >
    <div class="modal-dialog modal-lg " role="document" >
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden" >
          <div class="modal-body pd-0" >
            <div class="row no-gutters">

              <div class="col-lg-12 bg-white br-2">
                <div class="pd-y-20 pd-xl-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="pd-x-20 pd-y-20">
                    <h3 class="tx-gray-800 tx-normal mg-b-2">Share Update!</h3>




                   <form action="{{ route('createpost')}}" method="Post" enctype="multipart/form-data" onsubmit="sharePost(event)">
                    {{ csrf_field() }}
                    <br>
                     <div class="form-group">
                      <input type="hidden" name="_token" value="{{ Session::token() }}">
                      <input type="text" name="posthead" data-post-id="post.id" class="form-control pd-y-5" placeholder="Hey, you can start with a Title" style="border-radius: 10px;">

                                @error('posthead')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div><!-- form-group -->

                      <ul class="nav nav-activity-profile postinput" >
                         <li style="padding: 10px;">
                          <input  type="file" id="post-files" name="image1"  class="file" data-overwrite-initial="false" data-min-file-count="2" multiple>
                        </li>

                     </ul>


               <br>

          <textarea type="text" name="postcaption" style="width: 100%" class=" tx-13 bd pd-30 tx-inverse" placeholder="What did you have in Mind Today. No bad Language"></textarea><hr>

                   <div class="row">
                    <div class="col-md-6">
                    <a href="#postimages" data-toggle="modal" data-target="#postimages" class="btn btn-outline-secondary btn-teal btn-block mg-b-10" ><i class="fa fa-paper-plane mg-r-5"></i> Add Images</a>
                    </div>
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-outline-secondary btn-teal btn-block mg-b-10" value="Post Update"><i class="fa fa-paper-plane mg-r-5"></i> Post Update</button>
                    </div>
                   </div>

                   </form>

                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


 <!-- ------=========================--newsfeed share-testimony======================================== -->
    <div id="reportpost" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">

              <div class="col-lg-12 bg-white br-2">
                <div class="pd-y-30 pd-xl-x-30">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="pd-x-30 pd-y-10">
                    <h3 class="tx-gray-800 tx-normal mg-b-5">Post Your Testimony!</h3>

                    <br>
                     <div class="form-group">
                      <input type="text" name="heading" class="form-control pd-y-12" placeholder="Testimony Heading">
                    </div><!-- form-group -->

          <div class="editable tx-16 bd pd-30 tx-inverse">Your Testimony inside</div>

                   <button class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i>Post Testimony</button>
                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

 <!-- ------=========================--newsfeed share-prayer-request======================================== -->
    <div id="prayerrequest" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">

              <div class="col-lg-12 bg-white br-2">
                <div class="pd-y-30 pd-xl-x-30">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="pd-x-30 pd-y-10">
                    <h3 class="tx-gray-800 tx-normal mg-b-5">Post Your Prayer Request!</h3>

                    <br>
                     <div class="form-group">
                      <input type="text" name="prayerreq" class="form-control pd-y-12" placeholder="Prayer Request Heading">
                    </div><!-- form-group -->

          <div class="editable tx-16 bd pd-30 tx-inverse">Compose Your Prayer requests Here</div>

                   <button class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i>Post Prayer Request</button>
                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


 <!-- ------=========================--newsfeed reply-to-post======================================== -->
    <div id="reply" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">

                  <div class="col-lg-6 bg-primary br-2">
                <div class="pd-y-30 pd-xl-x-30">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="pd-x-30 pd-y-10">
                    <h3 class="tx-gray-800 tx-normal mg-b-5">Enter your Reply!</h3>

                    <br>
                    <div class="form-group">
                      <textarea ype="email" name="email" class="form-control pd-y-12" placeholder="Enter Reply"></textarea>
                    </div><!-- form-group -->


                   <button class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i> Reply</button>


                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
              <div class="col-lg-6 bg-white">
                <div class="pd-40 scrollbarreply"  id="mainscroll">
                  <h3 class="tx-white mg-b-20" style="color:#1CAF9A; ">Latest Replies</h3>
                      <div class="row"><!-------Post comment-->
                      <div class="col-3 col-lg-2">
                    <img src="images/users/regan/profilepic/1.jpg" alt="" class="profile-photo-sm"/></div>
                    <div class="col-8 col-lg-8">
                   <p><a href="/user-about" >Elisse Joson</a> San Francisco, CA</p>

                     <p class="timeline-text">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the </p>
                    <p class="tx-10 mg-b-0" style="font-size: 12px"><a href=""><i  style="color:#8DC63F;" class="icon ion-thumbsup"></i> 13</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href=""><i style="color: #FF0000;" class="fa fa-thumbs-down"></i> 0</a>  </p>

                    </div>
                  </div><!-------End post comment--><br>

                     <div class="row"><!-------Post comment-->
                      <div class="col-3 col-lg-2">
                    <img src="images/users/regan/profilepic/1.jpg" alt="" class="profile-photo-sm"/></div>
                    <div class="col-8 col-lg-8">
                   <p><a href="/user-about" >Elisse Joson</a> San Francisco, CA</p>

                    <p class="timeline-text">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the </p>
                    <p class="tx-10 mg-b-0" style="font-size: 12px"><a href=""><i  style="color:#8DC63F;" class="icon ion-thumbsup"></i> 13</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href=""><i style="color: #FF0000;" class="fa fa-thumbs-down"></i> 0</a>  </p>

                    </div>
                  </div><!-------End post comment--><br>

                   <div class="row"><!-------Post comment-->
                      <div class="col-3 col-lg-2">
                    <img src="images/users/regan/profilepic/1.jpg" alt="" class="profile-photo-sm"/></div>
                    <div class="col-8 col-lg-8">
                   <p><a href="/user-about" >Regan Manzi</a> Kampala, UG</p>

                    <p class="timeline-text">Your silly </p>
                    <p class="tx-10 mg-b-0" style="font-size: 12px"><a href=""><i  style="color:#8DC63F;" class="icon ion-thumbsup"></i> 13</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href=""><i style="color: #FF0000;" class="fa fa-thumbs-down"></i> 0</a>  </p>

                    </div>
                  </div><!-------End post comment--><br>

                </div>
              </div><!-- col-6 -->

            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->




 <!-- ------=========================--newsfeed post -share-post======================================== -->
        <div id="sharenewsfeed" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content bd-0 bg-white rounded overflow-hidden br-2">
             <div class="container" style="padding: 20px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: black;">&times;</span></button>

                   <div class="row" ><!-------Post comment-->
                    <div class="col-2 col-lg-1">
                    <img src="images/users/regan/profilepic/1.jpg" alt="" class="profile-photo-md"/></div>

                  <div class="col-8 col-lg-9">
                   <a href="" style="font-size: 14px; font-weight: 400i; color: #282923; text-transform: uppercase;">I love what we call an early vibe</a><br><a href="/user-about">Rumanzi Regan</a><br><span style="color: #4662D4;"> Thur 26 Jan 2019 | 8:15pm</span>
                  </div>

             </div>

                    <p class="timeline-text" style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                    <div class="row mg-b-15">
                      <div class="col-6 col-lg-6">
                        <a ><img src="images/users/regan/posts/1.jpg" class="img-fluid "  alt=""></a>

                      </div><!-- col-6 -->
                        <div class="col-6 col-lg-6">
                             <a ><img src="images/users/regan/posts/2.jpg" class="img-fluid "  alt=""></a>
                      </div><!-- col-6 -->
                    </div><!-- row --><hr>
                  </div>
              <div class="section-wrapper mg-t-20">
              <div class="row">
            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <h2>Share to:</h2>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-purple btn-block mg-b-10"> Group</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-pink btn-block mg-b-10">Timeline</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-teal  btn-block mg-b-10">Churchgram</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            </div>
          </div>

          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->

 <!-- ------=========================--newsfeed post edit-post======================================== -->
    <div id="editpost" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">

              <div class="col-lg-12 bg-white br-2">
                <div class="pd-y-30 pd-xl-x-30">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="pd-x-30 pd-y-10">
                    <h3 class="tx-gray-800 tx-normal mg-b-5">Edit Post!</h3>
                    <br>
          <div class="editable tx-16 bd pd-30 tx-inverse">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
        </div><!-- section-wrapper -->
                   <button class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i>Update Post </button>
                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->





  <!-- ------=========================--groups sample-profile======================================== -->
    <div id="profile" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">
              <div class="col-lg-6 bg-primary br-2">
                <div class="pd-40">
                  <h1 class="tx-gray-800 mg-b-20">Abakazi Betwale Cookers</h1>
                  <p class="tx-gray-800 op-7 mg-b-30">Was started in 2019 with the aim of helping children in the south western uganda so that they can live a happy life that is given to the past tense</p>
                  <p class="tx-white">
                    <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                    <span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span>
                  </p>
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6 bg-white">
                <div class="pd-y-30 pd-xl-x-30">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="pd-x-30 pd-y-10">
                    <h3 class="tx-gray-800 tx-normal mg-b-5">Welcome back!</h3>
                    <p>Sign in to your account to continue</p>
                    <br>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control pd-y-12" placeholder="Enter your email">
                    </div><!-- form-group -->
                    <div class="form-group mg-b-20">
                      <input type="email" name="password" class="form-control pd-y-12" placeholder="Enter your password">
                      <a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
                    </div><!-- form-group -->

                    <button class="btn btn-primary pd-y-12 btn-block">Sign In</button>

                    <div class="mg-t-30 mg-b-20">Don't have an account yet? <a href="">Sign Up</a></div>
                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

  <!-- ------=========================--groups share-group-profile======================================== -->
    <div id="sharegroup" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden br-2">
           <div class="modal d-block pos-static">
              <div class="modal-dialog" role="document">
                <div class="modal-content bd-0">
                  <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Share Abakazi Betwale Cookers</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body pd-25">
                    <h5 class="lh-4 mg-b-20 tx-inverse">Add a Note</h5>
                 <textarea rows="4" class="form-control is-valid mg-t-20" placeholder="Add a Note"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Share Group</button>
                    <button type="button" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </div><!-- modal-dialog -->
            </div><!-- modal -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


       <!-- ------=========================--groups leave-message======================================== -->
    <div id="leavemsggroup" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden br-2">
           <div class="modal d-block pos-static">
              <div class="modal-dialog" role="document">
                <div class="modal-content bd-0">
                  <div class="modal-header pd-y-20 pd-x-25">

                        <h5 class="lh-4 mg-b-20 tx-inverse">Send message to Abakazi Betwale Cookers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body pd-25">

                 <textarea rows="4" class="form-control is-valid mg-t-20" placeholder="Enter your Message"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Send Message</button>
                    <button type="button" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </div><!-- modal-dialog -->
            </div><!-- modal -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


     <!-- ------=========================--groups join groups======================================== -->
        <div id="joingroup" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">

  <div class="modal-dialog" role="document">
                <div class="modal-content br-2">
                  <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block" style="color: indigo;"></i>
                    <h4 class="tx-success mg-b-20" style="color: indigo;">Congratulations!</h4>
                    <p class="mg-b-20 mg-x-20">Your Request to Join <a href="">Abakazi Betwale Cookers </a> has been submitted. Wait for Admin to Approve .</p>
                    <button type="button" class="btn btn-success pd-x-25" style="background: indigo;">Finish</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div>
          </div>
        </div>

   <!-- ------=========================--groups block-group======================================== -->
        <div id="blockgroup" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden br-2">

  <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block" style="color: #DC3545;"></i>
                    <h4 class="tx-success mg-b-20" style="color: #DC3545;">Remove Group from List!</h4>
                    <p class="mg-b-20 mg-x-20"><a href="">Abakazi Betwale Cookers </a> has be removed from your recommended List</p>
                    <button type="button" class="btn btn-success pd-x-25" style="background: #DC3545;">Finish</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->


          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->



  <!-- ------=========================--groups create-group======================================== -->
   <div id="creategroup" class="modal fade effect-just-me">
      <div class="modal-dialog modal-lg" style="border-radius: 8px" role="document">
        <div class="modal-content bd-0 bg-primary  rounded overflow-hidden br-2">

       <div class="section-wrapper">
        <div class="scrollbarright bg-white" id="mainscroll1" style="border-radius: 8px">

          <form action="{{ route('user.addgroup')}}" method="Post">
            @csrf
          <label class="section-title" style="color:#1B84E7;">Create a Group</label>
          <hr>
          <p class=" ">Groups make it easier than ever to share with friends, family and teammates</p>


            <h3>Group Information</h3>
            <section>
              <div class="form-group">
                <label class="form-control-label">Group Name <span class="tx-danger"></span></label>
                <input  class="form-control  btn-br" name="uname" maxlength="20" placeholder="Enter Group Name" type="text" required>
              </div><!-- form-group -->
              <div class="form-group ">
                <label class="form-control-label">Enter Group Description<span class="tx-danger"></span></label>
                <input  class="form-control btn-br" maxlength="150" name="about" placeholder="Enter Group Description" type="text" required>
              </div><!-- form-group -->
            </section>
            <h3>Choose Group Type</h3>
            <section>
              <p>Choosing your Group Type will help you get People in the Category of Your Group</p>
                 <select class="form-control select2  btn-br" name="groupcat_id" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                  @foreach($groupcats as $cat)
                  <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                  @endforeach
                </select>
            </section>
            <hr>
           <button type="submit" class="btn btn-primary btn-block">Lets Go!</button>
         </form>
          </div>
        </div><!-- section-wrapper -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->

        <!--===============user share churchgram on other social media============================== -->
   <div id="sharechurchgram" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content bd-0 bg-white rounded overflow-hidden">
             <div class="container" style="padding: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: black;">&times;</span></button>

                   <div class="row" ><!-------Post comment-->
                    <div class="col-2 col-lg-1">
                    <img src="images/users/regan/profilepic/1.jpg" alt="" class="profile-photo-md"/></div>

                  <div class="col-8 col-lg-9">
                   <a href="" style="font-size: 14px; font-weight: 400i; color: #282923; text-transform: uppercase;">Join <a href="/user-about">Churchgram</a> Today and get the best Christian Updates</a><br><a href="/user-about">Rumanzi Regan</a><br><span style="color: #4662D4;"> Thur 26 Jan 2019 | 8:15pm</span>
                  </div>

             </div><hr>

                    <p class="timeline-text" style="font-size: 13px;">We are excited to welcome you to Churchgram. Find your friends and churches online. Join groups, listen to live preachings from churches. Get your life motivated with lots of special Christian Events</p>
                     <textarea class="form-control" cols="20" placeholder="Please Enter something attractive to Help People out there to Notice the Importance of Churchgram"></textarea>
                </div><!-- section-wrapper -->



              <div class="section-wrapper mg-t-20">
              <div class="row">
            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <h2>Share to:</h2>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-purple btn-block mg-b-10">Facebook</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-pink btn-block mg-b-10">Tweeter</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-teal  btn-block mg-b-10">Instagram</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            </div>
          </div>

          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->


      <!---=========================aLms Modals Modals==============================================----->
          <!-----------removed------------------------->
      <div id="payremove" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden br-2">

  <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block" style="color: #DC3545;"></i>
                    <h4 class="tx-success mg-b-20" style="color: #DC3545;">Remove from Quick Payments List!</h4>
                    <p class="mg-b-20 mg-x-20"><a href="">Abakazi Betwale Cookers </a> has be removed from your recommended List</p>
                    <button type="button" class="btn btn-success pd-x-25" style="background: #DC3545;">Finish</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->


          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->




     <!-----------quick pay choose payment method------------------------->
      <div id="quickpay" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden br-2">
 <div class="section-wrapper mg-t-20">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
          <label class="section-title">Choose Payment Method</label>

          <p class=" mg-sm-b-40">A list of Payment Methods Availble for you and <a href="">Byetware Petcost Church</a> </p>

          <form action="" id="selectForm">
            <div class="d-md-flex">
              <div id="slWrapper" class="parsley-select wd-250">
                <select class="form-control select2" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                  <option label="Choose one"></option>
                  <option value="Firefox">Pay-pal</option>
                  <option value="Chrome">Bank Payments</option>
                  <option value="Safari">Mobile Money</option>
                </select>
                <div id="slErrorContainer"></div>
              </div>
              <div class="mg-md-l-10 mg-t-10 mg-md-t-0">
                <a href="#quickamount" data-toggle="modal" data-target="#quickamount" class="btn btn-primary pd-x-20" >Continue</a>
              </div>
            </div><!-- d-flex -->
          </form>
        </div><!-- section-wrapper -->
      </div>
    </div>
  </div>

       <!-----------eNTER aMOUNT------------------------->
      <div id="quickamount" class="modal fade effect-scale">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden br-2">
 <div class="section-wrapper mg-t-20">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
          <label class="section-title">Enter Amount of Money </label>

          <form action="" id="selectForm">
            <div class="d-md-flex">
              <div id="slWrapper" class="parsley-select wd-250">
                <input class="form-control select2" data-placeholder="Enter Amount"  required >

                <div id="slErrorContainer"></div>
              </div>
              <div class="mg-md-l-10 mg-t-10 mg-md-t-0">
                <a href="/user-payment-details" class="btn btn-primary pd-x-20" >Continue</a>
              </div>
            </div><!-- d-flex -->
          </form>
        </div><!-- section-wrapper -->
      </div>
    </div>
  </div>

    <!-- ------=========================--user create-card======================================= -->
   <div id="createcard" class="modal fade effect-scale btn-br" style="width: 100%: border-radius:8px;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content  bg-primary  rounded overflow-hidden br-2">

       <div class="section-wrapper ">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
          <label class="section-title">Create a Personal Card</label>
        <form action="{{ route('storecard')}}"  method="Post" >
          {{ csrf_field() }}
             <div class="scrollbarreply bg-white" id="mainscroll1">

            <section>
              <p>Choose your Card Category</p>
                 <select class="form-control select2" name="cat" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                  <option label="Choose one" selected disabled>Choose Category</option>
                   <option value="Testimony">Testimony</option>
                  <option value="Inspiration">Inspiration</option>
                  <option value="Prayer Request">Prayer Request</option>
                  <option value="General Prayer">General Prayer</option>
                  <option value="Bible Quote">Bible Quote</option>
                </select>
            </section>

             <section>
              <p>Choose Background Color</p>
                 <select class="form-control select2" name="colored" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                  <option label="Choose one" selected disabled>Choose Color</option>
                   <option value="#282923" style="background-color: #282923"></option>
                   <option value="#1CAF9A" style="background-color: #1CAF9A"></option>
                   <option value="#E19774" style="background-color: #E19774"></option>
                   <option value="#F7941E" style="background-color: #F7941E"></option>
                   <option value="#8DC63F" style="background-color: #8DC63F"></option>
                   <option value="#662D91" style="background-color: #662D91"></option>
                   <option value="#EF4D8B" style="background-color: #EF4D8B"></option>
                   <option value="#9E1F63" style="background-color: #9E1F63"></option>
                </select>
            </section>


            <section>

              <div class="form-group wd-xs-300">
                <label class="form-control-label">Add Background Image<span class="tx-danger"></span></label>
                <input  class="form-control" name="bckimage" placeholder="Add Background Image" type="file">
              </div><!-- form-group -->
            </section>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Card Body<span class="tx-danger"></span></label>
                <textarea  class="form-control" name="body" rows="5" maxlength="300" placeholder="Enter Card Information" type="text" required></textarea>
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Tag Line<span class="tx-danger"></span></label>
                <input  class="form-control" name="tag" placeholder="Add Tagline ie: Mark 12:35, God is Great" type="text" required>
              </div><!-- form-group -->
            </section>
            <hr>
           <button type="submit" class="btn btn-primary btn-block">Create Card</button>
          </div>
        </form>
        </div><!-- section-wrapper -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
