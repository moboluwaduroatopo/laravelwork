<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
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
    public function index()
    {
      //    $pro = new Product;
      //  $dat= $pro::orderBy('product_name','desc')->paginate(6);
      // //$dat= $pro::orderBy('product_name','desc')->get();
      //   return view('product.index')->with('dat',$dat);
         return view('product.addproduct');

    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $pro = new Product;
       $dat= $pro::orderBy('product_name','desc')->paginate(6);
      //$dat= $pro::orderBy('product_name','desc')->get();
        return view('product.index')->with('dat',$dat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $pro= new Product;
        // if ($request->hasFile('file')) {
        //     $filename = $request->file->getClientOriginalName();
        //     return $request->file->storeAs('public/upload/',$filename);
//         // }
          $imageName = time().'.'.$request->file->getClientOriginalExtension();
      // return $request->file->move(public_path('upload'), $imageName);
       $path= $request->file->move(public_path('upload'), $imageName);
        $pro->product_name=$request->input('product_name');
         $pro->price =$request->input('price');
        $pro->pprice =$request->input('pprice');
         $pro->cprice =$request->input('cprice');
        $pro->quantity=$request->input('quantity');
        $pro->shortd=$request->input('shortd');
        $pro->file=$imageName;

        $pro->save();
        return redirect('/product/')->with('success','Product added successfully');
        //if ($pro->save()) return 'Product added';
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro =Product::find($id);
        return view('/product/edit')->with('pro',$pro); 
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
       $pro =Product::find($id);
        $pro->product_name=$request->input('product_name');
        $pro->price =$request->input('price');
        $pro->pprice =$request->input('pprice');
        $pro->cprice =$request->input('cprice');
        $pro->quantity=$request->input('quantity');
    //$pro->piece =$request->input('piece');
        $pro->shortd=$request->input('shortd');
        $pro->save();
        
          return redirect('/productlist/')->with('success','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pro =Product::find($id);
         $pro->delete();
         return redirect('/productlist/')->with('success','Delete successfully');
    }
}
