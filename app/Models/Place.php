<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'location',
        'categories',
        'rate',
        'latitude',
        'longitude'
    ];
}
