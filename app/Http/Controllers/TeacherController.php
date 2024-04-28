<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display the specified teacher's info.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return response()->json($teacher);
    }

    /**
     * Display the lessons taught by the specified teacher.
     *
     * @param  int  $id
     */
    public function lessons($id)
    {
        $teacher = Teacher::findOrFail($id);
        $lessons = $teacher->lessons;
        return response()->json($lessons);
    }
}
