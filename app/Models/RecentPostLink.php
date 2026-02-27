<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentPostLink extends Model
{
    use HasFactory;

    protected $table = 'recent_post_links';

    protected $fillable = [
        'title',
        'url',
        'sort_order',
    ];
}
