<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */


    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('background_image'); // To store the image path
            $table->string('category')->nullable(); // Category for the banner
            $table->string('title'); // Title of the banner
            $table->text('description')->nullable(); // Banner description
            $table->string('register_button_text')->nullable(); // Text for register button
            $table->string('register_button_link')->nullable(); // Link for the register button
            $table->string('video_button_text')->nullable(); // Text for video button
            $table->string('youtube_video_url')->nullable(); // YouTube video URL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
