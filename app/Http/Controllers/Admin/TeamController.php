<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function create(){
        return view('admin.team.cerate');
    }

    public function store(){
        // dd(request()->all());
        $data = new Team();
        
        $data->title = request()->title;
        $data->name = request()->name;
        $data->description = request()->description;
        $data->image = Storage::put('/team_upload',request()->file('image'));
        $data->facbook = request()->facbook;
        $data->linkdin = request()->linkdin;
        $data->pentarest = request()->pentarest;
        $data->twitter = request()->twitter;
        $data->save();
        return redirect()->route('dashboard.team.view');
    }

    public function view(){
        $all_data = Team::get();
        return view('admin.team.view',compact('all_data'));
    }

    public function edit($id){
           $editdata = Team::find($id);
           return view('admin.team.edit', compact('editdata'));
    }

    public function update(){
        $data = Team::find(request()->id);
        $data->title = request()->title;
        $data->name = request()->name;
        $data->description = request()->description;
        $data->image = Storage::put('/team_upload',request()->file('image'));
        $data->facbook = request()->facbook;
        $data->linkdin = request()->linkdin;
        $data->pentarest = request()->pentarest;
        $data->twitter = request()->twitter;
        $data->save();
        return redirect()->route('dashboard.team.view');
    }

    public function destory($id){
         Team::where('id', $id)->delete();
         return redirect()->back();
    }
}
