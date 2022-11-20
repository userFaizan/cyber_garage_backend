<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;


class TermController extends Controller
{
    public function terms_index_1()
    {
         $data = Term::first();
        return view('admin_layout.adminpanel.setting.terms.term1',compact('data'));
    }
    public function terms_update_1(Request $request)
    {
     $term =  Term::find(1);
   
     $term->title1 = $request->title1;
     $term->sub_title1 = $request->sub_title1;
     $term->title2 = $request->title2;
     $term->sub_title2 = $request->sub_title2;
     $term->title3 = $request->title3;
     $term->sub_title3 = $request->sub_title3;
     $term->title4 = $request->title4;
     $term->sub_title4 = $request->sub_title4;
     $term->title5 = $request->title5;
     $term->sub_title5 = $request->sub_title5;
     $term->title6 = $request->title6;
     $term->sub_title6 = $request->sub_title6;
     $term->title7 = $request->title7;
     $term->sub_title7 = $request->sub_title7;
     $term->title8 = $request->title8;
     $term->sub_title8 = $request->sub_title8;
     $term->title9 = $request->title9;
     $term->sub_title9 = $request->sub_title9;
     $term->title10 = $request->title10;
     $term->sub_title10 = $request->sub_title10;
     $term->title11 = $request->title11;
     $term->sub_title11 = $request->sub_title11;
     $term->title12 = $request->title12;
     $term->sub_title12 = $request->sub_title12;
     $term->title13 = $request->title13;
     $term->sub_title13 = $request->sub_title13;
     $term->title14 = $request->title14;
     $term->sub_title14 = $request->sub_title14;
     $term->title15 = $request->title15;
     $term->sub_title15 = $request->sub_title15;
     $term->title16 = $request->title16;
     $term->sub_title16 = $request->sub_title16;
     $term->title17 = $request->title17;
     $term->sub_title17 = $request->sub_title17;
     $term->title18 = $request->title18;
     $term->sub_title18 = $request->sub_title18;
     $term->title19 = $request->title19;
     $term->sub_title19 = $request->sub_title19;
     $term->title20 = $request->title20;
     $term->sub_title20 = $request->sub_title20;
     $term->title21 = $request->title21;
     $term->sub_title21 = $request->sub_title21;
     $term->title22 = $request->title22;
     $term->sub_title22 = $request->sub_title22;
     $term->save();
     return redirect()->back();
    }}
