<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table): void {
            $table->string('image_path')->nullable()->after('url');
        });

        Schema::table('breaking_news', function (Blueprint $table): void {
            $table->string('image_path')->nullable()->after('url');
        });

        Schema::table('recent_post_links', function (Blueprint $table): void {
            $table->string('image_path')->nullable()->after('url');
        });
    }

    public function down(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table): void {
            $table->dropColumn('image_path');
        });

        Schema::table('breaking_news', function (Blueprint $table): void {
            $table->dropColumn('image_path');
        });

        Schema::table('recent_post_links', function (Blueprint $table): void {
            $table->dropColumn('image_path');
        });
    }
};
