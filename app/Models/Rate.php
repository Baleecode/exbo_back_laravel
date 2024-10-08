<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function place() 
    {
        return $this->belongsTo(Place::class);
    }

    protected $fillable = [
        'place_id',
        'user_id',
        'rate_place'
    ];
}
