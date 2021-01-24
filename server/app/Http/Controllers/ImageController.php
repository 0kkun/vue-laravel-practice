<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('image.index');
    }



    /**
     * 画像アップロードメソッド
     * 
     * getClientOriginalName()→アップロードするファイル名を取得するため
     * getFilename()→アップロードするファイルの一時的な名を取得するため
     * getRealPath()→アップロードされたファイルのパスを取得
     *  getClientSize()→アップロードされたファイルのサイズを取得
     * getClientMimeType()→アップロードされたファイルのmimeタイプを取得
     * getClientOriginalExtension()→アップロードされたファイルの拡張子を取得
     *
     * @param Request $request
     * @return void
     */
    public function upload(Request $request)
    {
        $file = $request->image;
        $fileName = time() . $file->getClientOriginalName();
        $target_path = public_path('uploads/');
        $file->move($target_path, $fileName);

        return view('image.index');
    }
}
