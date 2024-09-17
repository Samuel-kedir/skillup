<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'background_image',
        'category',
        'title',
        'description',
        'register_button_text',
        'register_button_link',
        'video_button_text',
        'youtube_video_url',
    ];
}
