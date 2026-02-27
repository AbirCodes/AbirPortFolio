<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_title')->default('Portfolio');
            $table->text('portfolio_description')->nullable();
            $table->string('portfolio_image')->nullable();
            $table->string('sidebar_title')->default('Portfolio Highlights');
            $table->text('sidebar_description')->nullable();
            $table->string('sidebar_image')->nullable();
            $table->string('profile_name')->default('John Doe');
            $table->text('profile_bio')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_page_settings');
    }
};
