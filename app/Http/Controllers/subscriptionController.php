<?php

namespace App\Http\Controllers;

// use App\Plan;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Notification;
use App\Notifications\AlertNotification;

// use App\User;
use Illuminate\Http\Request;

class subscriptionController extends Controller
{


    protected $stripe;



    public function subscription_store(Request $request)



        {
          
            UserDetail::create($request->all());
        
          return redirect('home');

        }
     

    // }

    
    public function home(){
        return view ('home');
    }

    public function show_subcription()
{
    $data=UserDetail::all();
    return view('admin_layout.adminpanel.showsubcription',['users'=>$data]);
    // return view('blog');
}

public function  usersdetail_destroy($id){
   
$user = UserDetail::where('id', $id)->firstorfail()->delete();
   
   return redirect('show.subcription');

}
}