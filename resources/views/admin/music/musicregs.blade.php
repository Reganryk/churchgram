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
                                                <th>music Name</th>
                                                <th>Username</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>music Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($musicregs as $musicreg)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="{{ URL::to('/') }}/storage/users/profilepics/{{ $musicreg->user->userprofile->propic }}" alt="user" width="40" class="rounded-circle" />{{ $musicreg->user->uname }}</a>
                                                </td>
                                                <td>{{ $musicreg->user->uphone }}</td>
                                                <td>{{ $musicreg->name }}</td>
                                                <td>{{ $musicreg->uname }}</td>
                                                <td>{{ $musicreg->country }}</td>
                                                <td>{{ $musicreg->city }}</td>
                                                <td>{{ $musicreg->phone }}</</td>
                                                <td>
                                                    <a href="{{route('admin.musicregrequests', ['id' =>$musicreg->id ])}}"  class="btn btn-sm btn-primary btn-pure btn-outline " data-toggle="tooltip" data-original-title="Details">Details</a>
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
