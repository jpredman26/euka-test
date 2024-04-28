<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'class_id', 'grade',
    ];

    /**
     * Get the lesson associated with the student.
     */
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    /**
     * Get the activities associated with the student.
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
