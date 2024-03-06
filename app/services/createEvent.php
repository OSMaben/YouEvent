<?php

namespace App\services;

use App\repository\Irepository\IeventInterFace;
use App\services\Iservice\IserviceEventInterFace;
use Illuminate\Http\Request;

class createEvent implements IserviceEventInterFace
{
    protected $repo;

    public function __construct(IeventInterFace $repoInterFace)
    {
        $this->repo = $repoInterFace;
    }
    public function createEventService(Request $request)
    {
        return $this->repo->repoCreateEvent($request);
    }
}
