<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Add_Product;
use App\Order;
use App\Order_product;
use Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

           // return view('product.cart');
         $pro = new Order;
       $dat= $pro::orderBy('id','desc')->paginate(8);
      //$dat= $pro::orderBy('product_name','desc')->get();
        return view('product.order')->with('dat',$dat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
         $pro = new Order_product;
       $dat= $pro::orderBy('id','desc')->join('add__products','order_products.product_id','=','add__products.id')
       ->select('order_products.*','add__products.product_name','add__products.price','add__products.file')
       ->paginate(8);
      //$dat= $pro::orderBy('product_name','desc')->get();
        return view('product.orderproduct')->with('dat',$dat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // $cartProducts= new Order;
           //return $request->all();
        $cartProducts = Cart::Content();
         //dd( $cartProducts);
          $order = new Order;
    $order->total = $request->input('total');
    $order->status = $request->input('status');
    $order->user_id = auth()->user()->id;
    $order->save();
         $orderProducts = [];
    foreach ($cartProducts as $product_id => $item) {
        $orderProducts[] = [
            'order_id' => $order->id,
           // 'item_id' => $product_id,
            'product_id'=>$item->id,
            'qty' => $item->qty
        ];
    }
    //return $orderProducts;
   $dat= Order_product::insert($orderProducts);
   if ($dat) {
       Cart::destroy();
   }
     return view('product.success');
     //return 'Order was successfully';
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
       //return 'done';
        $pro = Order::findOrFail($id);
        return view('/product/editorder')->with('pro',$pro); 
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
        $pro =Order::findOrFail($id);
          $pro->status=$request->input('status');
       
        $pro->save();
          return redirect('/cart/')->with('success','Update successfully');
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
