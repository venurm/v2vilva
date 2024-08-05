<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_content',
        'content',
        'seo_url',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'image_url',
        'video_url', // Added video_url
        'published_by',
        'published_at',
        'status',
    ];
}
