<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminSubscription;
use App\Models\SubscriptionsSectionList;

class AdminSubscriptionController extends Controller
{
    public function subscriton_index()
    {
        $data = AdminSubscription:: find(1);
    return view('admin_layout.adminpanel.setting.subscription.section1',compact('data'));
    }


    public function subscriton_update(Request $request)
    {
      $subscriton= AdminSubscription::find(1);
    //   $subscriton= new AdminSubscription;
      $subscriton->title_1 =   $request->title_1;
      $subscriton->title_2 =   $request->title_2;
      $subscriton->title_3 =   $request->title_3;
      $subscriton->title_4 =   $request->title_4;
     $subscriton->save();
      return redirect()->back();
    }

   

    
public function index_subscriton_list_1()
{
    $data = SubscriptionsSectionList::all();
 return view('admin_layout.adminpanel.setting.subscription.subscriptionlist',compact('data'));
}

public function add_subscriton_list_1()
{
 return view('admin_layout.adminpanel.setting.subscription.addsubscriptionlist');
}

public function add_subscriton(Request $request)
{
 $subscriptions = new SubscriptionsSectionList;
 $subscriptions->list_title = $request->list_title;
 $subscriptions->save();
 return  redirect()->back();
}

public function edit_subscriton_list_1($id)
{
    $data = SubscriptionsSectionList::find($id);

    return view('admin_layout.adminpanel.setting.subscription.editsubscriptionlist',compact('data'));
}

public function update_subscriton_list_1(Request $request)
{
    $subscriptions = SubscriptionsSectionList::find($request->id);
    $subscriptions->list_title = $request->list_title;
    $subscriptions->save();
    return  redirect()->back();
}
public function subscriton_destory_list_1($id)
{
    $subscriptions = SubscriptionsSectionList::find($id);
    $subscriptions->delete();
    return  redirect()->back();
}

}
