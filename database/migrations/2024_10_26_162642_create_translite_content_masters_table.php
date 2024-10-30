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
        Schema::create('translite_content_masters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_news')->nullable()->constrained('news')->onDelete('cascade');
            $table->foreignId('id_programs')->nullable()->constrained('programs')->onDelete('cascade');
            $table->foreignId('id_content')->nullable()->constrained('content')->onDelete('cascade');
            $table->string('local',3);
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('images');
            $table->text('body');
            $table->string('author');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translite_content_masters');
    }
};
