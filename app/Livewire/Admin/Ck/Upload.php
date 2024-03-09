<?php

namespace App\Livewire\Admin\Ck;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Livewire\Component;

class Upload extends Component
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('uploads'), $fileName);
           /* Image::make($request->file('upload'))->save(public_path('uploads/'.$fileName));*/

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }


    }
    public function render()
    {
        return view('livewire.admin.ck.upload');
    }
}
