<?php

namespace App\Http\Controllers;

// use App\Plan;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;


// use App\User;
use Illuminate\Http\Request;

class subscriptionController extends Controller
{
    //


    protected $stripe;

    // public function __construct() 
    // {
    //     $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    // }

    // public function subscription(Request $request, Plan $plan)
    // {
    //     $plan = Plan::findOrFail($request->get('plan'));
        
    //     $user = $request->user();
    //     $paymentMethod = $request->paymentMethod;

    //     $user->createOrGetStripeCustomer();
    //     $user->updateDefaultPaymentMethod($paymentMethod);
    //     $user->newSubscription('default', $plan->stripe_plan)
    //         ->create($paymentMethod, [
    //             'email' => $user->email,
    //         ]);
        
    //     return redirect()->route('subscription')->with('success', 'Your plan subscribed successfully');
    // }


    // public function createPlan()
    // {
    //     return view('plans.create');
    // }

    public function subscription_store(Request $request)
    // { 
        
    //     $User=new UserDetail;
    //     $User->c_name=$req->c_name;
    //     $User->c_address=$req->c_address;
    //     $User->city=$req->city;
    //     $User->state=$req->state;
    //     $User->code=$req->code;
    //     $User->c_phone=$req->c_phone;
    //     $User->c_email=$req->c_email;
    //     $User->number=$req->number;
    //     $User->f_name=$req->f_name;
    //     $User->l_name=$req->l_name;
    //     $User->phone=$req->phone;
    //     $User->email=$req->email;
    //     $User->username=$req->username;
    //     $User->password=Hash::make($req->password);

    //     $User->save();

    //     return Response::json($User);


        {
            // $request->validate([
            //     'name' => 'required',
            //     'email' => 'required',
            // ]);
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