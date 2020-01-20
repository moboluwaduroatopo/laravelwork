<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
use App\Sale;
use App\Shopproduct;
use App\Remainproduct;

class RemainproductController extends Controller
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
          $dat= Product::all();
          $dats=DB::table('Remainproducts')->join('products','Remainproducts.pid','=','products.id')
       ->select('Remainproducts.*','products.product_name')
       ->get();
     
        return view('remain.index')->with('dat',$dat)->with('dats',$dats);
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
        $pro= new Remainproduct;
         $pro->pid=$request->input('pid');
          $pro->price=$request->input('price');
        $pro->sell_qty=$request->input('sell_qty');
         $pro->remain_qty=$request->input('remain_qty');
                         // $pro->saledate=$nows;
        $pro->save();
        return redirect('/remain/')->with('success',' Added successfully');
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
         $pro =Remainproduct::findOrFail($id);
         $pro->delete();
         return redirect('/remain/')->with('success','Delete successfully');
    }
}
