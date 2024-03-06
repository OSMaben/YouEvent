<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        //code here
        $events = Event::all();
        return view('dashboard', compact('events'));
    }

    public function Approve($id)
    {
        $event = Event::find($id);

        if(!$event)
        {
            return redirect()->back()->with('faild', 'event Not Found');
        }

        $event->status = 1;
        $event->save();

        return redirect()->back()->with('success', 'Event has been approved.');
    }

    public function Refuse($id)
    {
        $event = Event::find($id);

        if(!$event)
        {
            return redirect()->back()->with('faild', 'event Not Found');
        }

        $event->status = 0;
        $event->save();

        return redirect()->back()->with('success', 'Event has been approved.');
    }
}
