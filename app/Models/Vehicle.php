<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle';
    protected $fillable = [
        '_id',
        'name',
        'description',
        'image',
    ];
}
