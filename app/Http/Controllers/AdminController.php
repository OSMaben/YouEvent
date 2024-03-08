<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\reservation;
use App\Models\User;
use App\Models\Role;
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
        $user = Auth::user();
        $reservations = $user->reservations()->with('event')->get();

        return view('dashboard', compact('events', 'NumbertotalTickets', 'totalReservations','reservations'));
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

    public function userslist()
    {
        $authUserId = Auth::id();

        $users = User::where('id', '!=', $authUserId)->get();

        $userRoles = Role::all();

        return view('UsersList', compact('users', 'userRoles'));
    }

    public function updateUserRole(Request $request, $idUser)
    {
        $user = User::find($idUser);
        $user->role_id = $request->input('newRole');
        $user->save();
        return back()->with('success', "the role of user with the name $user->name has been changed");
    }

    public function categories()
    {
        $categories = Category::all();
        return view('Categories', compact('categories'));
    }

    public function AddCategories(Request $request)
    {
        $categories = new Category([
            'name' => $request->category,
        ]);

        $categories->save();
        return back()->with('success', 'Category Has Been Added');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with('success', "deleted SuccessFuly");
    }
}
