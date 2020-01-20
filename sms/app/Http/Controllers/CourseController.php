<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Auth;
class CourseController extends Controller
{
	 public function getcourse()
    {
    	 return view('course.addcourse', array('user'=>Auth::user()));
     //return view('course.addcourse');
    }

    public function courselist()
    {
       //  $pro = new Course;
       // $dat= $pro::orderBy('name','desc')->get();
      //$dat= $pro::orderBy('product_name','desc')->get();
      // return $dat;
       $dat= Course::all();
    return view('registration/courselist')->with('dat',$dat);
       
       //return view('sprofile', array('user'=>Auth::user()));
       
    }
    public function store(Request $request)
    {
    	$pro= new Course;
        $pro->cname=$request->input('cname');
        $pro->description=$request->input('description');
        $pro->save();
        return redirect('/addcourse/')->with('success','Course added successfully');
       
      // return $request;
     


   }
 // public function coursereg(Request $request)
 //    {
 //    	$pro= new Regcourse;
 //        $pro->course_id=$request->input('course_id');
 //        $pro->user_id=$request->input('user_id');
 //        $pro->save();
 //        return redirect('/addcourse/')->with('success','Course added successfully');
       
 //      // return $request;
     


 //   }

}
