@extends('layouts.layout')
@section('content')



    <nav class="vertical_nav">
        <div class="left_section menu_left" id="js-menu">
            <div class="left_section">
                <ul>
                    <li class="menu--item">
                        <a href="" class="menu--link active" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
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
                            <a href="/userList" class="menu--link" title="Contact List" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-regular fa-address-card menu--icon"></i>
                                <span class="menu--label">Users List</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="bankModal" tabindex="-1" aria-labelledby="bankModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bankModalLabel">Add Bank Account</h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
                </div>
                <form method="post" action="{{route('AddCategories')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="model-content main-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Add Category</label>
                                        <input class="form-control h_40" type="text" name="category" placeholder="" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="main-btn min-width btn-hover h_40">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-list mx-2" ></i>Categories</h3>
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
                    <div class="col-md-12">
                        <div class="main-card mt-5">
                            <div class="dashboard-wrap-content p-4">
                                <h5 class="mb-4">Categories</h5>
                                <div class="d-md-flex flex-wrap align-items-center">
                                    <div class="dashboard-date-wrap">
                                        <div class="form-group">
                                            <div class="relative-input position-relative">
                                                <input class="form-control h_40" type="text"  placeholder="Search by coupon name" value="">
                                                <i class="uil uil-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs ms-auto mt_r4">
                                        <button class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal" data-bs-target="#bankModal">Add Category</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-promotion-list">
                            <div class="main-card mt-4 p-4 pt-0">
                                <div class="row">
                                    @foreach($categories as $category)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="bank-card p-4 mt-4">
                                                <h5>{{$category->name}}</h5>
                                                <div class="card-actions d-flex">
                                                    <form method="post" action="">
                                                        @csrf
                                                        <button class="action-link"><i class="fa-solid fa-pen"></i></button>
                                                    </form>
                                                    <form method="post" action="{{route('deleteCategory', $category->id)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="action-link"><i class="fa-solid fa-trash-can"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
