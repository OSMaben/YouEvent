@extends('layouts.layout')
@section('content')


    <div class="d-flex flex-column h-100">
        <nav class="vertical_nav">
            <div class="left_section menu_left" id="js-menu">
                <div class="left_section">
                    <ul>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard.html" class="menu--link active" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-gauge menu--icon"></i>
                                <span class="menu--label">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_events.html" class="menu--link" title="Events" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-calendar-days menu--icon"></i>
                                <span class="menu--label">Events</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_promotion.html" class="menu--link" title="Promotion" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-rectangle-ad menu--icon"></i>
                                <span class="menu--label">Promotion</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_contact_lists.html" class="menu--link" title="Contact List" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-regular fa-address-card menu--icon"></i>
                                <span class="menu--label">Contact List</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_payout.html" class="menu--link" title="Payouts" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-credit-card menu--icon"></i>
                                <span class="menu--label">Payouts</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_reports.html" class="menu--link" title="Reports" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-chart-pie menu--icon"></i>
                                <span class="menu--label">Reports</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_subscription.html" class="menu--link" title="Subscription" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-bahai menu--icon"></i>
                                <span class="menu--label">Subscription</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_conversion_setup.html" class="menu--link" title="Conversion Setup" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-square-plus menu--icon"></i>
                                <span class="menu--label">Conversion Setup</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_about.html" class="menu--link" title="About" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-circle-info menu--icon"></i>
                                <span class="menu--label">About</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="my_organisation_dashboard_my_team.html" class="menu--link team-lock" title="My Team" data-bs-toggle="tooltip" data-bs-placement="right">
                                <i class="fa-solid fa-user-group menu--icon"></i>
                                <span class="menu--label">My Team</span>
                            </a>
                        </li>
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
                                <h3><i class="fa-solid fa-gauge me-3"></i>Dashboard</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-card add-organisation-card p-4 mt-5">
                                <div class="ocard-left">
                                    <div class="ocard-avatar">
                                        <img src="images/profile-imgs/img-13.jpg" alt="">
                                    </div>
                                    <div class="ocard-name">
                                        <h4>John Doe</h4>
                                        <span>My Organisation</span>
                                    </div>
                                </div>
                               @if(auth()->user()->role_id == 2)
                                    <div class="ocard-right">
                                        <button class="pe-4 ps-4 co-main-btn min-width" data-bs-toggle="modal" data-bs-target="#addorganisationModal"><i class="fa-solid fa-plus"></i>Add Organisation</button>
                                    </div>
                                @else
                                    <div class="ocard-right">
                                        <form action="/create-event">
                                            <button class="pe-4 ps-4 co-main-btn min-width" data-bs-toggle="modal" data-bs-target="#addorganisationModal"><i class="fa-solid fa-plus"></i>Add Event</button>
                                        </form>
                                    </div>
                               @endif
                            </div>
                            <div class="main-card mt-4">
                                <div class="dashboard-wrap-content">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center p-4">
                                        <div class="dashboard-date-wrap d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="dashboard-date-arrows">
                                                <a href="#" class="before_date"><i class="fa-solid fa-angle-left"></i></a>
                                                <a href="#" class="after_date disabled"><i class="fa-solid fa-angle-right"></i></a>
                                            </div>
                                            <h5 class="dashboard-select-date">
                                                <span>1st April, 2022</span>
                                                -
                                                <span>30th April, 2022</span>
                                            </h5>
                                        </div>
                                        <div class="rs">
                                            <div class="dropdown dropdown-text event-list-dropdown">
                                                <button class="dropdown-toggle event-list-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span>Selected Events (1)</span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">1</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard-report-content">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6">
                                                <div class="dashboard-report-card purple">
                                                    <div class="card-content">
                                                        <div class="card-content">
                                                            <span class="card-title fs-6">Revenue (AUD)</span>
                                                            <span class="card-sub-title fs-3">$550.00</span>
                                                            <div class="d-flex align-items-center">
                                                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                <span class="font-12 color-body text-nowrap">From Previous Period</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-media">
                                                            <i class="fa-solid fa-money-bill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6">
                                                <div class="dashboard-report-card red">
                                                    <div class="card-content">
                                                        <div class="card-content">
                                                            <span class="card-title fs-6">Orders</span>
                                                            <span class="card-sub-title fs-3">2</span>
                                                            <div class="d-flex align-items-center">
                                                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                <span class="font-12 color-body text-nowrap">From Previous Period</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-media">
                                                            <i class="fa-solid fa-box"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6">
                                                <div class="dashboard-report-card info">
                                                    <div class="card-content">
                                                        <div class="card-content">
                                                            <span class="card-title fs-6">Page Views</span>
                                                            <span class="card-sub-title fs-3">30</span>
                                                            <div class="d-flex align-items-center">
                                                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                <span class="font-12 color-body text-nowrap">From Previous Period</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-media">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6">
                                                <div class="dashboard-report-card success">
                                                    <div class="card-content">
                                                        <div class="card-content">
                                                            <span class="card-title fs-6">Ticket Sales</span>
                                                            <span class="card-sub-title fs-3">3</span>
                                                            <div class="d-flex align-items-center">
                                                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                <span class="font-12 color-body text-nowrap">From Previous Period</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-media">
                                                            <i class="fa-solid fa-ticket"></i>
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
                    <div class="event-list">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="orders-tab" role="tabpanel">
                                <div class="table-card mt-4">
                                    <div class="main-table">
                                        <div class="table-responsive">
                                            @if(auth()->user()->role_id == 2)
                                                <table class="table">
                                                    <!-- Table header -->
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Event Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <!-- Table body -->
                                                    <tbody>
                                                    @foreach($events as $event)
                                                        <tr>
                                                            <!-- Table data -->
                                                            <td>{{$event->id}}</td>
                                                            <td>{{$event->title}}</td>
                                                            <td><a href="#" target="_blank">{{$event->description}}</a></td>
                                                            <td>{{$event->id}}</td>
                                                            <!-- Display event status -->
                                                            @if($event->Status == 0)
                                                                <td><span class="status-circle red-circle"></span>Canceled</td>
                                                            @else
                                                                <td><span class="status-circle green-circle"></span>Approved</td>
                                                            @endif
                                                            <td>{{$event->start_date}}</td>
                                                            <!-- Display action buttons -->
                                                            <td class="d-flex">
                                                                <!-- Form for approving event -->
                                                                <form method="post" action="{{route('approveEvent', $event->id)}}" class="mx-2">
                                                                    @csrf
                                                                    <button type="submit" class="close-model-btn bg-success text-white" data-bs-dismiss="modal" aria-label="Close">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </button>
                                                                </form>
                                                                <!-- Form for refusing event -->
                                                                <form method="post" action="{{route('refuseEvent', $event->id)}}">
                                                                    @csrf
                                                                    <button type="submit" class="close-model-btn bg-danger text-white" data-bs-dismiss="modal" aria-label="Close">
                                                                        <i class="fa-solid fa-xmark"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <table class="table">
                                                    <!-- Table header -->
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Event Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <!-- Table body -->
                                                    <tbody>
                                                    @foreach($events as $event)
                                                        <tr>
                                                            <!-- Table data -->
                                                            <td>{{$event->id}}</td>
                                                            <td>{{$event->title}}</td>
                                                            <td><a href="#" target="_blank">{{$event->description}}</a></td>
                                                            <td>{{$event->id}}</td>
                                                            <!-- Display event status -->
                                                            @if($event->Status == 0)
                                                                <td><span class="status-circle red-circle"></span>Canceled</td>
                                                            @else
                                                                <td><span class="status-circle green-circle"></span>Approved</td>
                                                            @endif
                                                            <td>{{$event->start_date}}</td>
                                                            <td class="d-flex">
                                                                <form method="post" action="{{route('editEvent', $event->id)}}" class="mx-2">
                                                                    @csrf
                                                                    <button type="submit" class="close-model-btn bg-success text-white" data-bs-dismiss="modal" aria-label="Close">
                                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                                    </button>
                                                                </form>
                                                                <form method="post" action="{{route('DeleteEvent', $event->id)}}" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                                                    @csrf
                                                                    <button type="submit" class="close-model-btn bg-danger text-white" data-bs-dismiss="modal" aria-label="Close">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            @endif

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
