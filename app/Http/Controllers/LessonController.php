<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display the specified lesson's info.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return response()->json($lesson);
    }

    /**
     * Display the students in the specified lesson.
     *
     * @param  int  $id
     */
    public function students($id)
    {
        $lesson = Lesson::findOrFail($id);
        $students = $lesson->students;
        return response()->json($students);
    }
}
