<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('url_slug')->nullable()->unique();
            $table->text('requirements')->nullable();
            $table->text('short_description')->nullable();
            $table->text('what_you_will_learn')->nullable();
            $table->longText('long_description')->nullable();
            $table->foreignId('teacher_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
