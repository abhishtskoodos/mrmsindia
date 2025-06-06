<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaCoverage extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'media_coverage';
    protected $fillable = ['name', 'alt', 'image','title','description'];
}
