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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('slug');
            $table->string('address');
            $table->string('logo');
            $table->string('working_hours');
            $table->text('mail');
            $table->text('google_loc');
            $table->text('instagram');
            $table->text('facebook');
            $table->text('youtube');
            $table->text('tiktok');
            $table->text('radio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
