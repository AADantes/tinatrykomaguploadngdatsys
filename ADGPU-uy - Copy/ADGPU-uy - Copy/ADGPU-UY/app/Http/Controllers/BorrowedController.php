<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Book;
use App\Models\Borrowed;

class BorrowedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {


        $borroweds= Borrowed::with('student', 'book')->find($id);


        $combinedData = [
            
            'id' => $borroweds->id,
            'student_firstname' => $borroweds->student->firstname,
            'student_lastname' => $borroweds->student->lastname,
            'book_name' => $borroweds->book->name,
            'book_description' => $borroweds->book->description,
        ];

 
        return response()->json($combinedData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
