<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'resume',
        'content',
        'publish',
        'image',
        'yt',
        'id_category',
        'created_at',
    ];

    public $timestamps = false;
    // Relasi ke kategori (jika ada model FaqCategory)
    public function category()
    {
        return $this->belongsTo(Faq_Category::class, 'id_category');
    }
}
