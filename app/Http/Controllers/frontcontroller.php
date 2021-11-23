<?php

namespace App\Http\Controllers;
use App\Models\opration;
use App\Models\oder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    public function home()
    {
         $opration = opration::all();
        
     return view('front.home',['oprations'=>$opration]);
    }
    
    public function order()
    {
        
    $id = Auth::id();

       $info = DB::table('oders')
         ->join('oprations','oders.product_id','oprations.id')
         ->select('oprations.*','oders.id as order_id')
         ->where('oders.user_id',$id)
         ->get();
   
       return view('front.about',['carts'=>$info->toArray()]);
   
        return view('front.about');
    }
    
    public function blog()
    {
        return view('front.blog');

    }
    
    public function cart()
    {
        return view('front.cart');

    }
    
    public function contact()
    {
        return view('front.contact');

    }



    public function buy($id)
    {
        return view('front.about',['product_id'=>$id]);
    
    }
}
