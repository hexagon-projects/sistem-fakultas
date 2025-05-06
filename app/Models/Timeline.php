<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'id_departement',
        'title',
        'slug',
        'description',
        'image',
        'home',
        'no_urut',
    ];
}
