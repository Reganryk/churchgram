@extends('layouts.user')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')


      <div class="container">
        <div class="churchgram-pageheader">

        </div><!-- churchgram-pageheader -->





        <div class="card-deck card-deck-sm mg-t-20 mg-x-0">


          <div class="row">
          <div class="col-md-8">


        @foreach($accounttypes as  $type)
           <div class="card tx-center">
            <div class="card-body ">
            <h5 class="tx-md-20 tx-inverse mg-b-20">{{ $type->name }}</h5>
            <div class="card-table">
            <div class="card-header">
            </div><!-- card-header -->
            <div class="table-responsive">
              <table class="table mg-b-0 tx-12">
                <thead>
                  <tr class="tx-10">
                    <th class="wd-10p pd-y-5">&nbsp;</th>
                    <th class="pd-y-5">Account Number</th>
                    <th class="pd-y-5">Name</th>
                      <th class="wd-10p pd-y-5">&nbsp;</th>
                        <th class="wd-10p pd-y-5">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pd-l-20">
                      <img src="images/users/regan/profilepic/2.jpg" class="wd-55" alt="Image">
                    </td>
                    <td>
                      <a  class="tx-inverse tx-14 tx-medium d-block">000479367472</a>
                    </td>
                    <td>
                      <a  class="tx-inverse tx-14 tx-medium d-block">Visa Account</a>
                    </td>
                    <td>
                      <a href="#editcc"  data-toggle="modal" data-target="#editcc" class="tx-inverse tx-14 tx-medium d-block">Edit</a>
                    </td>
                    <td>
                      <a href="#remove"  data-toggle="modal" data-target="#remove" class="tx-inverse tx-14 tx-medium d-block">Remove</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card -->
              <a href="" data-toggle="modal" data-target="#{{ $type->id }}pay"  class="btn btn-primary btn-block">Add Account</a>
            </div><!-- card -->
          </div><!-- card -->
          <hr>

              <div id="{{ $type->id }}pay" class="modal fade effect-scale" >
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
                    <h3 class="tx-gray-800 tx-normal mg-b-2">Add account to your {{ $type->name }}.</h3>
                    <form>
                    <input type="hidden" name="accounttype_id" value="{{ $type->id }}">
                    <div class="form-group">
                     <input ype="email" name="email" class="form-control pd-y-12" placeholder="Account Name">
                  	</div>
                    <div class="form-group">
                    <input ype="email" name="email" class="form-control pd-y-12" placeholder="Account Name">
					</div>


                   <button class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i>Save</button>



                   </form>

                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

          @endforeach




         </div><!---col-9---->



           <div class=" col-md-3">
             <div class="card-recent-messages">
            <div class="card-header">
              <span>Alms Updates</span>
              <a href=""><i class="icon ion-more"></i></a>
            </div><!-- card-header -->
          <div class="list-group list-group-flush">

          	        <div class="list-group-item">
                <div class="media">
                  <img src="" alt="">
                  <div class="media-body">
                    <h6></h6>
                    <p></p>
                  </div><!-- media-body -->
                </div><!-- media -->
                <p class="msg" style="height: 250px;">We appreciate using our Platform to Donate and Pay your Tithe, We would like to recommend that before donating, check what your donating to First</p>
              </div><!-- list-group-item --><hr>
          <div class="scrollbarright" id="mainscroll1">




          <div class="list-group-item">
            <div class="media card card-map-widget">
              <h6>The Sourthern Movement</h6>
             <p>Created By:<a href="">Kabale Petcost Church</a></p>
              <p> Helping Children with Vulnerabilities in the Southern Region</p>
              <div class="btn-wrapper">
                <a href="" class="btn btn-primary"><i class="fa fa-fire mg-r-5"></i>Donate</a>
              <a href="" class="btn btn-primary mg-l-1"><i class="fa fa-eye mg-r-5"></i>Read More</a>
              </div><hr>
           </div><!-- card -->
          </div><!-- list-group-item -->

           <div class="list-group-item">
            <div class="media card card-map-widget">
              <h6>The Sourthern Movement</h6>
             <p>Created By:<a href="">Kabale Petcost Church</a></p>
              <p> Helping Children with Vulnerabilities in the Southern Region</p>
              <div class="btn-wrapper">
                <a href="" class="btn btn-primary"><i class="fa fa-fire mg-r-5"></i>Donate</a>
              <a href="" class="btn btn-primary mg-l-1"><i class="fa fa-eye mg-r-5"></i>Read More</a>
              </div><hr>
           </div><!-- card -->
          </div><!-- list-group-item -->


           <div class="list-group-item">
            <div class="media card card-map-widget">
              <h6>The Sourthern Movement</h6>
             <p>Created By:<a href="">Kabale Petcost Church</a></p>
              <p> Helping Children with Vulnerabilities in the Southern Region</p>
              <div class="btn-wrapper">
                <a href="" class="btn btn-primary"><i class="fa fa-fire mg-r-5"></i>Donate</a>
              <a href="" class="btn btn-primary mg-l-1"><i class="fa fa-eye mg-r-5"></i>Read More</a>
              </div><hr>
           </div><!-- card -->
          </div><!-- list-group-item -->

          </div><!-- scrollbar -->
          </div><!-- card -->
          </div>
          </div><!----row--->

        </div><!-- card-deck -->
        </div><!-- card-columns -->
      </div><!-- container -->


    @include('front.includes.chatbox')
@endsection
