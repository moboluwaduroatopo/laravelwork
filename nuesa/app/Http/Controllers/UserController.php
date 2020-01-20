<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = new User;
       
       $dat= $pro::orderBy('name','desc')->paginate(3);
        // return $dat;
      //$dat= $pro::orderBy('product_name','desc')->get();
        return view('product.showuser')->with('dat',$dat);
       
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
    public function update(Request $request)
    {
        $user=Auth::user();
        if ($request->hasFile('file')){
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->resize(300, 300)->save(public_path('/upload/'.$filename));
            
            $user->user_image=$filename;
            // $user->save();
        }
            // $user=Auth::user();
            $user->name=$request->input('name');
            // $user->email=$request->input('email');
            $user->parent_name=$request->input('chapter_name');
            $user->parent_phone=$request->input('chapter_address');
            $user->phone=$request->input('phone');
            $user->address=$request->input('address');
            // $user->file=$filename;
            $user->save();
        return redirect('/home/')->with('success','Update successfully');
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


