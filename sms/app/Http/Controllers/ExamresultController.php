<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examresult;
use App\Course;
use App\User;
use Auth;
use App\Classroom;
use App\Grade;

class ExamresultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
    $course= Course::all();
    $grade= Grade::all();
   $class=Classroom::all();
 $user= User::where('role','student')->get();
   return view('course/examresult')->with('user',$user)->with('course',$course)->with('grade',$grade)->with('class',$class);
  //return $class;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     // */
    //'section');
     //        $table->string('remarks');
     //        $table->string('term');
     public function adminresult()
    {
          $pro = new Examresult;
       $dat= $pro::orderBy('id','desc')->join('courses','examresults.course_id','=','courses.id')->join('users','examresults.user_id','=','users.id')->join('grades','examresults.grade_id','=','grades.id')->join('classrooms','examresults.class_id','=','classrooms.id')
       ->select('examresults.*','courses.cname','courses.description','users.name','grades.grade','classrooms.term','classrooms.section','classrooms.remarks','classrooms.grade_id','classrooms.teacher_id')
       ->paginate(8);
      //$dat= $pro::orderBy('product_name','desc')->get();
       return view('course.showresult')->with('dat',$dat);
       //return $dat;
    }
    public function create()
    {
          $pro = new Examresult;
       $dat= $pro::orderBy('id','desc')->join('courses','examresults.course_id','=','courses.id')->join('users','examresults.user_id','=','users.id')->join('grades','examresults.grade_id','=','grades.id')->join('classrooms','examresults.class_id','=','classrooms.id')
       ->select('examresults.*','courses.cname','courses.description','users.name','grades.grade','classrooms.term','classrooms.section','classrooms.remarks','classrooms.grade_id','classrooms.teacher_id')
        ->where('user_id','=',Auth::user()->id)
       ->get();
      // ->paginate(8);
      //$dat= $pro::orderBy('product_name','desc')->get();
        return view('course.showexamresult')->with('dat',$dat);
    }
 public function studentresult()
    {
       
      $pro = new Examresult;
       $dat= $pro::orderBy('id','desc')->join('courses','examresults.course_id','=','courses.id')->join('users','examresults.user_id','=','users.id')->join('grades','examresults.grade_id','=','grades.id')->join('classrooms','examresults.class_id','=','classrooms.id')
       ->select('examresults.*','courses.cname','courses.description','users.name','grades.grade','classrooms.term','classrooms.section','classrooms.remarks','classrooms.grade_id','classrooms.teacher_id')
        ->where('user_id','=',Auth::user()->id)
        ->where('term','=','1st')
        ->where('section','=','2011/2012')
       ->get();
       $class=Classroom::orderBy('id')->join('users','Classrooms.teacher_id','=','users.id')->join('grades','classrooms.grade_id','=','grades.id')->select('Classrooms.*','users.name','grades.grade')
     ->where('student_id','=',Auth::user()->id)
      ->where('term','=','1st')
        ->where('section','=','2011/2012')
       ->get();
        $pro = new Examresult;
       $dat1= $pro::orderBy('id','desc')->join('courses','examresults.course_id','=','courses.id')->join('users','examresults.user_id','=','users.id')->join('grades','examresults.grade_id','=','grades.id')->join('classrooms','examresults.class_id','=','classrooms.id')
       ->select('examresults.*','courses.cname','courses.description','users.name','grades.grade','classrooms.term','classrooms.section','classrooms.remarks','classrooms.grade_id','classrooms.teacher_id')
        ->where('user_id','=',Auth::user()->id)
        ->where('term','=','2nd')
        ->where('section','=','2011/2012')
       ->get();
        $class1=Classroom::orderBy('id')->join('users','Classrooms.teacher_id','=','users.id')->join('grades','classrooms.grade_id','=','grades.id')->select('Classrooms.*','users.name','grades.grade')
     ->where('student_id','=',Auth::user()->id)
      ->where('term','=','2nd')
        ->where('section','=','2011/2012')
       ->get();
     //return $class;
       return view('course.studentresult')->with('dat',$dat)->with('class',$class)->with('dat1',$dat1)->with('class1',$class1);
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro= new Examresult;
        $pro->course_id=$request->input('course_id');
        $pro->user_id=$request->input('user_id');
        $pro->mark=$request->input('mark');
        $pro->class_id=$request->input('class_id');
        $pro->grade_id=$request->input('grade_id');
        $pro->save();
        return redirect('/exam_result/')->with('success','Result added successfully');
       
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
//return ('done');
        $dat =Examresult::find($id);
        return view('/course/editresult')->with('dat',$dat);   
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
         $reg= Examresult::find($id);
        
        $reg->user_id=$request->input('user_id');
        $reg->mark =$request->input('mark');
        // $reg->pwd=$request->input('pwd');
        $reg->save();
        return redirect('/showexamresult/')->with('success','Update successfully');
        //retu
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pro =Examresult::find($id);
         $pro->delete();
         return redirect('/showexamresult/')->with('success','Delete successfully');
    }
}
