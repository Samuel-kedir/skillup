<?php
// database/migrations/xxxx_xx_xx_create_course_syllabuses_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSyllabusesTable extends Migration
{
    public function up()
    {
        Schema::create('course_syllabuses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('course_icon')->nullable();
            $table->string('course_hero_image')->nullable();
            $table->date('start_date');
            $table->string('duration');
            $table->decimal('fee', 8, 2);
            $table->string('live_session_time');
            $table->string('detailed_syllabus_title');
            $table->text('detailed_syllabus_content');
            $table->string('about_course_title');
            $table->text('about_course_detail');
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_syllabuses');
    }
}
