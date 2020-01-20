<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Grade;
use App\User;
use Auth;
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $course= Course::all();
    $grade= Grade::all();
    //$class=Class::all();
    $student= User::where('role','student')->get();
    $teacher= User::where('role','teacher')->get();
   return view('class/classform')->with('student',$student)->with('teacher',$teacher)->with('grade',$grade);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $pro= new Classroom;
        $pro->teacher_id= Auth::user()->id;
        $pro->student_id=$request->input('student_id');
        $pro->remarks=$request->input('remarks');
        $pro->term=$request->input('term');
        $pro->grade_id=$request->input('grade_id');
        $pro->section=$request->input('section');
        $pro->save();
        return redirect('/class/')->with('success','Result added successfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
