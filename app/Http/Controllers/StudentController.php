<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display the specified student's info.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student);
    }

    /**
     * Display the specified student's activities.
     *
     * @param  int  $id
     */
    public function activities($id)
    {
        $student = Student::findOrFail($id);
        $activities = $student->activities;
        return response()->json($activities);
    }
}
