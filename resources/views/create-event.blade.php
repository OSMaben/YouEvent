@extends('layouts.layout')
@section('content')

<div class="wrapper">
    <div class="breadcrumb-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <div class="barren-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="create.html">Create</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Online Event</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="main-title text-center">
                        <h3>Create Venue Event</h3>
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
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <form method="post" action="{{route('event_create')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="wizard-steps-block">
                        <div id="add-event-tab" class="step-app">
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
                                                            <input class="form-control h_50" type="text" name="name" placeholder="Enter event name here" value="">
                                                        </div>

                                                        <div class="form-group border_bottom pt_30 pb_30">
                                                            <label class="form-label fs-16">Choose a category for your event.*</label>
                                                            <p class="mt-2 d-block fs-14 mb-3">Choosing relevant categories helps to improve the discoverability of your event. <a href="#" class="a-link">Learn more</a></p>
                                                            <select class="form-control h_50" >
                                                                @foreach($categories as $category)
                                                                    <option value="01">{{$category->name }}</option>
                                                                @endforeach
                                                            </select>
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
                                                                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
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
                                                                                <input  class="form-control h_50" name="address" type="text" placeholder="" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group mt-1">
                                                                                <label class="form-label">State*</label>
                                                                                <input class="form-control h_50" name="state" type="text" placeholder="" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <div class="form-group mt-1">
                                                                                <label class="form-label">City/Suburb*</label>
                                                                                <input class="form-control h_50" name="city" type="text" placeholder="" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <div class="form-group mt-1">
                                                                                <label class="form-label">Zip/Post Code*</label>
                                                                                <input class="form-control h_50" name="zipCode" type="text" placeholder="" value="">
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
                                                                        <input class="form-control h_50" name="tick_price" type="text" placeholder="" value="10.00">
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
                                                                        <input class="form-control h_50" name="quantity" type="number" placeholder="" value="5">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label mt-3 fs-6">Total number of tickets available*</label>
                                                                    <select class="form-control h_50" name="ticket_type">
                                                                        <option value="vip">Vip</option>
                                                                        <option value="standard">standard</option>
                                                                    </select>
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

                                <button data-direction="finish" class="btn btn-default btn-hover steps_btn">Create</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
