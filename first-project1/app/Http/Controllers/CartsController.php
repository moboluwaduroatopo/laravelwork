<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Add_Product;

use Cart;
class CartsController extends Controller
{
    public function addtocart(Request $request)
    {
        $id=$request->id;   
       //dd($request->all());
            $pro = new Add_Product;
        $productById = $pro::where('id',$id)->first();
        Cart::add([
        	'id'=>$id,
        	'name'=>$productById->product_name,
        	'price'=>$productById->price,
        	'qty'=>$request->qty
           // 'total'=>$request->total
        ]);
        return redirect('/cart-show');
    }
public function cartshow(){
        $dat = Add_Product::all();
	$cartProducts = Cart::Content();
	//return $dat;
	// dd( $cartProducts);

	 return view('product.cart')->with('cartProducts',$cartProducts)->with('dat',$dat);
}
 public function updatecart(Request $request)
    {
       
      // dd($request->all());
            
        Cart::update($request->rowId, $request->qty);
        return redirect('/cart-show')->with('success','Cart update successfully');
    }
    public function checkout(){
	$cartProducts = Cart::Content();
	//return $cartProducts;
	// dd( $cartProducts);

	 return view('product.checkout')->with('cartProducts',$cartProducts);
}

//   public function storecheckout(){
// 	$cartProducts = Cart::Content();
// 	//return $cartProducts;
// 	// dd( $cartProducts);

// 	 return view('product.checkout')->with('cartProducts',$cartProducts);
// }
 public function deletecart($rowId){
	 Cart::remove($rowId);
	//return $cartProducts;
	// dd( $cartProducts);
       return redirect('/cart-show')->with('success','Cart removed successfully');
	 //return view('/cart-show')->with('success','Cart removed successfully');
}


}
