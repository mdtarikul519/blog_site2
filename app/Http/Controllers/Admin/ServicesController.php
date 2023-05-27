<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
   public function create(){
      return view('admin.services.create');
   }

   public function store(Request $request){

    $data = new Services();
    $data->title = request()->title;
    $data->header = request()->header;
    $data->description = request()->description;
    $data->icon = Storage::put('services_upload', $request->file('icon'));
    $data->save();
    return redirect()->route('dashboard.services.view');
}


public function view(){
    $all_data = Services::get();
    return view('admin.services.view',compact('all_data'));
}

public function edit($id){
    $editdata = Services::find($id);
    return view('admin.services.edit',compact('editdata'));
}

public function update(){
    $data = Services::find(request()->id);

    $data->title = request()->title;
    $data->description = request()->description;
    $data->icon=Storage::put('services_upload',request()->file('icon'));
    $data->save();
    return redirect()->route('dashboard.services.view');
}

public function destory($id){
    Services::where('id',$id)->delete();
return redirect()->back();
}

}
