<?php

namespace App\Http\Controllers;

// use App\Plan;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Stripe;
use Session;

// use App\User;
use Illuminate\Http\Request;

class subscriptionController extends Controller
{
    //


    protected $stripe;

    public function subscription_store(Request $request)
    

        {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $customer = \Stripe\Customer::create([
                'name' => $request->c_name,
                'address' => [
                    'line1' => $request->c_address,
                    'postal_code' => $request->code,
                    'city' => $request->city,
                    'state' => $request->state,
            
                ],
                'email' => $request->c_email,
            ]);         
            UserDetail::create($request->all());
            return redirect('home');

        }
     

    

    
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