<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
    public function update(array $data, $id)
    {
       // $pro =User::find($id);
       //  'name' => $data['name'],
       //      'email' => $data['email'],
       //      'country' => $data['country'],
       //      'phone' => $data['phone'],
       //      'town'=>$data['town'],
       //      'address'=>$data['address'],
       //       'role'=>$data['role'],
       //      'password' => Hash::make($data['password']),
       //  $pro->save();
       //    return redirect('/product/')->with('success','Update successfully');
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


