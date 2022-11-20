<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSection2List;
use App\Models\HomeSection5List;
use App\Models\HomeSection8List;

class HomeListController extends Controller
{
    public function home_list_2()
    {
        $data = HomeSection2List::all();
     return view('admin_layout.adminpanel.setting.home2list',compact('data'));
    }

    public function index_home_list_2()
    {
     return view('admin_layout.adminpanel.setting.addhome2list');
    }
    public function add_home_list_2(Request $request)
    {
     $homelist_1 = new HomeSection2List;
     $homelist_1->list_item = $request->list_item;
     $homelist_1->save();
     return  redirect()->back();
    }
    public function edit_home_list_2($id)
    {
        $data = HomeSection2List::find($id);

        return view('admin_layout.adminpanel.setting.edithome2list',compact('data'));
    }
    public function update_home_list_2(Request $request)
    {
        $homelist_1 =HomeSection2List::find($request->id);
        $homelist_1->list_item = $request->list_item;
        $homelist_1->save();
        return  redirect()->back();
    }
    public function destory_list_1($id)
    {
        $homelist_1 = HomeSection2List::find($id);
        $homelist_1->delete();
        return  redirect()->back();
    }


    public function home_list_5()
    {
        $data = HomeSection5List::all();
     return view('admin_layout.adminpanel.setting.home5list',compact('data'));
    }

    public function index_home_list_5()
    {
     return view('admin_layout.adminpanel.setting.addhome5list');
    }

    public function add_home_list_5(Request $request)
    {
     $homelist_5 = new HomeSection5List;
     $homelist_5->list_item = $request->list_item;
     $homelist_5->save();
     return  redirect()->back();
    }

    public function edit_home_list_5($id)
    {
        $data = HomeSection5List::find($id);

        return view('admin_layout.adminpanel.setting.edithome5list',compact('data'));
    }

    public function update_home_list_5(Request $request)
    {
        $homelist_5 =HomeSection5List::find($request->id);
        $homelist_5->list_item = $request->list_item;
        $homelist_5->save();
        return  redirect()->back();
    }
    public function destory_list_5($id)
    {
        $homelist_5 = HomeSection5List::find($id);
        $homelist_5->delete();
        return  redirect()->back();
    }






    
    public function home_list_8()
    {
        $data = HomeSection8List::all();
     return view('admin_layout.adminpanel.setting.home8list',compact('data'));
    }

    public function index_home_list_8()
    {
     return view('admin_layout.adminpanel.setting.addhome8list');
    }

    public function add_home_list_8(Request $request)
    {
     $homelist_8 = new HomeSection8List;
     $homelist_8->list_item = $request->list_item;
     $homelist_8->save();
     return  redirect()->back();
    }

    public function edit_home_list_8($id)
    {
        $data = HomeSection8List::find($id);

        return view('admin_layout.adminpanel.setting.edithome8list',compact('data'));
    }

    public function update_home_list_8(Request $request)
    {
        $homelist_8 =HomeSection8List::find($request->id);
        $homelist_8->list_item = $request->list_item;
        $homelist_8->save();
        return  redirect()->back();
    }
    public function destory_list_8($id)
    {
        $homelist_8 = HomeSection8List::find($id);
        $homelist_8->delete();
        return  redirect()->back();
    }
}
