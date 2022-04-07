<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
//        dd($students);
        return view('/students', compact('students'));
    }
    public function addStudent(Request $request)
    {
        dd($request);
        $student = new Student();
        $student->firstname  = $request->firstname;
        $student->lastname  = $request->lastname;
        $student->email  = $request->email;
        $student->phone  = $request->phone;

        $student->save();
        return response()->json($student);
    }
}
