<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'date',
        'duration',
        'price',
        'image_path',
        'registration_link',
    ];
}
