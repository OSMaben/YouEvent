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
                                                            @if(auth()->user()->role_id == 3)
                                                                <span class="card-title fs-6">Reservation</span>
                                                                <span class="card-sub-title fs-3">{{$totalReservations}}</span>
                                                                <div class="d-flex align-items-center">
                                                                    <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                    <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                    <span class="font-12 color-body text-nowrap">From Previous Period</span>
                                                                </div>
                                                            @else
                                                                <span class="card-title fs-6">Users</span>
                                                                <span class="card-sub-title fs-3">0</span>
                                                                <div class="d-flex align-items-center">
                                                                    <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                    <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                    <span class="font-12 color-body text-nowrap">From Previous Period</span>
                                                                </div>
                                                            @endif
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
                                                            <span class="card-sub-title fs-3">{{$NumbertotalTickets}}</span>
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
                                                            <td>{{$event->id}}</td>
                                                            <td>{{$event->title}}</td>
                                                            <td><a href="#" target="_blank">{{$event->description}}</a></td>
                                                            <td>{{$event->id}}</td>
                                                            @if($event->Status == 0)
                                                                <td><span class="status-circle red-circle"></span>Canceled</td>
                                                            @else
                                                                <td><span class="status-circle green-circle"></span>Approved</td>
                                                            @endif
                                                            <td>{{$event->start_date}}</td>
                                                            <td class="d-flex">
                                                                <form method="post" action="{{route('approveEvent', $event->id)}}" class="mx-2">
                                                                    @csrf
                                                                    <button type="submit" class="close-model-btn bg-success text-white" data-bs-dismiss="modal" aria-label="Close">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </button>
                                                                </form>
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
                                            @elseif(auth()->user()->role_id == 3)
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
                                                                <button type="button" class="close-model-btn close-model-btn bg-success text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$event->id}}">
                                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                                </button>
                                                                <form method="post" action="{{route('editEvent', $event->id)}}">
                                                                    @csrf
                                                                    <div class="modal fade" id="staticBackdrop{{$event->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="step-content">
                                                                                        <div class="step-tab-panel step-tab-info active" id="tab_step1">
                                                                                            <div class="tab-from-content">
                                                                                                <div class="main-card">
                                                                                                    <div class="bp-title">
                                                                                                        <h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Details</h4>
                                                                                                    </div>
                                                                                                    <div class="p-4 bp-form main-form">
                                                                                                        <div class="row">
                                                                                                            @csrf
                                                                                                            <div class="col-lg-12 col-md-12">
                                                                                                                <div class="form-group border_bottom pb_30">
                                                                                                                    <label class="form-label fs-16">Give your event a name.*</label>
                                                                                                                    <p class="mt-2 d-block fs-14 mb-3">See how your name appears on the event page and a list of all places where your event name will be used. <a href="#" class="a-link">Learn more</a></p>
                                                                                                                    <input class="form-control h_50" type="text" name="name" placeholder="Enter event name here" value="{{$event->title}}">
                                                                                                                </div>

                                                                                                                <div class="form-group border_bottom pt_30 pb_30">
                                                                                                                    <label class="form-label fs-16">When is your event?*</label>
                                                                                                                    <p class="mt-2 fs-14 d-block mb-3">Tell your attendees when your event starts so they can get ready to attend.</p>
                                                                                                                    <div class="row g-2">
                                                                                                                        <div class="col-md-6">
                                                                                                                            <label class="form-label mt-3 fs-6">Event Date.*</label>
                                                                                                                            <div class="loc-group position-relative">
                                                                                                                                <input class="form-control h_50 datepicker-here" data-language="en" name="start_date" type="date" placeholder="MM/DD/YYYY" value="">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-6">
                                                                                                                            <div class="row g-2">
                                                                                                                                <div class="col-md-6">
                                                                                                                                    <label class="form-label mt-3 fs-6">Duration</label>
                                                                                                                                    <select class="form-control h_50" name="duration" data-size="5" data-live-search="true">
                                                                                                                                        <option value="15">15m</option>
                                                                                                                                        <option value="30">30m</option>
                                                                                                                                        <option value="45">45m</option>
                                                                                                                                        <option value="60" selected="selected">1h</option>
                                                                                                                                        <option value="75">1h 15m</option>
                                                                                                                                        <option value="90">1h 30m</option>
                                                                                                                                        <option value="105">1h 45m</option>
                                                                                                                                        <option value="120">2h</option>
                                                                                                                                        <option value="135">2h 15m</option>
                                                                                                                                        <option value="150">2h 30m</option>
                                                                                                                                        <option value="165">2h 45m</option>
                                                                                                                                        <option value="180">3h</option>
                                                                                                                                        <option value="195">3h 15m</option>
                                                                                                                                        <option value="210">3h 30m</option>
                                                                                                                                        <option value="225">3h 45m</option>
                                                                                                                                    </select>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group pt_30 pb_30">
                                                                                                                    <label class="form-label fs-16">Add a few images to your event banner.</label>
                                                                                                                    <p class="mt-2 fs-14 d-block mb-3 pe_right">Upload colorful and vibrant images as the banner for your event! See how beautiful images help your event details page. <a href="#" class="a-link">Learn more</a></p>
                                                                                                                    <div class="content-holder mt-4">
                                                                                                                        <div class="default-event-thumb">
                                                                                                                            <div class="default-event-thumb-btn">
                                                                                                                                <div class="thumb-change-btn">
                                                                                                                                    <input type="file" name="image" id="thumb-img">
                                                                                                                                    <label for="thumb-img">Change Image</label>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <img src="images/banners/custom-img.jpg" alt="">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="venue-event">
                                                                                                                        <label class="form-label fs-16">Add A Description Of your Event</label>
                                                                                                                        <div class="form-floating">
                                                                                                                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
                                                                                                                             {{$event->description}}
                                                                                                                        </textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <script>
                                                                                                                    ClassicEditor
                                                                                                                        .create( document.querySelector( '#editor' ) )
                                                                                                                        .then( editor => {
                                                                                                                            console.log( editor );
                                                                                                                        } )
                                                                                                                        .catch( error => {
                                                                                                                            console.error( error );
                                                                                                                        } );
                                                                                                                </script>
                                                                                                                <div class="form-group pt_30 pb-2">
                                                                                                                    <label class="form-label fs-16">Where is your event taking place? *</label>
                                                                                                                    <p class="mt-2 fs-14 d-block mb-3">Add a venue to your event to tell your attendees where to join the event.</p>
                                                                                                                    <div class="stepper-data-set">
                                                                                                                        <div class="content-holder template-selector">
                                                                                                                            <div class="row g-4">
                                                                                                                                <div class="col-md-12">
                                                                                                                                    <div class="venue-event">
                                                                                                                                        <div class="map">
                                                                                                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27382.59422947023!2d75.84077125074462!3d30.919535510612153!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1534312417365" style="border:0" allowfullscreen></iframe>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group mt-1">
                                                                                                                                        <label class="form-label fs-6">Address</label>
                                                                                                                                        <input  class="form-control h_50" name="address" type="text" placeholder=""  value="{{$event->address}}">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group mt-1">
                                                                                                                                        <label class="form-label">State*</label>
                                                                                                                                        <input class="form-control h_50" name="state" type="text" placeholder=""  value="{{$event->state}}">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-lg-6 col-md-12">
                                                                                                                                    <div class="form-group mt-1">
                                                                                                                                        <label class="form-label">City/Suburb*</label>
                                                                                                                                        <input class="form-control h_50" name="city" type="text" placeholder=""   value="{{$event->city}}">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-lg-6 col-md-12">
                                                                                                                                    <div class="form-group mt-1">
                                                                                                                                        <label class="form-label">Zip/Post Code*</label>
                                                                                                                                        <input class="form-control h_50" name="zipCode" type="text" placeholder=""  value="{{$event->zipCode}}">
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

                                                                                            <div class="step-tab-panel step-tab-gallery" id="tab_step2">
                                                                                                <div class="tab-from-content">
                                                                                                    <div class="main-card">
                                                                                                        <div class="bp-title">
                                                                                                            <h4><i class="fa-solid fa-ticket step_icon me-3"></i>Tickets</h4>
                                                                                                        </div>
                                                                                                        <div class="p-4 bp-form main-form">
                                                                                                            <div class="form-group border_bottom pb_30">
                                                                                                                <div class="ticket-section">
                                                                                                                    <label class="form-label fs-16">Let's create tickets!</label>
                                                                                                                    <p class="mt-2 fs-14 d-block mb-3 pe_right">Add the ticket price and the number of your attendees. For free events, keep the price at $0.</p>
                                                                                                                    <div class="content-holder">
                                                                                                                        <div class="row g-3">
                                                                                                                            <div class="col-md-6 disabled-action">
                                                                                                                                <label class="form-label mt-3 fs-6">Price*</label>
                                                                                                                                <div class="loc-group position-relative input-group">
                                                                                                                                    <input class="form-control h_50" name="tick_price" type="text" placeholder=""  value="{{$event->tick_price}}">
                                                                                                                                    <div class="pp-select">
                                                                                                                                        <select class="selectpicker dropdown-no-bg">
                                                                                                                                            <option value="AUD" selected="selected">AUD</option>
                                                                                                                                        </select>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-md-6">
                                                                                                                                <label class="form-label mt-3 fs-6">Total number of tickets available*</label>
                                                                                                                                <div class="input-number">
                                                                                                                                    <input class="form-control h_50" name="tick_number" type="number" placeholder="" value="{{$event->tick_number}}">
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
                                                                                        <div class="step-footer step-tab-pager mt-4">

                                                                                            <button data-direction="finish" type="submit" class="btn btn-default btn-hover steps_btn">Create</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                            @else
                                                <table class="table">
                                                    <!-- Table header -->
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Event Owner</th>
                                                        <th scope="col">Event Name</th>
                                                        <th scope="col">price</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($events as $event)
                                                        <tr>
                                                            <td>{{$event->title}}</td>
                                                            <td><a href="#" target="_blank"> {{ Str::limit($event->description, 50) }}</a></td>
                                                            <td>{{$event->tick_price}}$</td>
                                                            <td>{{$event->start_date}}</td>
                                                            <td>{{$event->city}}</td>
                                                            <td class="d-flex">
                                                                <button type="button" class="close-model-btn close-model-btn bg-success text-white mx-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$event->id}}">
                                                                    <i class="fa-solid fa-download"></i>
                                                                </button>
                                                                <form method="post" action="{{route('CancelReservation', $event->id)}}" onsubmit="return confirm('Are you sure you want to cancel your order');">
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
