<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'image_path',
        'author',
        'published_at',
        'tags',
        'comments_label',
        'button_text',
        'sort_order',
    ];
}
