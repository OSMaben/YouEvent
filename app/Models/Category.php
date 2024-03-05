<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function Event()
    {
        return $this->hasMany(Event::class);
    }
}
