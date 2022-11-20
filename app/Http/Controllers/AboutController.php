<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AboutSection1;
use App\Models\AboutSection2;

class AboutController extends Controller
{
    public function about_index_1()
    {
         $data = AboutSection1::first();
        return view('admin_layout.adminpanel.setting.aboutus.aboutus1',compact('data'));
    }
    public function about_update_1 (Request $request)
    {
     $about =  AboutSection1::find(1);
     $about->title = $request->title;
     $about->sub_title = $request->sub_title;
     $about->save();
     return redirect()->back();
    }
    public function about_index_2()
    {
         $data = AboutSection2::first();
        return view('admin_layout.adminpanel.setting.aboutus.aboutus2',compact('data'));
    }

public function about_update_2(Request $request)
{
  $about=  AboutSection2::find(1);
  $about->title_1 = $request->title_1;
   $about->para_1 = $request->para_1;
   $about->title_2 = $request->title_2;
   $about->para_2 = $request->para_2;
   $about->title_3 = $request->title_3;
   $about->para_3 = $request->para_3;
  if ($request->hasfile('file_image'))
  {
     $destination ='uploads/home/'.$about->file_image;
     $file=$request->file('file_image');
     $extension=$file->getClientOriginalExtension();
     $filename=time(). '.'.$extension;
     $file->move('uploads/home/',$filename);
     $about->file_image = $filename;
 }
 
 $about->save();
  return redirect()->back();
}
}