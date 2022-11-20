<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privacy;
use App\Models\PrivacyList1;
use App\Models\PrivacyList2;
use App\Models\PrivacyList3;
use App\Models\PrivacyList4;


class PrivacyController extends Controller
{
    public function privacy_index_1()
    {
         $data = Privacy::first();
        return view('admin_layout.adminpanel.setting.privacy.privacy1',compact('data'));
    }
    public function privacy_update_1(Request $request)
    {
     $privacy =  Privacy::find(1);
    //  $privacy =  new Privacy;

     $privacy->title1 = $request->title1;
     $privacy->sub_title1 = $request->sub_title1;
     $privacy->title2 = $request->title2;
     $privacy->sub_title2 = $request->sub_title2;
     $privacy->title3 = $request->title3;
     $privacy->sub_title3 = $request->sub_title3;
     $privacy->title4 = $request->title4;
     $privacy->sub_title4 = $request->sub_title4;
     $privacy->title5 = $request->title5;
     $privacy->sub_title5 = $request->sub_title5;
     $privacy->title6 = $request->title6;
     $privacy->sub_title6 = $request->sub_title6;
     $privacy->title7 = $request->title7;
     $privacy->sub_title7 = $request->sub_title7;
     $privacy->title8 = $request->title8;
     $privacy->sub_title8 = $request->sub_title8;
     $privacy->title9 = $request->title9;
     $privacy->sub_title9 = $request->sub_title9;
     $privacy->title10 = $request->title10;
     $privacy->sub_title10 = $request->sub_title10;
     $privacy->title11 = $request->title11;
     $privacy->sub_title11 = $request->sub_title11;
     $privacy->title12 = $request->title12;
     $privacy->sub_title12 = $request->sub_title12;
     $privacy->title13 = $request->title13;
     $privacy->sub_title13 = $request->sub_title13;
     $privacy->title14 = $request->title14;
     $privacy->sub_title14 = $request->sub_title14;
     $privacy->title15 = $request->title15;
     $privacy->sub_title15 = $request->sub_title15;
     $privacy->title16 = $request->title16;
     $privacy->save();
     return redirect()->back();
    }


   
    public function index_privacy_list_1()
    {
        $data = PrivacyList1::all();
     return view('admin_layout.adminpanel.setting.privacy.privacylist',compact('data'));
    }
    
    public function add_privacy_list_1()
    {
     return view('admin_layout.adminpanel.setting.privacy.addprivacylist');
    }
    
    public function add_privacy(Request $request)
    {
     $privacylist_1 = new PrivacyList1;
     $privacylist_1->list_title = $request->list_title;
     $privacylist_1->save();
     return  redirect()->back();
    }
    
    public function edit_privacy_list_1($id)
    {
        $data = PrivacyList1::find($id);
    
        return view('admin_layout.adminpanel.setting.privacy.editprivacylist',compact('data'));
    }
    
    public function update_privacy_list_1(Request $request)
    {
        $privacylist_1 =PrivacyList1::find($request->id);
        $privacylist_1->list_title = $request->list_title;
        $privacylist_1->save();
        return  redirect()->back();
    }
    public function privacy_destory_list_1($id)
    {
        $privacylist_1 = PrivacyList1::find($id);
        $privacylist_1->delete();
        return  redirect()->back();
    }
    
    
    
       
    public function index_privacy_list_2()
    {
        $data = PrivacyList2::all();
     return view('admin_layout.adminpanel.setting.privacy.privacylist2',compact('data'));
    }
    
    public function add_privacy_list_2()
    {
     return view('admin_layout.adminpanel.setting.privacy.addprivacylist2');
    }
    
    public function add_privacy_2(Request $request)
    {
     $privacylist_1 = new PrivacyList2;
     $privacylist_1->list_title = $request->list_title;
     $privacylist_1->save();
     return  redirect()->back();
    }
    
    public function edit_privacy_list_2($id)
    {
        $data = PrivacyList2::find($id);
    
        return view('admin_layout.adminpanel.setting.privacy.editprivacylist2',compact('data'));
    }
    
    public function update_privacy_list_2(Request $request)
    {
        $privacylist_1 =PrivacyList2::find($request->id);
        $privacylist_1->list_title = $request->list_title;
        $privacylist_1->save();
        return  redirect()->back();
    }
    public function privacy_destory_list_2($id)
    {
        $privacylist_1 = PrivacyList2::find($id);
        $privacylist_1->delete();
        return  redirect()->back();
    }
    
    
    
    
    
    
       
    public function index_privacy_list_3()
    {
        $data = PrivacyList3::all();
     return view('admin_layout.adminpanel.setting.privacy.privacylist3',compact('data'));
    }
    
    public function add_privacy_list_3()
    {
     return view('admin_layout.adminpanel.setting.privacy.addprivacylist3');
    }
    
    public function add_privacy_3(Request $request)
    {
     $privacylist_1 = new PrivacyList3;
     $privacylist_1->list_title = $request->list_title;
     $privacylist_1->save();
     return  redirect()->back();
    }
    
    public function edit_privacy_list_3($id)
    {
        $data = PrivacyList3::find($id);
    
        return view('admin_layout.adminpanel.setting.privacy.editprivacylist3',compact('data'));
    }
    
    public function update_privacy_list_3(Request $request)
    {
        $privacylist_1 =PrivacyList3::find($request->id);
        $privacylist_1->list_title = $request->list_title;
        $privacylist_1->save();
        return  redirect()->back();
    }
    public function privacy_destory_list_3($id)
    {
        $privacylist_1 = PrivacyList3::find($id);
        $privacylist_1->delete();
        return  redirect()->back();
    }
    
    
    
    
    
    
       
    public function index_privacy_list_4()
    {
        $data = PrivacyList4::all();
     return view('admin_layout.adminpanel.setting.privacy.privacylist4',compact('data'));
    }
    
    public function add_privacy_list_4()
    {
     return view('admin_layout.adminpanel.setting.privacy.addprivacylist4');
    }
    
    public function add_privacy_4(Request $request)
    {
     $managementlist_1 = new PrivacyList4;
     $managementlist_1->list_title = $request->list_title;
     $managementlist_1->save();
     return  redirect()->back();
    }
    
    public function edit_privacy_list_4($id)
    {
        $data = PrivacyList4::find($id);
    
        return view('admin_layout.adminpanel.setting.privacy.editprivacylist4',compact('data'));
    }
    
    public function update_privacy_list_4(Request $request)
    {
        $managementlist_1 =PrivacyList4::find($request->id);
        $managementlist_1->list_title = $request->list_title;
        $managementlist_1->save();
        return  redirect()->back();
    }
    public function privacy_destory_list_4($id)
    {
        $managementlist_1 = PrivacyList4::find($id);
        $managementlist_1->delete();
        return  redirect()->back();
    }
    
    
    
    
    
    
    
    
    
    
    
    

























}
