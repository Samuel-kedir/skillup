<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSyllabus extends Model
{
    use HasFactory;

    protected $table = 'course_syllabuses';
    protected $fillable = [
        'title',
        'slug',
        'course_icon',
        'course_hero_image',
        'start_date',
        'duration',
        'fee',
        'live_session_time',
        'detailed_syllabus_title',
        'detailed_syllabus_content',
        'about_course_title',
        'about_course_detail',
        'category_id',
    ];
    protected $casts = [
        'start_date' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
