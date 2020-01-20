<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  public function tdashboard()
    // {
    //  return view('/admin/tdashboard');
    // }
     public function dashboard()
    {
     return view('/admin/dashboard');
    }
    public function create()
    {
     return view('/registration/create');
    }
    public function teacherreg()
    {
         return view('/registration/teacherreg');
    }
  public function adminprofile()
    {
     
       return view('adminprofile', array('user'=>Auth::user()));
       
    }
    // public function tprofile()
    // {
     
    //    return view('tprofile', array('user'=>Auth::user()));
       
    // }
    // public function sprofile()
    // {
     
    //    return view('sprofile', array('user'=>Auth::user()));
       
    // }
    public function userlist()
    {
        $pro = new User;
       $dat= $pro::orderBy('name','desc')->get();
      //$dat= $pro::orderBy('product_name','desc')->get();
      // return $dat;
    return view('userlist')->with('dat',$dat);
       
       //return view('sprofile', array('user'=>Auth::user()));
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
 public function updateprofile(Request $request)
    {
        if ($request->hasFile('file')){
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->resize(300, 300)->save(public_path('/upload/uploads/'.$filename));
            $user=Auth::user();
            $user->file=$filename;
            $user->save();
        }else{
            $user=Auth::user();
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->parent_name=$request->input('parent_name');
            $user->parent_phone=$request->input('parent_phone');
            $user->phone=$request->input('phone');
            $user->address=$request->input('address');
            // $user->file=$filename;
            $user->save();
        }
       // return $user;
        if ($user->role=='admin'){
 return view('adminprofile', array('user'=>Auth::user()));
        }elseif ($user->role=='student') {
            return view('sprofile', array('user'=>Auth::user()));
        }else{
             return view('tprofile', array('user'=>Auth::user()));
        }
      
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // $pro =User::find($id);
        // return view('/product/edituser')->with('pro',$pro); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(array $data, $id)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
    //      $pro =User::find($id);
    //      $pro->delete();
    //      return 'done';
    }
}


