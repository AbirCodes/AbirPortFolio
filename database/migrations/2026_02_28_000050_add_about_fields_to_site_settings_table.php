<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->json('about_skills')->nullable()->after('about_text');
            $table->json('about_coding_skills')->nullable()->after('about_skills');
            $table->json('about_experiences')->nullable()->after('about_coding_skills');
            $table->json('about_education')->nullable()->after('about_experiences');
            $table->json('about_testimonials')->nullable()->after('about_education');
            $table->json('about_counters')->nullable()->after('about_testimonials');
        });
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'about_skills',
                'about_coding_skills',
                'about_experiences',
                'about_education',
                'about_testimonials',
                'about_counters',
            ]);
        });
    }
};
