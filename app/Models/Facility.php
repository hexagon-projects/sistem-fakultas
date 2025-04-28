<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'id_departement',
        'title',
        'subtitle',
        'description',
        'home',
        'image',
        'yt',
    ];    
}
