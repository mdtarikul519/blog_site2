<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
   public function create(){
       return view('admin.banner.create');
           
   }

   public function store(Request $request){
        // dd(request()->all());
    $data = new Banner();
    $data->p_header = request()->p_header;
    $data->header  = request()->header;
    $data->description = request()->description;
    $data->image = Storage::put('/banner_upload',request()->file('image'));
    $data->save();
    return redirect()->route('dashboard.banner.view');
       
   }

   public function view(){
      
      $all_data = Banner::get();
      return view('admin.banner.view',compact('all_data'));
   }

    public function edit($id){
            $editdata = Banner::find($id);
           return view('admin.banner.edit',compact('editdata'));
    }


    public function update(){
           $data = Banner::find(request()->id);

           $data->p_header = request()->p_header;
           $data->header = request()->header;
           $data->description = request()->description;
           $data->image=Storage::put('/banner_upload',request()->file('image'));
           $data->save();
           return redirect()->route('dashboard.banner.view');
    }

    public function destory($id){
       Banner::where('id',$id)->delete();
       return redirect()->back();
    }
}
