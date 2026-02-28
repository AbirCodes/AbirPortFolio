<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'hero_title',
        'hero_subtitle',
        'home_hero_image_path',
        'about_title',
        'about_text',
        'about_skills',
        'about_coding_skills',
        'about_experiences',
        'about_education',
        'about_testimonials',
        'about_counters',
        'contact_intro',
        'contact_email',
        'contact_phone',
    ];

    protected $casts = [
        'about_skills' => 'array',
        'about_coding_skills' => 'array',
        'about_experiences' => 'array',
        'about_education' => 'array',
        'about_testimonials' => 'array',
        'about_counters' => 'array',
    ];
}
