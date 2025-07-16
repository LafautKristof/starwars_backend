<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    protected $table = 'specie';
    protected $fillable = [
        '_id',
        'name',
        'description',
        'image',
    ];
}
