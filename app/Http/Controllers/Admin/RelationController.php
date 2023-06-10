<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index(){
            
        $data = User::get();
        $phones = Phone::get();
        return view('admin.relation.index',compact('data','phones'));

    }


}
