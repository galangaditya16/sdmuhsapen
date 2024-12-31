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
        Schema::create('all_category_translites', function (Blueprint $table) {
            $table->id();
            $table->string('lang');
            $table->integer('id_category_news')->nullable()->constrained('category_news')->onDelete('casade');
            $table->integer('id_category_programs')->nullable()->constrained('category_programs')->onDelete('casade');
            $table->integer('id_category_content')->nullable()->constrained('category_contents')->onDelete('casade');
            $table->integer('id_teacher_position')->nullable()->constrained('teacher_positionnews')->onDelete('casade');
            $table->string('title');
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_catgeory_translites');
    }
};
