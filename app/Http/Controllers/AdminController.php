<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $NumbertotalTickets = 0;
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role_id == 3) {
                $totalTickets = Event::where('user_id', $user->id)->sum('tick_number');
                $NumbertotalTickets = $totalTickets;
            }

        } else {
            abort(404,"login first");
        }
        $auth = auth()->id();
        $reservation = reservation::where('user_id', $auth)->get();
        $totalReservations = count($reservation);
        $events = Event::all();
        return view('dashboard', compact('events', 'NumbertotalTickets', 'totalReservations'));
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
