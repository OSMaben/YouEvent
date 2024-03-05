<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventDetails extends Controller
{
    public function index()
    {
        return view('EventDetails');
    }
}
