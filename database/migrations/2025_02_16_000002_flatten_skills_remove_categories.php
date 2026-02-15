<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->string('image')->nullable()->after('name');
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->dropForeign(['skill_category_id']);
            $table->dropColumn('skill_category_id');
        });

        Schema::dropIfExists('skill_categories');
    }

    public function down(): void
    {
        Schema::create('skill_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->foreignId('skill_category_id')->nullable()->after('id')->constrained('skill_categories')->cascadeOnDelete();
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
