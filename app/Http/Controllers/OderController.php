<?php

namespace App\Http\Controllers;

use App\Models\oder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // $oder=oder::all();
    //     return view('back.admin.orderview',['oder'=>$oder]);

    
    $id = Auth::id();

 
   
          $data = DB::table('users')
                            ->join('oders','oders.user_id','users.id')
                            ->join('oprations','oprations.id','oders.product_id')
                            ->select('users.fullname','users.fulladd','users.mob','oprations.name','oprations.size','oprations.price','oprations.photo','oders.id')

                            ->get();

    return view('back.admin.orderview',['oder'=>$data]);
   


    }

public function frontindex()
{

    $id = Auth::id();

   $info = DB::table('oders')
      ->join('oprations','oders.product_id','oprations.id')
      ->select('oprations.*','oders.id as oder_id')
      ->where('oders.user_id',$id)
      ->get();

    return view('front.about',['carts'=>$info->toArray()]);

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
    public function store($product_id, $user_id)
    {
        $oder = new oder;
        $oder->user_id=$user_id;
        $oder->product_id= $product_id;
        $result = $oder->save();
        return redirect()->back()->with("msg", "Order Is confirm");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function show(oder $oder)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function edit(oder $oder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, oder $oder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       $oder=oder::find($id);
       $oder->delete();
    return redirect()->back()->with("msg","Order Cancel Successfully");
    }

    public function delete($id)
    {
        
       $oder=oder::find($id);
       $oder->delete();
    return redirect()->back()->with("delete","Delete Successfully");
    }
}
