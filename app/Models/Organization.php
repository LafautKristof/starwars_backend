<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organization';
    protected $fillable = [
        '_id',
        'name',
        'description',
        'image',
    ];
}
