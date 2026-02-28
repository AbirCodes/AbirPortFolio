<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name')->default('Nathan');
            $table->string('hero_title')->default('A Website Designer from New York');
            $table->text('hero_subtitle')->nullable();
            $table->string('about_title')->default('Who I Am');
            $table->text('about_text')->nullable();
            $table->text('contact_intro')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
