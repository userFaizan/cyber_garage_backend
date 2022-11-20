<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\HomeSection1;
use App\Models\HomeSection2;
use App\Models\HomeSection3;
use App\Models\HomeSection4;
use App\Models\HomeSection5;
use App\Models\HomeSection6;
use App\Models\HomeSection7;
use App\Models\HomeSection8;
use App\Models\VideoSection1;
use App\Models\VideoSection2;
use App\Models\HomeSection2List;
use App\Models\HomeSection5List;
use App\Models\HomeSection8List;
use App\Models\AboutSection1;
use App\Models\AboutSection2;
use App\Models\ManagementSection1;
use App\Models\ManagementSection2;
use App\Models\ManagementSection3;
use App\Models\ManagementSection1List;
use App\Models\AdminSubscription;
use App\Models\SubscriptionsSectionList;
use App\Models\AppsSection1;
use App\Models\AppsSection2;
use App\Models\AppsSection3;
use App\Models\AppsSection4;
use App\Models\AppsSection1List;
use App\Models\AppsSection2List;
use App\Models\AppsSection3List;
use App\Models\AppsSection4List;
use App\Models\Privacy;
use App\Models\Term;
use App\Models\PrivacyList1;
use App\Models\PrivacyList2;
use App\Models\PrivacyList3;
use App\Models\PrivacyList4;
use Validator;
use Illuminate\Support\Facades\Blade;
use DataTables;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
public function index()
{
    $data = HomeSection1::first(); 
    $section_2 = HomeSection2::first(); 
    $section_3 = HomeSection3::first(); 
    $section_4 = HomeSection4::first(); 
    $section_5 = HomeSection5::first(); 
    $section_6 = HomeSection6::first(); 
    $section_7 = HomeSection7::first(); 
    $section_8 = HomeSection8::first(); 
    $section_list_1 = HomeSection2List::all(); 
    $section_list_5 = HomeSection5List::all(); 
    $section_list_8 = HomeSection8List::all(); 

    return view('index',compact('data','section_2','section_3','section_4','section_5','section_6','section_7','section_8','section_list_1','section_list_5','section_list_8'));
} 


public function about_us()
{
    $section_8 = HomeSection8::first(); 
    $section_list_8 = HomeSection8List::all(); 
    $about_1 = AboutSection1::first(); 
    $about_2 = AboutSection2::first(); 
    return view('about_us',compact('section_8','section_list_8','about_1','about_2'));
} 

public function management()
{
    $section_8      = HomeSection8::first(); 
    $section_list_8 = HomeSection8List::all(); 
    $management_1   = ManagementSection1::first(); 
    $management_2   = ManagementSection2::first();  
    $management_3   = ManagementSection3::first();  
    $management_list = ManagementSection1List::all(); 

    return view('management',compact('section_8','section_list_8','management_1','management_2','management_3','management_list'));
} 

public function app()
{
    $section_1         = AppsSection1::first();
    $section_2         = AppsSection2::first(); 
    $section_3         = AppsSection3::first(); 
    $section_4         = AppsSection4::first(); 
    $section_list_1      = AppsSection1List::all(); 
    $section_list_2    = AppsSection2List::all(); 
    $section_list_3    = AppsSection3List::all(); 
    $section_list_4    = AppsSection4List::all(); 


    return view('app',compact('section_1','section_2','section_3','section_4','section_list_1','section_list_2','section_list_3','section_list_4'));
}

public function videos()
{
    $section_1 = VideoSection1::first(); 
    $section_2 = VideoSection2::all(); 
    $section_8 = HomeSection8::first(); 
    $section_list_8 = HomeSection8List::all(); 

    return view('videos',compact('section_1','section_2','section_8','section_list_8'));
}

public function subscription()
{
    $section_1 = AdminSubscription::first(); 
    $sectionlist = SubscriptionsSectionList::all(); 

    return view('subscription',compact('section_1','sectionlist'));
}

public function users()
{
    $users=Blog::all();
    // // return view('list',['users'=>$data]);
    return view('admin_layout.adminpanel.user',compact('users'));

} 

// public function data(Request $request)
// {
//     if ($request->ajax()) {
//         $data = Blog::latest()->get();
//         return Datatables::of($data)
//             ->addIndexColumn()
//             ->addColumn('action', function($row){
//                 $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
//                 return $actionBtn;
//             })
//             ->rawColumns(['action'])
//             ->make(true);
// }
// }


public function dashboard()
{
    return view('dashboard');
} 

public function blog()
{
    $data=Blog::all();
    return view('blog',['users'=>$data]);
}

public function blog_single($id)
{

    $data['result']=DB::table('blog')->where('id',$id)->get();
    return view('blog_single',$data);
}
public function add_user(Request $req)
    {
        $req->validate(
            [
                'title'          => 'required',
                'sub_title'      => 'required|min:5',
                'dob'            => 'required',
                'avatar'         => 'required',
                'discription'    => 'required',
               
            ], 
            [
                'title.required'            => 'Title is required',
                'sub_title.required'        => 'Subtitle is required',
                'dob.required'              => 'Date of Birth is required',
                'avatar.required'           => 'Blog Image is required',
                'discription'               => 'Description is required',
            
           ]
          );
    
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
      

        $Blog->save();
      
        return redirect('dashboard');
        
    }
    public function  destory($id)
    {
    $user = Blog::find($id);
    $user->delete();
       return redirect('admin/user');
  
   }
   function useredit($id)
   {
       $data= Blog::find($id);
       return view('admin_layout.adminpanel.edit',['data'=>$data]);
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
        $Blog->save();
        return redirect('/admin/user');
        
    }


    //privacy policy

    public function privacy()
{
    $privacy_3   = HomeSection8::first();  
    $privacy_list = HomeSection8List::all(); 
    $users=Privacy::find(1);
    $list1 =PrivacyList1::all();
    $list2 =PrivacyList2::all();
    $list3 =PrivacyList3::all();
    $list4 =PrivacyList4::all();

    return view('privacy_policy',compact('privacy_3','privacy_list','users','list1','list2','list3','list4'));
} 

public function terms()
{
    $terms_3   = HomeSection8::first();  
    $terms_list = HomeSection8List::all(); 
    $users=Term::find(1);
    return view('terms_condition',compact('terms_3','terms_list','users'));
} 
}


