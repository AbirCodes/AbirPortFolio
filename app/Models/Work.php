<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'year',
        'summary',
        'image_path',
        'details',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
