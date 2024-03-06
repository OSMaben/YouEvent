<?php

namespace App\repository\Irepository;

use Illuminate\Http\Request;


interface IeventInterFace
{
    public function repoCreateEvent(Request $request);
}
