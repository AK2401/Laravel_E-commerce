<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    public function update(Request $request)
    {
        $data=User::find($request->id);

            $data->fullname= $request->fullname;
            $data->email= $request ->email;
            $data->mob= $request ->mob;
            $data->mob= $request ->mobile;
            $data->mob= $request ->fulladd;
            $data->mob= $request ->city;
            $data->mob= $request ->pin;



            if($request->file("profile_photo_path"))
            {
                $file = $request->file('profile_photo_path');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/photo',$filename);
                $data->profile_photo_path = $filename;
            }
            $data->save();
            return redirect()->back()->with("msg", "Profile Update successfully");
    }

}
