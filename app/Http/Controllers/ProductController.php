<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
        // Get all the categories
        $categories = Category::all();  // SELECT * from categories
        return view('product.create', compact('categories'));
    }

    public function store(Request $req){
        $name = $req->name;
        $price = $req->price;
        $sort_order = $req->sort_order;
        if($req->status){
            $status = 1;
        }
        else{
            $status = 0;
        }
        $description = $req->description;
        $category = $req->category;

        $obj = new Product();
        $obj->name = $name;
        $obj->price = $price;
        $obj->sort_order = $sort_order;
        $obj->status = $status;
        $obj->description = $description;
        $obj->category_id = $category;
        $obj->save();

        return redirect()->back()->with('success', 'Product successfully created!!!');
    }
}
