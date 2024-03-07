<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {

        $students = Student::all();
    

        return response()->json([

            $students,

        ],200);
    }

    public function store(Request $request)
    {

        $student = Student::create(
            [
                'id' => $request->id,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'status' => $request->status
            ]
        );

    }

    public function show($id)
    {
        $student = Student::find($id);

        return response()->json([
            $student,
            ],200);

    }

    public function edit(int $id)
    {
        $student = Student::find($id);
        if ($student) 
        {

        return response()->json([
            $student,
            ],200);

        }
    else
        {
        return response()->json([
            'message' => "Student Does not Exist"
            ],404);
        }
    }

    public function update(Request $request, int $id)
    {

        $student = Student::find($id);
        $student->update(
            [
                'id' => $request->id,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'status' => $request->status
            ]
        );

    }

    public function delete ($id)
    {
        $student = Student::find( $id );
        
        $student->delete();
    }


}
