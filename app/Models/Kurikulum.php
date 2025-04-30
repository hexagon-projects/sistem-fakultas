<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    protected $fillable = [
        'id_departement',
        'title',
        'description',
        'image',
        'home',
    ];
}
