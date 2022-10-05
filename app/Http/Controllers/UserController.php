<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Validator;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
public function index()
{
    return view('index');
} 


public function about_us()
{
    return view('about_us');
} 

public function management()
{
    return view('management');
} 

public function app()
{
    return view('app');
}

public function videos()
{
    return view('videos');
}

public function subscription()
{
    return view('subscription');
}

public function admin_user()
{
    $data=Blog::all();
    // return view('list',['users'=>$data]);
    return view('admin_layout.adminpanel.user',['users'=>$data]);
} 

public function dashboard()
{
    return view('dashboard');
} 

public function blog()
{
    $data=Blog::all();
    return view('blog',['users'=>$data]);
    // return view('blog');
}

public function blog_single($id)
{
    // $data= Blog::find($id);
    // dd($data);
    $data['result']=DB::table('blog')->where('id',$id)->get();
    return view('blog_single',$data);
}
public function add_user(Request $req)
    {

        $this->validate($req,[
            'dob' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'discription' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif'
            // 'password_confirmation'=>'required_with:password|same:password|min:8',
        ]);

        $Blog=new Blog;
        $Blog->title=$req->title;
        $Blog->sub_title=$req->sub_title;
        $Blog->dob=$req->dob;
        $Blog->discription=$req->discription;
        if ($req->hasfile('avatar'))
        {
            $destination ='uploads/posts/'.$Blog->avatar;
           $file=$req->file('avatar');
           $extension=$file->getClientOriginalExtension();
           $filename=time(). '.'.$extension;
           $file->move('uploads/posts/',$filename);
           $Blog->avatar = $filename;
       }
    //    dd($Blog);

        $Blog->save();
        // return redirect()->back()->with('status','uaer added successfully');
        return redirect('dashboard');
        
    }
    public function  user($id){
        // $data=Blog::find($id);
        // $data->delete();
    //    return redirect('admin_layout.adminpanel.user');
    $user = Blog::where('id', $id)->firstorfail()->delete();
        //   echo ("User Record deleted successfully.");
        //   return redirect()->route('users.index');
       return redirect('/admin/user');

       
   }
   function useredit($id)
   {
       $data= Blog::find($id);
       return view('admin_layout.adminpanel.edit',['data'=>$data]);
    //    return redirect('admin_layout.adminpanel.edit');


   }
   public function usere_dit(Request $req)
    {
        $Blog= Blog::find($req->id);
        $Blog->title=$req->title;
        $Blog->sub_title=$req->sub_title;
        $Blog->dob=$req->dob;
        $Blog->discription=$req->discription;
        if ($req->hasfile('avatar'))
        {
            $destination ='uploads/posts/'.$Blog->avatar;
           $file=$req->file('avatar');
           $extension=$file->getClientOriginalExtension();
           $filename=time(). '.'.$extension;
           $file->move('uploads/posts/',$filename);
           $Blog->avatar = $filename;
       }
    //    dd($Blog);

        $Blog->save();
        // return redirect()->back()->with('status','uaer added successfully');
        return redirect('/admin/user');
        
    }
}


