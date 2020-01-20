<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reg = new Registration;
       $data= $reg::orderBy('username','desc')->paginate(3);
        // return $reg::orderBy('username','desc')->get();
        return view('registration.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg= new Registration;
        $this->validate($request,[
        'username'=>'required|min:4',
        'email'=>'required',
        'pwd'=>'required'
        ]);
        $reg->username=$request->input('username');
        $reg->email =$request->input('email');
        $reg->pwd=$request->input('pwd');
        $reg->save();
        return redirect('/registration/')->with('success','Saved successfully');
        //return view('registration.create')->with('succ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reg =Registration::find($id);
        return view('/registration/show')->with('reg',$reg);
           //return view('registration.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $reg =Registration::find($id);
        return view('/registration/edit')->with('reg',$reg);   
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
         $reg= Registration::find($id);
        $this->validate($request,[
        'username'=>'required|min:4',
        'email'=>'required',
        'pwd'=>'required'
        ]);
        $reg->username=$request->input('username');
        $reg->email =$request->input('email');
        $reg->pwd=$request->input('pwd');
        $reg->save();
        return redirect('/registration/')->with('success','Update successfully');
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
        //
    }
}
