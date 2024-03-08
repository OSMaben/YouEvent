@extends('layouts.layout');
@section('content');

<div class="d-flex flex-column h-100">
    <nav class="vertical_nav">
        <div class="left_section menu_left" id="js-menu">
            <div class="left_section">
                <ul>
                    <li class="menu--item">
                        <a href="/admin-dashboard" class="menu--link active" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                            <i class="fa-solid fa-gauge menu--icon"></i>
                            <span class="menu--label">Dashboard</span>
                        </a>
                    </li>
                    @if(auth()->user()->role_id == 2)
                        <li class="menu--item">
                            <a href="/categories" class="menu--link" title="Events" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-calendar-days menu--icon"></i>
                                <span class="menu--label">Events Categories</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="" class="menu--link" title="Contact List" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-regular fa-address-card menu--icon"></i>
                                <span class="menu--label">Users List</span>
                            </a>
                        </li>

                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-user-group me-3"></i>Team Members</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="conversion-setup">
                            <div class="main-card mt-5">
                                <div class="dashboard-wrap-content p-4">
                                    <div class="d-md-flex flex-wrap align-items-center">
                                        <div class="nav custom2-tabs btn-group" role="tablist">
                                            <button class="tab-link ms-0 active" data-bs-toggle="tab" data-bs-target="#overview-tab" type="button" role="tab" aria-controls="overview-tab" aria-selected="true">Overview</button>
                                        </div>
                                        <div class="rs ms-auto mt_r4">
                                        </div>
                                    </div>
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <p><strong>Opps Something went wrong</strong></p>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if(session('success'))
                                        <div class="alert alert-success">{{session('success')}}</div>
                                    @endif
                                    @if(session('error'))
                                        <div class="alert alert-danger">{{session('error')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="overview-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Creation Login</th>
                                                        <th scope="col">change Role</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->email}}</td>
                                                            <td>
                                                                {{ $user->role->name }}
                                                            </td>
                                                            <td>{{$user->created_at}}</td>
                                                            <td class="d-flex gap-2">
                                                                <form method="POST" action="{{ route('updateRole',$user->id) }}" class="d-flex gap-2">
                                                                    @csrf
                                                                    <select class="form-control h_50" name="newRole">
                                                                        @foreach($userRoles as $userRole)
                                                                            <option value="{{ $userRole->id }}">{{ $userRole->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <button type="submit" class="btn btn-default btn-hover steps_btn">update</button>
                                                                </form>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
