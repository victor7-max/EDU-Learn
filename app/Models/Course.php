<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'course_image',
        'start_date',
        'published'
    ];
    public function teachers()
    {
        return $this->belongsToMany(User::class,'course_user');
    }
}
