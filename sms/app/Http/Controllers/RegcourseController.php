<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regcourse;
use App\Course;
use App\User;
use Auth;
class RegcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $dat= Course::all();
       // $b= user::all();
       // $d= Cat::all();

     // $dat= User::where('role','student')->get();
   // $pro = new Course;
   //   $dat= $pro::orderBy('name','desc')->get();
   //    //$dat= $pro::orderBy('product_name','desc')->get();
  //return $dat;
   //   // return view('sprofile', array('user'=>Auth::user()));
   return view('course/coursereg')->with('dat',$dat);
   //->with('b',$b);
   // ->with('dat',$dat);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewcourse()
    {
        $dat= Regcourse::orderBy('id')->join('courses','regcourses.course_id','=','courses.id')->join('users','regcourses.user_id','=','users.id')
       ->select('regcourses.*','courses.cname','courses.description','users.name')
       ->where('user_id','=',Auth::user()->id)
       ->get();
        return view('course.viewcourse')->with('dat',$dat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pro=$request->input('user_id');
        $xx = array();
    $pro=$request->input('course_id');
    foreach ($pro  as $pros) {
        $reg= new Regcourse;
        $reg->course_id=$pros;
        $reg->user_id=Auth::user()->id;
        array_push($xx, $reg);
        //$pro->user_id=$course['user_id'];
       
   
      
        
    }
    foreach($xx as $yy){
        $yy->save();
    }

     //return $xx;
    return redirect('/coursereg/')->with('success','Course added successfully');

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
