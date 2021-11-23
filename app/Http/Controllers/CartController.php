<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
   
        
      $info = DB::table('carts')
        ->join('oprations','carts.product_id','oprations.id')
        ->select('oprations.*','carts.id as card_id')
        ->where('carts.user_id',$id)
        ->get();

      return view('front.cart',['carts'=>$info->toArray()]);

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($product_id, $user_id)
    {
        $cart = new cart;
        $cart->user_id=$user_id;
        $cart->product_id= $product_id;
        $result = $cart->save();
        return redirect()->back()->with("msg", "Product Add to cart successfully");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */


     //card add product count

  static function show()
    {
         return cart::where('user_id',Auth::id())->count();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart=cart::find($id);
        $cart->delete();
    return redirect()->back()->with("msg"," Remove To Your Cart");
    }
}
