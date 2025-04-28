<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'id_departement',
        'name',
        'description',
        'home',
        'image',
    ];
    
}
