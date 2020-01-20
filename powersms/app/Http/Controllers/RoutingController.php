<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Product;
use Auth;
use App\User;
use App\Buyer_user;
use Image;
use App\Shopdetails;
use App\Order;
use App\Orderdetails;
class RoutingController extends Controller
{
    public function index(){
    	$data = array(
    		'title'=> 'my pages index',
    		'name' => ['john','jane','Yusuf','Taju']
    	);
    	
    	return view('welcome')->with($data);
    }
    public function order(){
        $orderd=Orderdetails::orderBy('id','desc')->join('Products','Orderdetails.product_id','Products.id')->join('orders','Orderdetails.order_id','orders.id')
        ->select('Orderdetails.*','Products.product_name','Products.price','Products.productfile','Products.user_id','orders.created_at')
        ->where('user_id',Auth::user()->id)->get();
        $order=order::orderBy('id','desc')->join('buyer_users','orders.buyer_id','buyer_users.id')->select('orders.*','buyer_users.name','buyer_users.phone')
        ->get();
 // return $order;
    	return view('pages/order')->with('orderd',$orderd)->with('order',$order);
    }
    public function addproduct(){
        $cat=Categories::all();
    	return view('pages/addproduct')->with('cat',$cat);
    }
    public function productlist(){
        $product= Product::orderBy('id')->join('Categories','Products.cat_id','=','Categories.id')
        ->join('Users','products.user_id','=','Users.id')
       ->select('Products.*','Categories.cat_name','Categories.cat_type','Users.name','users.role','users.ufile')
        ->where('user_id','=',Auth::user()->id)
      // ->where('user_id','=',1)
       ->get();
    	return view('pages/productlist')->with('product',$product);
    }
    public function invoice(){
    	return view('pages/invoice');
    }
    public function updateprofile()
    {
        // if ($request->hasFile('file')){
        //     $file=$request->file('file');
        //     $filename= time().'.'.$file->getClientOriginalExtension();
        //     Image::make($file)->resize(300, 300)->save(public_path('/upload/uploads/'.$filename));
        //     $user=auth()->user();
        //     //Auth::user();
        //     $user->file=$filename;
        //     $user->save();
        // }else{
        //     $user=auth()->user();
        //     //Auth::user();
        //     $user->name=$request->input('name');
        //     $user->email=$request->input('email');
        //     $user->phone=$request->input('phone');
        //     $user->role=$request->input('role');
        //     $user->save();
        // }
        // $user=auth()->user();
     return 'done';
 //        if ($user->role=='admin'){
 // return view('adminprofile', array('user'=>Auth::user()));
 //        }elseif ($user->role=='student') {
 //            return view('sprofile', array('user'=>Auth::user()));
 //        }else{
 //             return view('tprofile', array('user'=>Auth::user()));
 //        }
       //return response()->json(['success' => 'You have successfully uploaded an image'], 200);
           }
}
