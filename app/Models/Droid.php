<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Droid extends Model
{
    protected $table = 'droid';
    protected $fillable = [
        '_id',
        'name',
        'description',
        'image',
    ];
}
