<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use Image;

class ImageUploadController extends Controller
{
    public function upload(){
        $images = ImageModel::all();
        return view('upload', compact('images'));
    }

    public function store(Request $request){
            $originalImage= $request->file('filename');

            $thumbnailImage = Image::make($originalImage);

            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/images/';

            $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

            $imagemodel= new ImageModel();
            $imagemodel->filename=time().$originalImage->getClientOriginalName();
            $imagemodel->save();

            return back()->with('success', 'Your images has been successfully Upload');
    }
}