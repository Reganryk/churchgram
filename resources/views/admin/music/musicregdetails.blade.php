@extends('layouts.admin')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $musicreg->user->uname }}</h3>
                                <h6 class="card-subtitle">{{ $musicreg->user->umusic }}</h6>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="white-box text-center"> <img style="height: 100%; width: 100%; border-radius: 100%; object-fit: cover; object-position: cover;"src="{{ URL::to('/') }}/storage/users/profilepics/{{ $musicreg->user->userprofile->propic }}" class="img-responsive"> </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                        <h4 class="box-title m-t-40">About {{ $musicreg->user->uname }}</h4>
                                        <p>{{ $musicreg->user->userprofile->about }}</p>


                                        <a href="{{ route('admin.musicregrequestsapprove', ['id' =>$musicreg->id ])}}" class="btn btn-primary btn-rounded"> Approve music Request</a>

                                         @if (session('success'))
						                <div class="alert alert-success" role="alert">
						                {{ session('success') }}
						                </div>
						                @endif

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="box-title m-t-40">General Info</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="390">Brand</td>
                                                        <td> Stellar </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Delivery Condition</td>
                                                        <td> Knock Down </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seat Lock Included</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Type</td>
                                                        <td> Office Chair </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Style</td>
                                                        <td> Contemporary &amp; Modern </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wheels Included</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Upholstery Included</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Upholstery Type</td>
                                                        <td> Cushion </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Head Support</td>
                                                        <td> No </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suitable For</td>
                                                        <td> Study &amp; Home Office </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Adjustable Height</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Model Number</td>
                                                        <td> F01020701-00HT744A06 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Armrest Included</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Care Instructions</td>
                                                        <td> Handle With Care, Keep In Dry Place, Do Not Apply Any Chemical For Cleaning. </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Finish Type</td>
                                                        <td> Matte </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

@endsection
