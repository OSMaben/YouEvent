@extends('layouts.layout')
@section('content')

    <div class="wrapper">
        <div class="hero-banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-10">
                        <div class="hero-banner-content">
                            <h2>The Easiest and Most Powerful Online Event Booking and Ticketing System</h2>
                            <p>Barren is an all-in-one event ticketing platform for event organisers, promoters, and
                                managers. Easily create, promote and manage your events of any type and size.</p>
                            @if(Auth::check())
                                <a href="/create-event" class="main-btn btn-hover">Create Event <i
                                        class="fa-solid fa-arrow-right ms-3"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-events p-80" id="events">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="main-title">
                            <h3>Explore Events</h3>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-filter-items">
                            <div class="featured-controls">
                                <div class="row" data-ref="event-filter-content">

                                    @foreach($events as $event)
                                        <div
                                        class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness"
                                        data-ref="mixitup-target">
                                        <div class="main-card mt-4">
                                            <div class="event-thumbnail">
                                                <a href="#" class="thumbnail-img">
                                                    <img src="storage/images/{{$event->image}}" alt="">
                                                </a>
                                            </div>
                                            <div class="event-content">
                                                <form method="get" action="{{route('eventDetails', $event->id)}}">
                                                    @csrf
                                                    <button type="submit" class="event-title" style="margin: 0; background: transparent; border: 0; font-size: 1.3rem">{{$event->title}}</button>
                                                </form>
                                                <span class="duration-price my-4 ">{{ Str::limit($event->description, 50) }}</span>

                                                <div class="duration-price-remaining">
                                                    <span class="duration-price">${{$event->tick_price}}</span>
                                                    <span class="remaining"></span>
                                                </div>
                                            </div>
                                            <div class="event-footer">
                                                <div class="event-timing">
                                                    <div class="publish-date">
                                                        <span><i class="fa-solid fa-calendar-day me-2"></i>15 Apr</span>
                                                        <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                        <span>{{$event->start_date}}</span>
                                                    </div>
                                                    <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>{{$event->duration}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="browse-btn">
                                    <a href="explore_events.html" class="main-btn btn-hover ">Browse All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
