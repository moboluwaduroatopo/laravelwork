<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Product;
use App\Shopproduct;
class ShopproductController extends Controller
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
         $pro = new Product;
       $dat= $pro::orderBy('product_name','desc')->paginate(6);
      //$dat= $pro::orderBy('product_name','desc')->get();
        //return view('product.index')->with('dat',$dat);
         return view('shop.addproduct')->with('dat',$dat);

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
           // $product= Product::find($id);
       
         $pro= new Shopproduct;
         $pro->pid=$request->input('pid');
        $pro->quantity=$request->input('quantity');
        $pro->save();
        $qty=$request->input('quantity');
         $sqty= DB::table('Products')->select('quantity')
                                     ->where('id',$request->input('pid'))->get();
         foreach ($sqty  as $qtys) {
            $qtyss= $qtys->quantity;        
           } 

                                    //$rem_qty =$qtyss-$qty;
       $update = DB::table('Products')->where('id',$request->input('pid'))
                                     ->update(['quantity' => $qtyss-$qty]);
        return redirect('/shop/')->with('success','Product Move successfully');
        //return $rem_qty;
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
        $pro =Shopproduct::findOrFail($id);
        return view('/shop/edit')->with('pro',$pro); 
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

 $ppro =$request->input('pid');
 $qty=$request->input('quantity');
   $psqty= DB::table('Products')->select('quantity')
                                     ->where('id',$ppro)->get();
                                    //$rem_qty =$qtyss-$qty;
                   foreach ($psqty  as $qtys) {
            $pqtyss= $qtys->quantity;        
           } 
 if ($qty > $pqtyss) {
                 return redirect('/shoplist/')->with('success','This much of quantity is not available');
             }

             else{
            $pro =Shopproduct::findOrFail($id);
        $pro->quantity=$request->input('qty')+$request->input('quantity');
        $pro->save();
        $qty=$request->input('quantity');
       
      DB::table('Products')->where('id',$ppro)
                                     ->update(['quantity' => $pqtyss-$qty]);

           // return $psqty ;                
          return redirect('/shoplist/')->with('success','Update successfully');
             }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pro =Shopproduct::findOrFail($id);
         $pro->delete();
         return redirect('/shoplist/')->with('success','Delete successfully');
    }
}
