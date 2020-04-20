@extends('layouts.user')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')

 <div class="churchgram-mainpanel">
      <div class="container">
        <div class="churchgram-pageheader">

        </div><!-- churchgram-pageheader -->

        <div class="row row-sm">
          <div class="col-lg-4">
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


          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-sales">
              <h6 class="churchgram-card-title tx-success">Donations Report</h6>
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
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
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

     <div class="churchgram-mainpanel">
      <div class="container">


        <div class="section-wrapper ">
          <label class="section-title">PAYMENT HISTORY</label>
          <p class="mg-b-20 mg-sm-b-40">A list of all your Tithe,Donations, Purchases using Churchgram</p>

          <div class="table-wrapper scrollbar" id="mainscroll1">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                 <tr>
                  <th class="wd-10p">Date</th>
                  <th class="wd-10p">R-ID</th>
                  <th class="wd-10p">Type</th>
                  <th class="wd-10p">Method</th>
                  <th class="wd-20p">Paid To</th>
                  <th class="wd-20p">Account</th>
                  <th class="wd-10p">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2011/04/25</td>
                  <td><a href="paymentreciept.php" data-toggle="tooltip-info" data-placement="top" title="Click Here For this Payment Details" > 0008</a></td>
                  <td>Donation</td>
                  <td>Paypal</td>
                  <td>Bitware Petcost Church</td>
                  <td>Reganryk6@gmail.com</td>
                  <td>$320,800</td>
                </tr>

                   <tr>
                  <td>2011/04/25</td>
                  <td><a href="paymentreciept.php" data-toggle="tooltip-info" data-placement="top" title="Click Here For this Payment Details" > 0008</a></td>
                  <td>Donation</td>
                  <td>Paypal</td>
                  <td>Bitware Petcost Church</td>
                  <td>Reganryk6@gmail.com</td>
                  <td>$320,800</td>
                </tr>

                   <tr>
                  <td>2011/04/25</td>
                  <td><a href="paymentreciept.php" data-toggle="tooltip-info" data-placement="top" title="Click Here For this Payment Details" > 0008</a></td>
                  <td>Donation</td>
                  <td>Paypal</td>
                  <td>Bitware Petcost Church</td>
                  <td>Reganryk6@gmail.com</td>
                  <td>$320,800</td>
                </tr>

                   <tr>
                  <td>2011/04/25</td>
                  <td><a href="paymentreciept.php" data-toggle="tooltip-info" data-placement="top" title="Click Here For this Payment Details" > 0008</a></td>
                  <td>Donation</td>
                  <td>Paypal</td>
                  <td>Bitware Petcost Church</td>
                  <td>Reganryk6@gmail.com</td>
                  <td>$320,800</td>
                </tr>




              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- section-wrapper -->



      </div><!-- container -->
    </div><!-- churchgram-mainpanel -->


      </div><!-- container -->
    </div><!-- churchgram-mainpanel -->
    @include('front.includes.chatbox')
@endsection
