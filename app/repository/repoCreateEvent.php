<?php

namespace App\repository;

use App\Models\Event;
use App\repository\Irepository\IeventInterFace;
use Illuminate\Http\Request;

class repoCreateEvent implements IeventInterFace
{
    public function repoCreateEvent(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'description' =>'required',
            'start_date' =>'required',
            'duration' =>'required',
            'address' =>'required',
            'state' =>'required',
            'city' =>'required',
            'zipCode' =>'required',
            'tick_price' =>'required',
            'tick_number' =>'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $event = new Event();
        $event->title = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->time = $request->time;
        $event->duration = $request->duration;
        $event->address = $request->address;
        $event->state = $request->state;
        $event->city = $request->city;
        $event->zipCode = $request->zipCode;
        $event->tick_price = $request->tick_price;
        $event->tick_number = $request->tick_number;
        if($request->hasFile('image')){

            $image = $request->file('image');
            $name=time().'.'.$image->getClientOriginalExtension();
            $image =$image->storeAs('public/images', $name);
            $event->image = $name;
        }
        $event->save();
    }
}
