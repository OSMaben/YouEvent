<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'event_id'];
    protected $table = 'reservation';
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
