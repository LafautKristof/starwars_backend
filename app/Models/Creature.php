<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    protected $table = 'creature';
    protected $fillable = [
        '_id',
        'name',
        'description',
        'image',
    ];
}
