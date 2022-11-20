<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManagementSection1;
use App\Models\ManagementSection2;
use App\Models\ManagementSection3;
use App\Models\ManagementSection1List;


class ManagementController extends Controller
{
    public function management_index_1()
    {
         $data = ManagementSection1::first();
        return view('admin_layout.adminpanel.setting.management.management1',compact('data'));
    }
    public function management_update_1 (Request $request)
    {
     $management =  ManagementSection1::find(1);
     $management->title = $request->title;
     $management->sub_title = $request->sub_title;
     $management->save();
     return redirect()->back();
    }
    public function management_index_2()
    {
         $data = ManagementSection2::first();
        return view('admin_layout.adminpanel.setting.management.management2',compact('data'));
    }

public function management_update_2(Request $request)
{
    // $management=  new ManagementSection2;

  $management=  ManagementSection2::find(1);
  $management->title = $request->title;
   $management->para = $request->para;
  if ($request->hasfile('file_image_2'))
  {
     $destination ='uploads/home/'.$management->file_image_2;
     $file=$request->file('file_image_2');
     $extension=$file->getClientOriginalExtension();
     $filename=time(). '.'.$extension;
     $file->move('uploads/home/',$filename);
     $management->file_image_2 = $filename;
 }
 
 $management->save();
  return redirect()->back();
}

public function management_index_3()
{
     $data = ManagementSection3::first();
    return view('admin_layout.adminpanel.setting.management.management3',compact('data'));
}

public function management_update_3(Request $request)
{
// $management=  new ManagementSection3;

$management=  ManagementSection3::find(1);
$management->title_1 = $request->title_1;
$management->para_1 = $request->para_1;
$management->title_2 = $request->title_2;
$management->para_2 = $request->para_2;
if ($request->hasfile('file_image_2'))
{
 $destination ='uploads/home/'.$management->file_image_2;
 $file=$request->file('file_image_2');
 $extension=$file->getClientOriginalExtension();
 $filename=time(). '.'.$extension;
 $file->move('uploads/home/',$filename);
 $management->file_image_2 = $filename;
}

$management->save();
return redirect()->back();
}









    
public function index_management_list_1()
{
    $data = ManagementSection1List::all();
 return view('admin_layout.adminpanel.setting.management.managementlist',compact('data'));
}

public function add_management_list_1()
{
 return view('admin_layout.adminpanel.setting.management.addmanagementlist');
}

public function add_management(Request $request)
{
 $managementlist_1 = new ManagementSection1List;
 $managementlist_1->list_title = $request->list_title;
 $managementlist_1->save();
 return  redirect()->back();
}

public function edit_management_list_1($id)
{
    $data = ManagementSection1List::find($id);

    return view('admin_layout.adminpanel.setting.management.editmanagementlist',compact('data'));
}

public function update_management_list_1(Request $request)
{
    $managementlist_1 =ManagementSection1List::find($request->id);
    $managementlist_1->list_title = $request->list_title;
    $managementlist_1->save();
    return  redirect()->back();
}
public function management_destory_list_1($id)
{
    $managementlist_1 = ManagementSection1List::find($id);
    $managementlist_1->delete();
    return  redirect()->back();
}

}
