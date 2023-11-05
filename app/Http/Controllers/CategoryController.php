<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('category.create');
    }

    public function store(Request $req){
        $name = $req->name;
        $sort_order = $req->sort_order;
        if($req->status){
            $status = 1;
        }
        else{
            $status = 0;
        }

        $obj = new Category();
        $obj->name = $name;
        $obj->sort_order = $sort_order;
        $obj->status = $status;
        $obj->save();

        return redirect()->back()->with('success', 'Category successfully created!!!');
    }
}