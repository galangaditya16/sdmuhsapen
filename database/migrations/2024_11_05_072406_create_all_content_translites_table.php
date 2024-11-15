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
        Schema::create('all_content_translites', function (Blueprint $table) {
            $table->id();
            $table->string('lang');
            $table->integer('id_news')->nullable()->constrained('news')->onDelete('casade');
            $table->integer('id_programs')->nullable()->constrained('programs')->onDelete('casade');
            $table->integer('id_content')->nullable()->constrained('content')->onDelete('casade');
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_content_translites');
    }
};
