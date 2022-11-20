<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoSection1;
use App\Models\VideoSection2;

class VideoController extends Controller
{
    public function video_index()
    {
        $data = VideoSection1::find(1);
        return view('admin_layout.adminpanel.setting.videos.section1',compact('data'));
    }
    public function video_index_2()
    {
        $data = VideoSection2::find(1);
        return view('admin_layout.adminpanel.setting.videos.section2',compact('data'));
    }
    public function video_update(Request $request)
    {
        $video= VideoSection1::find(1);
        // $video= new VideoSection1;
        $video->title =   $request->title;
        $video->section_1 = $request->section_1;
        $video->section_2 = $request->section_2;
       $video->save();
        return redirect()->back(); 
       }

       public function video_update_2(Request $request)
       {

       $video= new VideoSection2;
       $video->title_1 =   $request->title_1;
       $video->file_1 =   $request->file_1;
       $video->save();
       return redirect()->back(); 
      }

      public function videolist()
      {
          $data = VideoSection2::all();
          return view('admin_layout.adminpanel.setting.videos.videolist',compact('data'));
      }

      public function editvideo($id)
      {
        $data = VideoSection2::find($id);
        return view('admin_layout.adminpanel.setting.videos.edit_section2',compact('data'));
      }
      public function update_video(Request $request)
      {

      $video= VideoSection2::find($request->id);
      $video->title_1 =   $request->title_1;
      $video->file_1 =   $request->file_1;
      $video->save();
      return redirect()->back(); 
     }
     public function  destory_video($id)
     {
     $video = VideoSection2::find($id);
     $video->delete();
     return redirect()->back();    
    }
}
