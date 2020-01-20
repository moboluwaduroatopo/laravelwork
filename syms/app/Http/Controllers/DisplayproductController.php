<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
use App\Sale;
use App\Shopproduct;
class DisplayproductController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

      public function index()
    {
         $pro = new Product;
       $dat= $pro::orderBy('product_name','desc')->paginate(6);
      //$dat= $pro::orderBy('product_name','desc')->get();
        return view('product.index')->with('dat',$dat);
        // return view('product.addproduct');

// $nows=date('y-m-d');
//   // $class=Product::all();
// $dat= Product::wheredate('created_at',$nows)->get();
// return $dat;
//return view('product.index')->with('dat',$dat);
    }
     public function shoplist()
    {
       
       $dat=Shopproduct::orderBy('id')->join('products','shopproducts.pid','=','products.id')
       ->select('shopproducts.*','products.product_name')
       //->where('created_at','=','2019-05-19 09:52:59')
       ->get();
        return view('shop.shoplist')->with('dat',$dat);
        //return $dat;
    }
     public function todaysales()
    {
      $nows=date('y-m-d');
      $dats=Sale::orderBy('id')->join('products','sales.pid','=','products.id')
      ->select('sales.*','products.product_name','products.cprice','products.pprice')
     ->where('saledate','=',$nows)
       ->get();
      
//created_at":"2019-05-22 13:01:21total":"1000"," ","updated_at":"2019-05-22 13:01:21"," select * from shopproducts join products using(id) where products.created_at = '2019-05-19 09:52:59' allsales
        return view('sale.todaysales')->with('dats',$dats);
       }
 
   public function allsales()
    {
      $nows=date('y-m-d');
      $dats=Sale::orderBy('id')->join('products','sales.pid','=','products.id')
      ->select('sales.*','products.product_name','products.cprice','products.pprice')
    // ->where('saledate','=',$nows)
       ->get();
      
//created_at":"2019-05-22 13:01:21total":"1000"," ","updated_at":"2019-05-22 13:01:21"," select * from shopproducts join products using(id) where products.created_at = '2019-05-19 09:52:59' allsales
        return view('sale.allsales')->with('dats',$dats);
       }
}
