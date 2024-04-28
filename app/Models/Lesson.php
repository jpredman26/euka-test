<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'teacher_id',
    ];

    /**
     * Get the teacher who teaches the lesson.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Get the students in the lesson.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
