<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HomeSection1;
use App\Models\HomeSection2;
use App\Models\HomeSection3;
use App\Models\HomeSection4;
use App\Models\HomeSection5;
use App\Models\HomeSection6;
use App\Models\HomeSection7;
use App\Models\HomeSection8;


class SettingController extends Controller
{
  public function home_index()
  {
    $data = HomeSection1:: find(1);
    return view('admin_layout.adminpanel.setting.home',compact('data'));
  }
  public function home_index_2()
  {
    $data = HomeSection2:: find(1);
    return view('admin_layout.adminpanel.setting.home2',compact('data'));
  }
  public function home_index_3()
  {
    $data = HomeSection3:: find(1);
    return view('admin_layout.adminpanel.setting.home3',compact('data'));
  }

  public function home_index_4()
  {
    $data = HomeSection4:: find(1);
    return view('admin_layout.adminpanel.setting.home4',compact('data'));
  }
  public function home_index_5()
  {
    $data = HomeSection5:: find(1);
    return view('admin_layout.adminpanel.setting.home5',compact('data'));
  }
  public function home_index_6()
  {
    $data = HomeSection6:: find(1);
    return view('admin_layout.adminpanel.setting.home6',compact('data'));
  }
  public function home_index_7()
  {
    $data = HomeSection7:: find(1);
    return view('admin_layout.adminpanel.setting.home7',compact('data'));
  }
  public function home_index_8()
  {
    $data = HomeSection8:: find(1);
    return view('admin_layout.adminpanel.setting.home8',compact('data'));
  }
  public function home_update(Request $request)
  {
    $home= HomeSection1::find(1);
    // $home= new HomeSection1;
    $home->title_1=$request->title_1;
    $home->section_1=$request->section_1;
    $home->title_2=$request->title_2;
    $home->section_2=$request->section_2;
    $home->title_3=$request->title_3;
    $home->video_link=$request->video_link;

  //   if ($request->hasfile('section_1_image'))
  //   {
  //       $destination ='uploads/home/'.$home->section_1_image;
  //      $file=$request->file('section_1_image');
  //      $extension=$file->getClientOriginalExtension();
  //      $filename=time(). '.'.$extension;
  //      $file->move('uploads/home/',$filename);
  //      $home->section_1_image = $filename;
  //  }
   
   $home->save();
    return redirect()->back();
  }


  public function home_update_2(Request $request)
  {
    $home= HomeSection2::find(1);
    $home->title =   $request->title;
    $home->sub_title = $request->sub_title;
    if ($request->hasfile('section_2_image'))
    {
        $destination ='uploads/home/'.$home->section_2_image;
       $file=$request->file('section_2_image');
       $extension=$file->getClientOriginalExtension();
       $filename=time(). '.'.$extension;
       $file->move('uploads/home/',$filename);
       $home->section_2_image = $filename;
   }
   
   $home->save();
    return redirect()->back();
  }
  public function home_update_3(Request $request)
  {
    $home= HomeSection3::find(1);
    // $home= new HomeSection3;
    $home->title =   $request->title;
    $home->section = $request->section;
    if ($request->hasfile('section_3_image'))
    {
        $destination ='uploads/home/'.$home->section_3_image;
       $file=$request->file('section_3_image');
       $extension=$file->getClientOriginalExtension();
       $filename=time(). '.'.$extension;
       $file->move('uploads/home/',$filename);
       $home->section_3_image = $filename;
   }
   
   $home->save();
    return redirect()->back();
  }

  public function home_update_4(Request $request)
  {
    $home= HomeSection4::find(1);
    // $home= new HomeSection4;
    $home->title =   $request->title;
    $home->section = $request->section;
    if ($request->hasfile('section_4_image'))
    {
       $destination ='uploads/home/'.$home->section_4_image;
       $file=$request->file('section_4_image');
       $extension=$file->getClientOriginalExtension();
       $filename=time(). '.'.$extension;
       $file->move('uploads/home/',$filename);
       $home->section_4_image = $filename;
   }
   
   $home->save();
    return redirect()->back();
  }
  
  public function home_update_5(Request $request)
  {
    $home= HomeSection5::find(1);
    // $home= new HomeSection5;
    $home->title =   $request->title;
    if ($request->hasfile('section_5_image'))
    {
       $destination ='uploads/home/'.$home->section_5_image;
       $file=$request->file('section_5_image');
       $extension=$file->getClientOriginalExtension();
       $filename=time(). '.'.$extension;
       $file->move('uploads/home/',$filename);
       $home->section_5_image = $filename;
   }
   
   $home->save();
    return redirect()->back();
  }

  public function home_update_6(Request $request)
  {
    $home= HomeSection6::find(1);
    // $home= new HomeSection6;
    $home->title =   $request->title;
    $home->section = $request->section;
    if ($request->hasfile('section_6_image'))
    {
       $destination ='uploads/home/'.$home->section_6_image;
       $file=$request->file('section_6_image');
       $extension=$file->getClientOriginalExtension();
       $filename=time(). '.'.$extension;
       $file->move('uploads/home/',$filename);
       $home->section_6_image = $filename;
   }
   
   $home->save();
    return redirect()->back();
  }
  public function home_update_7(Request $request)
  {
    $home= HomeSection7::find(1);
    // $home= new HomeSection7;
    $home->title =   $request->title;
    $home->section = $request->section;
    if ($request->hasfile('section_7_image'))
    {
       $destination ='uploads/home/'.$home->section_7_image;
       $file=$request->file('section_7_image');
       $extension=$file->getClientOriginalExtension();
       $filename=time(). '.'.$extension;
       $file->move('uploads/home/',$filename);
       $home->section_7_image = $filename;
   }
   
   $home->save();
    return redirect()->back();
  }
  public function home_update_8(Request $request)
  {
    $home= HomeSection8::find(1);
    $home->title =   $request->title;
    if ($request->hasfile('section_8_image'))
    {
       $destination ='uploads/home/'.$home->section_8_image;
       $file=$request->file('section_8_image');
       $extension=$file->getClientOriginalExtension();
       $filename=time(). '.'.$extension;
       $file->move('uploads/home/',$filename);
       $home->section_8_image = $filename;
   }
   
   $home->save();
    return redirect()->back();
  }
}
