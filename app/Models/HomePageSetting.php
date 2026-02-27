<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'portfolio_title',
        'portfolio_description',
        'portfolio_image',
        'sidebar_title',
        'sidebar_description',
        'sidebar_image',
        'profile_name',
        'profile_bio',
    ];
}
