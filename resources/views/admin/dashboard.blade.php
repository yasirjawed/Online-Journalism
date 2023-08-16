@extends('layouts.master')
@section('title','Admin Dashboard')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Users</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{$totaluserCount}}
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Posts</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{$totalpostCount}}
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Categories</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{$totalcategoryCount}}
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Post Pending Approval</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{$pendingcount}}
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <b> User Tables</b>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined At</th>
                        <th>Role</th>
                        <th>Edit</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($TotalUsers as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                        <td>{{ $user->role_as=='1'?'Admin':'User'}}</td>
                        <td><a href="{{url('admin/users/'.$user->id)}}" class="btn btn-success">Edit</a></td>


                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           <b>Post Pending For Approval</b>
        </div>
        <div class="card-body">
            <table id="datatablesSimple2">
                <thead>
                    <tr>
                        <th>Person Name</th>
                        <th>Category</th>
                        <th>Post Title</th>
                        <th>Edit</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($pedningApproval as $pedningrequest)
                    <tr>
                        <td>{{ $pedningrequest->user->name }}</td>
                        <td>{{ $pedningrequest->category->name }}</td>
                        <td>{{ $pedningrequest->name }}</td>
                        <td><a href="{{url('admin/post/'.$pedningrequest->id)}}" class="btn btn-success">Edit</a></td>


                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
