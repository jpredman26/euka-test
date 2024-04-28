<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject', 'score', 'student_id',
    ];

    /**
     * Get the student that owns the activity.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
