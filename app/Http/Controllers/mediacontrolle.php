<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\media;
use Illuminate\Support\Facades\Storage;//u need this to download from the public storage 

class mediacontrolle extends Controller
{
    public function my_media_upload(Request $request){
        $data=new media;
        $data->title=$request->title;
        $data->des=$request->description;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('media',$filename);
        $data->file=$filename;
        $data->save();
        return redirect()->back();
    }

    public function display_data(){
        $data=media::all();
        return view('media_display',compact('data'));
    }

    public function download($file){
    
        return response()->download(public_path("media/".$file));
    }

    public function view_file($file){
        
        return view('media_view',compact('file'));
    }
}
