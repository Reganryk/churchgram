@extends('layouts.admin')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')

          <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Table</h4>

                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Registering User</th>
                                                <th>User Phone No</th>
                                                <th>Church Name</th>
                                                <th>Username</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Church Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($churchregs as $churchreg)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $churchreg->user->userprofile->propic }}" alt="user" width="40" class="rounded-circle" />{{ $churchreg->user->uname }}</a>
                                                </td>
                                                <td>{{ $churchreg->user->uphone }}</td>
                                                <td>{{ $churchreg->name }}</td>
                                                <td>{{ $churchreg->uname }}</td>
                                                <td>{{ $churchreg->country }}</td>
                                                <td>{{ $churchreg->city }}</td>
                                                <td>{{ $churchreg->phone }}</</td>
                                                <td>
                                                    <a href="{{route('admin.churchregrequests', ['id' =>$churchreg->id ])}}"  class="btn btn-sm btn-primary btn-pure btn-outline " data-toggle="tooltip" data-original-title="Details">Details</a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



@endsection
