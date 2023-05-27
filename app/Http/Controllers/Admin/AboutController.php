<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function create(){
          return view('admin.about.create');
    }
    
    public function store(Request $request){

        $data = new About();
        $data->title = request()->title;
        $data->description = request()->description;
        $data->image = Storage::put('/about_upload', $request->file('image'));
        $data->save();
        return redirect()->route('dashboard.about.view');
    }

    public function view(){
        $all_data = About::get();
        return view('admin.about.view',compact('all_data'));
    }

    public function edit($id){
        $editdata = About::find($id);
        return view('admin.about.edit',compact('editdata'));
    }

    public function update(){
        $data = About::find(request()->id);

        $data->title = request()->title;
        $data->description = request()->description;
        $data->image=Storage::put('/banner_upload',request()->file('image'));
        $data->save();
        return redirect()->route('dashboard.about.view');
 }

 public function destory($id){
    About::where('id',$id)->delete();
    return redirect()->back();
 }


}