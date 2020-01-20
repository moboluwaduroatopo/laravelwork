<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Add_Product;

class RoutingController extends Controller
{
    public function index(){
    	$data = array(
    		'title'=> 'my pages index',
    		'name' => ['john','jane','Yusuf','Taju']
    	);
       //   $pro = new Add_Product;
        
       // $dat= $pro::orderBy('product_name','desc')->get();
       //  //return $dat;
       // return view('pages.index')->with('dat',$dat);
    // $add_product=DB::table('add_product')->select('product_name')->get();
    // return view('pages.index', compact('add_product'));
    	//return view('pages.index')->with($data);
    }
    //  public function show($id)
    // {
    //     $pro = Add_Product::where('id', $id)->firstOrFail();
    //     $interested = Add_Product::where('id', '!=', $id)->get()->random(4);
    //     return view('pages/show')->with(['pro' => $pro, 'interested' => $interested]);
    // }
   
    
    // public function single(){
    //     return view('pages/single');
    // }
    public function about(){
    	return view('pages/about');
    }
    public function contact(){
    	return view('pages/contact');
    }
    public function mission(){
    	return view('pages/mission');
    }
    public function login(){
    	return view('pages/login');
    }
    public function adminlogin(){
        return view('admin/adminlogin');
    }
    public function adminregister(){
        return view('admin/adminregister');
    }
public function dashboard(){
        return view('admin/dashboard');
    }
    public function addproduct (){
        return view('product/addproduct ');
    }
   // public function singleproduct (){
   //      return view('product/singleproduct ');
   //  } 

    }
