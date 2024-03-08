<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\TicketType;
use App\services\Iservice\IserviceEventInterFace;
use Illuminate\Http\Request;

class EventController extends Controller
{

//    protected IserviceEventInterFace $event;
//
//    public function __construct(IserviceEventInterFace $event)
//    {
//        $this->event = $event;
//    }

    public function create()
    {
        $categories = Category::all();
        return view('create-event', compact('categories'));
    }

    public function event_create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'duration' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipCode' => 'required',
            'tick_price' => 'required',
            'quantity' => 'required',
            'image' => 'required',
            'ticket_type' => 'required',
        ]);

        $event = new Event();
        $event->title = $request->name;
        $event->user_id = auth()->id();
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->duration = $request->duration;
        $event->address = $request->address;
        $event->state = $request->state;
        $event->city = $request->city;
        $event->category_id = 1;
        $event->zipCode = $request->zipCode;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image = $image->storeAs('public/images', $name);
            $event->image = $name;
        }
        $event->save();
        $ticketType = new TicketType([
            'event_id' => $event->id,
            'type' => $request->input('ticket_type'),
            'price' => $request->input('tick_price'),
            'quantity' => $request->input('quantity'),
        ]);



        $ticketType->save();

        $user = auth()->user();
        $user->role_id = 3;
        $user->save();

        return redirect()->back()->with('success', 'added successfully');
    }



    public function Show()
    {
        $events = Event::where('status', 1)->get();

        return view('welcome', compact('events'));
    }

    public function details($id)
    {
        $event = Event::find($id);

        if(!$event) {
            abort(404);
        }

        $ticketTypes = TicketType::where('event_id', $id)->get();
        $categories = Category::all();
        return view('eventDetails', compact('event', 'ticketTypes', 'categories'));
    }

    public function DeleteEvent($id)
    {
        $event = Event::find($id);

        if ($event) {
            $event->delete();

            return redirect()->back()->with('success', 'Event deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Event not found.');
        }
    }


//    public function showEdite($id)
//    {
//        $event = Event::find($id);
//        return view('editEvent', compact('event'));
//    }



    public function editEvent(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'duration' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipCode' => 'required',
            'tick_price' => 'required',
            'tick_number' => 'required',
        ]);

        $event = Event::findOrFail($id);

        $event->title = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->duration = $request->duration;
        $event->address = $request->address;
        $event->state = $request->state;
        $event->city = $request->city;
        $event->zipCode = $request->zipCode;
        $event->tick_price = $request->tick_price;
        $event->tick_number = $request->tick_number;

        $event->save();


        return redirect('/admin-dashboard');
    }
}
