<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testmonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestmonialController extends Controller
{
    public function create(){
        return view('admin.testmonial.create');
    }

    public function store(){
        // dd(request()->all());
        $data = new Testmonial();
        
        $data->title = request()->title;
        $data->name = request()->name;
        $data->header = request()->header;
        $data->description = request()->description;
        if(request()->hasFile('image')){

            $data->image = Storage::put('/testmonial_upload',request()->file('image'));
        }
        $data->save();
        return redirect()->route('dashboard.testmonial.view');
    }

    public function view(){
        $all_data = Testmonial::get();
        return view('admin.testmonial.view',compact('all_data'));
    }

    public function edit($id){
           $editdata = Testmonial::find($id);
           return view('admin.testmonial.edit', compact('editdata'));
    }

    public function update(){
        $data = Testmonial::find(request()->id);
        $data->title = request()->title;
        $data->name = request()->name;
        $data->header = request()->header;
        $data->description = request()->description;
        if(request()->hasFile('image')){

            $data->image = Storage::put('/testmonial_upload',request()->file('image'));
        }
        $data->save();
        return redirect()->route('dashboard.testmonial.view');
    }

    public function destory($id){
        Testmonial::where('id', $id)->delete();
         return redirect()->back();
    }
}
