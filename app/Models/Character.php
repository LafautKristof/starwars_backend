<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    protected $table = 'character';
    protected $fillable = [
        '_id',
        'name',
        'description',
        'image',
    ];
}
