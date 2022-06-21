<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ipv6form()
    {
        return view('index');
    }
    public function validateForm(Request $request)
    {
        $request->validate([
            'ip_address' => 'required|ipv6',
        ]);
        dd('Form submitted successfully!');
    }

    public function uploadToServer(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

       $name = time().'.'.request()->file->getClientOriginalExtension();

       $request->file->move(public_path('uploads'), $name);

       $file = new FileUpload();
       $file->name = $name;
       $file->save();

        return response()->json(['success'=>'Successfully uploaded.']);
    }

    
}
