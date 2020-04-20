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


        <div class="card card-invoice">
          <div class="card-body">
            <div class="invoice-header">
              <h1 class="invoice-title">Invoice</h1>
              <div class="billed-from">
                <a href="../church/churchabout.php"> <h6>Byekwaso Petcost Church.</h6></a>
                <p>Akiira Road, Plot 34, Kampala, Uganda<br>
                Tel No: 2567879867<br>
                Email: byekwaso@gmail.com</p>
              </div><!-- billed-from -->
            </div><!-- invoice-header -->

            <div class="row mg-t-20">
              <div class="col-md">
                <label class="section-label-sm tx-gray-500">Billed To</label>
                <div class="billed-to">
                  <a href="userabout.php"> <h6 style="color:#1CAF9A ">Regan Manzi</h6></a>

                  <p>Akiira Road, Plot 34, Kampala, Uganda <br>
                  Tel No: 256779254408<br>
                  Email: reganryk6@gmail.com</p>
                </div>
              </div><!-- col -->
              <div class="col-md">
                <label class="section-label-sm tx-gray-500">Invoice Information</label>
                <p class="invoice-info-row">
                  <span>Invoice No</span>
                  <span>GHT-673-00</span>
                </p>
                <p class="invoice-info-row">
                  <span>Payment Method</span>
                  <span>Mobile Money</span>
                </p>
                <p class="invoice-info-row">
                  <span> Date:</span>
                  <span>May 21, 2019</span>
                </p>

              </div><!-- col -->
            </div><!-- row -->

            <div class="table-responsive mg-t-40">
              <table class="table table-invoice">
                <thead>
                  <tr>
                    <th class="wd-40p">Type</th>
                    <th class="wd-40p">Description</th>

                    <th class="wd-40p">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tithe</td>
                    <td class="tx-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</td>

                    <td class="tx-right">300000.00</td>
                  </tr>

                  <tr>

                    <td class="tx-right">Sub-Total</td>
                    <td colspan="2" class="tx-right">300000.00</td>
                  </tr>
                  <tr>
                    <td class="tx-right">Transaction Fess</td>
                    <td colspan="2"  class="tx-right">1200</td>
                  </tr>
                  <tr>
                    <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                    <td colspan="2" class="tx-right"><h4 class="tx-primary tx-bold tx-lato">UGX: 300,1200.00</h4></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->

            <hr class="mg-b-60">

            <a href="" class="btn btn-primary btn-block">Pay Now</a>

          </div><!-- card-body -->
        </div><!-- card -->
      </div>

      </div><!-- container -->
    </div><!-- churchgram-mainpanel -->
  </div>
@endsection
