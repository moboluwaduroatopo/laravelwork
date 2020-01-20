<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
use App\Sale;
use App\Shopproduct;
class SalesController extends Controller
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
          $pro = new Shopproduct;
       $dat= $pro::orderBy('id','desc')->join('products','shopproducts.pid','=','products.id')
       ->select('shopproducts.*','products.product_name','products.cprice','products.pprice')
       ->get();
     $dats=DB::table('Sales')->join('products','sales.pid','=','products.id')
       ->select('sales.*','products.product_name','products.cprice','products.pprice')
       ->get();
     
        return view('sale.index')->with('dat',$dat)->with('dats',$dats);
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
       
        $qty=$request->input('quantity');
        $shopid=$request->input('sid');
         $sqty= DB::table('Shopproducts')->select('quantity')
                                     ->where('id',$request->input('sid'))->get();
         foreach ($sqty  as $qtys) {
            $qtyss= $qtys->quantity;        
           } 
           //2>1
             if ($qty > $qtyss) {
                 return redirect('/sales/')->with('success','This much of quantity is not available');
             }else{
                 $nows=date('y-m-d');
                 $pro= new Sale;

         $pro->pid=$request->input('pid');
        $pro->quantity=$request->input('quantity');
         $pro->price=$request->input('price');
        $pro->total=$request->input('total');
           $pro->saledate=$nows;
        $pro->save();
                 $update = DB::table('Shopproducts')->where('id',$request->input('sid'))
                                     ->update(['quantity' => $qtyss-$qty]);
        return redirect('/sales/')->with('success','Sales added successfully');
             }
                                  
      
        //return $sqty;

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
