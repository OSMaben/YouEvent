<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Models\TicketType;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reserve(Request $request, $id)
    {
        $tick_type = TicketType::where('event_id', $id)->first();

        if ($tick_type->quantity <= 0) {
            return back()->with('error', "Sorry, but you can't reserve. No tickets available.");
        }

        $user = auth()->id();
        $reservation = new Reservation();
        $reservation->user_id = $user;
        $reservation->event_id = $id;

        $reservation->save();

        $tick_type->quantity -= $request->numberOfTickets;
        $tick_type->save();

        return back()->with('success', "Your event has been reserved.");
    }

    public function cancelReservation($id)
    {
        $reservation = Reservation::find($id);

        if ($reservation) {
            $reservation->delete();
            return redirect()->back()->with('success', 'Reservation cancelled successfully.');
        } else {
            return redirect()->back()->with('error', 'Reservation not found.');
        }
    }


}
