<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function ticketType()
    {
        return $this->hasMany(TicketType::class);
    }
}
