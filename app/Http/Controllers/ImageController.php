<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request){
        if ($request->hasFile('image')){
            $path = $request->image->store('public');
            Image::create(['path' => $path]);
        }
    }
}
