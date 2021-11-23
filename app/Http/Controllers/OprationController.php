<?php

namespace App\Http\Controllers;

use App\Models\opration;
use Illuminate\Http\Request;

class OprationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.admin.userprofile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opration = new opration;
        $opration->name= $request ->input('name');
        $opration->price= $request ->input('price');
        $opration->size= $request ->input('size');

        if($request->file("photo"))
        {
            $file = $request->file('photo');
            $extension = $file->getclientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/photo',$filename);
            $opration->photo = $filename;
        }
        $result = $opration->save();
        return redirect()->back()->with("msg", "Photo Add successfully");
    //  return view('back.admin.add');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\opration  $opration
     * @return \Illuminate\Http\Response
     */
    public function show(opration $opration)
    {
        $data=opration::all();
        return view('back.admin.view',['opration'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\opration  $opration
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=opration::find($id);
        return view('back.admin.update',['opration'=>$data]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\opration  $opration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data=opration::find($request->id);

            $data->name= $request->name;
            $data->price= $request ->price;
            $data->size= $request ->size;

            if($request->file("photo"))
            {
                $file = $request->file('photo');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/photo',$filename);
                $data->photo = $filename;
            }
            $data->save();
            return redirect()->back()->with("msg", "Photo Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\opration  $opration
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $data=opration::find($id);
    $data->delete();
    return redirect()->back()->with("delete", "Photo Deleted successfully");
    }
}
