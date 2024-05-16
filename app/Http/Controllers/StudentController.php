<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Students' => Student::get()
        ]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $student)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->lesson = $request->lesson;
        $student->grade = $request->grade;

       $student->save();

        return response()->json([
            'message' => 'success',
            'status' => '200',
            'data' => $student,
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return response()->json(['post' => $student]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->email = $request->email;
        $student->lesson = $request->lesson;
        $student->email = $request->email;

        $student->save();

        return response()->json([
            'message' => 'изменено',
            'status' => '200',
            'data' => $student,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json([
            'message' => 'удалено',
            'status' => '200',
        ]);
    }
}
