<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('image.index');
    }

    public function upload(Request $request)
    {
        $file = $request->image;
        $fileName = time() . $file->getClientOriginalName();
        $target_path = public_path('uploads/');
        $file->move($target_path, $fileName);

        return view('image.index');
    }
}
