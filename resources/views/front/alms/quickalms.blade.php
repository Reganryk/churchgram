@extends('layouts.user')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')


    <div class="churchgram-mainpanel">
      <div class="container">
        <div class="churchgram-pageheader">

        </div><!-- churchgram-pageheader -->
        <div class="row">
        	<div class="col-md-11">
        		        <div class="row " style="padding: 8px;">
          <div class="col-md-4 mg-t-20 mg-lg-t-0">
            <div class="card card-sales">
              <h6 class="churchgram-card-title tx-primary">Tithe Report</h6>
              <div class="row">
                <div class="col">
                  <label class="tx-12">Today</label>
                  <p>1,898</p>
                </div><!-- col -->
                <div class="col">
                  <label class="tx-12">This Week</label>
                  <p>32,112</p>
                </div><!-- col -->
                <div class="col">
                  <label class="tx-12">This Month</label>
                  <p>72,067</p>
                </div><!-- col -->
              </div><!-- row -->
              <p class="tx-12 mg-b-0">A Summery of Tithe Payments</p>
            </div><!-- card -->
          </div><!-- col-4 -->


          <div class="col-md-4 mg-t-20 mg-lg-t-0">
            <div class="card card-sales">
              <h6 class="churchgram-card-title tx-success">Campaigns Report</h6>
              <div class="row">
                <div class="col">
                  <label class="tx-12">Today</label>
                  <p>1,263</p>
                </div><!-- col -->
                <div class="col">
                  <label class="tx-12">This Week</label>
                  <p>28,767</p>
                </div><!-- col -->
                <div class="col">
                  <label class="tx-12">This Month</label>
                  <p>68,324</p>
                </div><!-- col -->
              </div><!-- row -->
              <p class="tx-12 mg-b-0">A Summery of Donations to Different Missions</p>
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-md-4 mg-t-20 mg-lg-t-0">
            <div class="card card-sales">
              <h6 class="churchgram-card-title tx-danger">Purchases Report</h6>
              <div class="row">
                <div class="col">
                  <label class="tx-12">Today</label>
                  <p>1,263</p>
                </div><!-- col -->
                <div class="col">
                  <label class="tx-12">This Week</label>
                  <p>28,767</p>
                </div><!-- col -->
                <div class="col">
                  <label class="tx-12">This Month</label>
                  <p>68,324</p>
                </div><!-- col -->
              </div><!-- row -->
              <p class="tx-12 mg-b-0">A Summery of Your Purchases from Churchgram</p>
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

        <hr>



     <div class="churchgram-mainpanel">
      <div class="container">


        <div class="section-wrapper ">
          <label class="section-title">Quick Payment</label>
          <p class="mg-b-20 mg-sm-b-40">A list of all your Trusted Payments on Churchgram</p>

          <div class="table-wrapper" >
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                 <tr>
                  <th class="wd-10p">Type</th>
                  <th class="wd-20p">Name</th>
                  <th class="wd-10p">&nbsp;</th>
                  <th class="wd-10p">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tithe</td>
                  <td>Byetware Petcost Church</td>
                  <td><a href="#payremove" data-toggle="modal" data-target="#payremove"> Remove</a></td>
                  <td><a href="#quickpay" data-toggle="modal" data-target="#quickpay"> Pay</a></td>
                </tr>

                   <tr>
                  <td>Donation</td>
                  <td>Byetware Petcost Church</td>
                  <td><a  href="#payremove" data-toggle="modal" data-target="#payremove"> Remove</a></td>
                  <td><a href="#quickpay" data-toggle="modal" data-target="#quickpay"> Pay</a></td>
                </tr>
                   <tr>
                  <td>Purchase</td>
                  <td>Neil Custon</td>
                  <td><a  href="#payremove" data-toggle="modal" data-target="#payremove"> Remove</a></td>
                  <td><a href="#quickpay" data-toggle="modal" data-target="#quickpay"> Pay</a></td>
                </tr>







              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- section-wrapper -->



      </div><!-- container -->
    </div><!-- churchgram-mainpanel -->
        	</div>

        	<div class="col-md-3">

        	</div>

        </div>





      </div><!-- container -->
    </div><!-- churchgram-mainpanel -->


    @include('front.includes.chatbox')

@endsection
