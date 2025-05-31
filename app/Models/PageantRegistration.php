<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageantRegistration extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name', 'language', 'dob', 'gender', 'age', 'email', 'contact', 'nationality', 'address', 'city',
        'profession', 'institute', 'experience', 'reason',
        'height', 'eye_color', 'weight', 'hair_color', 'shoulder', 'hair_length', 'chest', 'body_type',
        'waist', 'skills', 'hips', 'dress_size', 'shoe_size',
        'full_photo', 'headshot_photo', 'id_copy', 'aadhar', 'close_shot', 'no_makeup', 'miss_shot', 'ramp_walk_video',
        'declaration'
    ];
}
