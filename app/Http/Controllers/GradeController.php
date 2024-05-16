<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Grades' => Grade::get()
        ]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Grade $grade)
    {
        $grade = new Grade;
        $grade->name = $request->name;

       $grade->save();

        return response()->json([
            'message' => 'success',
            'status' => '200',
            'data' => $grade,
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        return response()->json(['post' => $grade]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gtade $grade)
    {
        $grade->name = $request->name;

        $grade->save();

        return response()->json([
            'message' => 'изменено',
            'status' => '200',
            'data' => $grade,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return response()->json([
            'message' => 'удалено',
            'status' => '200',
        ]);
    }
}
