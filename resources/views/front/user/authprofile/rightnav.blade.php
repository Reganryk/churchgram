          <div class="card card-connection">
              <div class="row row-xs">
                <div class="col-4 tx-primary">129</div>
                <div class="col-8">people viewed your profile in the past 90 days</div>
              </div><!-- row -->
              <hr>
              <div class="row row-xs">
                <div class="col-4 tx-purple">845</div>
                <div class="col-8">
                  connections <br>
                  <a href="">Grow your network</a>
                </div>
              </div><!-- row -->
            </div><!-- card -->

            <div class="card card-people-list pd-25 mg-t-20">
              <div class="churchgram-card-title">Churches Near You</div>
              <div class="media-list">
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <a href="">Adrian Monino</a>
                    <p>Software Engineer</p>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <a href="">Rolando Paloso</a>
                    <p>Architect</p>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <a href="">Joyce Chua</a>
                    <p>Sales Representative</p>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <a href="">Annalyn Mercado</a>
                    <p>Sales Representative</p>
                  </div><!-- media-body -->
                </div><!-- media -->

              </div><!-- media-list -->
            </div><!-- card -->

            <div class="card card-people-list pd-25 mg-t-20">
              <div class="churchgram-card-title">People you may know</div>
              <div class="media-list">
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <a href="">Amber Heard</a>
                    <p>Software Engineer</p>
                  </div><!-- media-body -->
                  <a href=""><i class="icon ion-person-add tx-20"></i></a>
                </div><!-- media -->
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <a href="">Richard Salomon</a>
                    <p>Architect</p>
                  </div><!-- media-body -->
                  <a href=""><i class="icon ion-person-add tx-20"></i></a>
                </div><!-- media -->
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <a href="">Warren Vito</a>
                    <p>Sales Representative</p>
                  </div><!-- media-body -->
                  <a href=""><i class="icon ion-person-add tx-20"></i></a>
                </div><!-- media -->
                <div class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <a href="">Charlene Plateros</a>
                    <p>Sales Representative</p>
                  </div><!-- media-body -->
                  <a href=""><i class="icon ion-person-add tx-20"></i></a>
                </div><!-- media -->

              </div><!-- media-list -->
            </div><!-- card -->

            <div class="card pd-25 mg-t-20">
              <div class="churchgram-card-title">Contact &amp; Personal Info</div>

              <div class="media-list mg-t-25">

                <div class="media mg-t-25">
                  <div><i class="icon ion-ios-telephone-outline tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Phone Number</h6>
                    <span class="d-block">{{ Auth::user()->uphone }}</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-ios-email-outline tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Email Address</h6>
                    <span class="d-block">{{ Auth::user()->email }}</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-twitter tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Twitter</h6>
                    <a href="#" class="d-block">{{ Auth::user()->userprofile->twitter }}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                 <div class="media mg-t-25">
                  <div><i class="icon ion-social-facebook tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Facebook</h6>
                    <a href="#" class="d-block">{{ Auth::user()->userprofile->facebook }}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                 <div class="media mg-t-25">
                  <div><i class="icon ion-social-whatsapp tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Whatsapp</h6>
                    <a href="#" class="d-block">{{ Auth::user()->userprofile->whatsapp }}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- media-list -->
            </div><!-- card -->
