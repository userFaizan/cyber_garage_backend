<?php

namespace App\Http\Controllers;
use App\Models\AppsSection1;
use Illuminate\Http\Request;
use App\Models\AppsSection2;
use App\Models\AppsSection3;
use App\Models\AppsSection4;
use App\Models\AppsSection1List;
use App\Models\AppsSection2List;
use App\Models\AppsSection3List;
use App\Models\AppsSection4List;

class AdminAppController extends Controller
{
    public function app_index_1()
    {
         $data = AppsSection1::first();
        return view('admin_layout.adminpanel.setting.app.app1',compact('data'));
    }
    public function app_update_1 (Request $request)
    {
     $app =  AppsSection1::find(1);
     $app->title = $request->title;
     $app->sub_title = $request->sub_title;
     $app->save();
     return redirect()->back();
    }
    public function app_index_2()
    {
         $data = AppsSection2::first();
        return view('admin_layout.adminpanel.setting.app.app2',compact('data'));
    }

public function app_update_2(Request $request)
{
    // $app=  new appSection2;

  $app=  AppsSection2::find(1);
  $app->title_1 = $request->title_1;
   $app->sub_title = $request->sub_title;
   $app->title_2 = $request->title_2;
  if ($request->hasfile('image_1'))
  {
     $destination ='uploads/home/'.$app->image_1;
     $file=$request->file('image_1');
     $extension=$file->getClientOriginalExtension();
     $filename=time(). '.'.$extension;
     $file->move('uploads/home/',$filename);
     $app->image_1 = $filename;
 }
 
 $app->save();
  return redirect()->back();
}

public function app_index_3()
{
     $data = AppsSection3::first();
    return view('admin_layout.adminpanel.setting.app.app3',compact('data'));
}

public function app_update_3(Request $request)
{
// $app=  new appSection3;

$app=  AppsSection3::find(1);
$app->title = $request->title;
$app->sub_title = $request->sub_title;
if ($request->hasfile('image_1'))
{
 $destination ='uploads/home/'.$app->image_1;
 $file=$request->file('image_1');
 $extension=$file->getClientOriginalExtension();
 $filename=time(). '.'.$extension;
 $file->move('uploads/home/',$filename);
 $app->image_1 = $filename;
}
$app->save();
return redirect()->back();
}


public function app_index_4()
{
     $data = AppsSection4::first();
    return view('admin_layout.adminpanel.setting.app.app4',compact('data'));
}

public function app_update_4(Request $request)
{
// $app=  new appSection3;

$app=  AppsSection4::find(1);
$app->title = $request->title;
$app->sub_title = $request->sub_title;
if ($request->hasfile('image_1'))
{
 $destination ='uploads/home/'.$app->image_1;
 $file=$request->file('image_1');
 $extension=$file->getClientOriginalExtension();
 $filename=time(). '.'.$extension;
 $file->move('uploads/home/',$filename);
 $app->image_1 = $filename;
}
$app->save();
return redirect()->back();
}



   
public function index_app_list_1()
{
    $data = AppsSection1List::all();
 return view('admin_layout.adminpanel.setting.app.applist',compact('data'));
}

public function add_app_list_1()
{
 return view('admin_layout.adminpanel.setting.app.addapplist');
}

public function add_app(Request $request)
{
 $applist_1 = new AppsSection1List;
 $applist_1->list_title = $request->list_title;
 $applist_1->save();
 return  redirect()->back();
}

public function edit_app_list_1($id)
{
    $data = AppsSection1List::find($id);

    return view('admin_layout.adminpanel.setting.app.editapplist',compact('data'));
}

public function update_app_list_1(Request $request)
{
    $applist_1 =AppsSection1List::find($request->id);
    $applist_1->list_title = $request->list_title;
    $applist_1->save();
    return  redirect()->back();
}
public function app_destory_list_1($id)
{
    $applist_1 = AppsSection1List::find($id);
    $applist_1->delete();
    return  redirect()->back();
}



   
public function index_app_list_2()
{
    $data = AppsSection2List::all();
 return view('admin_layout.adminpanel.setting.app.applist2',compact('data'));
}

public function add_app_list_2()
{
 return view('admin_layout.adminpanel.setting.app.addapplist2');
}

public function add_app_2(Request $request)
{
 $applist_1 = new AppsSection2List;
 $applist_1->list_title = $request->list_title;
 $applist_1->save();
 return  redirect()->back();
}

public function edit_app_list_2($id)
{
    $data = AppsSection2List::find($id);

    return view('admin_layout.adminpanel.setting.app.editapplist2',compact('data'));
}

public function update_app_list_2(Request $request)
{
    $applist_1 =AppsSection2List::find($request->id);
    $applist_1->list_title = $request->list_title;
    $applist_1->save();
    return  redirect()->back();
}
public function app_destory_list_2($id)
{
    $applist_1 = AppsSection2List::find($id);
    $applist_1->delete();
    return  redirect()->back();
}






   
public function index_app_list_3()
{
    $data = AppsSection3List::all();
 return view('admin_layout.adminpanel.setting.app.applist3',compact('data'));
}

public function add_app_list_3()
{
 return view('admin_layout.adminpanel.setting.app.addapplist3');
}

public function add_app_3(Request $request)
{
 $applist_1 = new AppsSection3List;
 $applist_1->list_title = $request->list_title;
 $applist_1->save();
 return  redirect()->back();
}

public function edit_app_list_3($id)
{
    $data = AppsSection3List::find($id);

    return view('admin_layout.adminpanel.setting.app.editapplist3',compact('data'));
}

public function update_app_list_3(Request $request)
{
    $applist_1 =AppsSection3List::find($request->id);
    $applist_1->list_title = $request->list_title;
    $applist_1->save();
    return  redirect()->back();
}
public function app_destory_list_3($id)
{
    $applist_1 = AppsSection3List::find($id);
    $applist_1->delete();
    return  redirect()->back();
}






   
public function index_app_list_4()
{
    $data = AppsSection4List::all();
 return view('admin_layout.adminpanel.setting.app.applist4',compact('data'));
}

public function add_app_list_4()
{
 return view('admin_layout.adminpanel.setting.app.addapplist4');
}

public function add_app_4(Request $request)
{
 $managementlist_1 = new AppsSection4List;
 $managementlist_1->list_title = $request->list_title;
 $managementlist_1->save();
 return  redirect()->back();
}

public function edit_app_list_4($id)
{
    $data = AppsSection4List::find($id);

    return view('admin_layout.adminpanel.setting.app.editapplist4',compact('data'));
}

public function update_app_list_4(Request $request)
{
    $managementlist_1 =AppsSection4List::find($request->id);
    $managementlist_1->list_title = $request->list_title;
    $managementlist_1->save();
    return  redirect()->back();
}
public function app_destory_list_4($id)
{
    $managementlist_1 = AppsSection4List::find($id);
    $managementlist_1->delete();
    return  redirect()->back();
}






































}
