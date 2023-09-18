<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    //Get IT Support Function
    public function getSupport(){
        return view('pages.getSupport');
    }


    //Send Support
    public function sendQuotes(Request $request){
//        dd($request->all());

        $newSupport = new Support();
        $newSupport ->name = $request->txt_name;
        $newSupport ->phone = $request->txt_number;
        $newSupport ->email = $request->txt_email;
        $newSupport ->cmp_name = $request->txt_cmpName;
        $newSupport ->package =json_encode($request->package);
        $newSupport ->description = $request->txt_description;
        $newSupport ->comment = $request->txt_comments;
        $newSupport ->status = '0';
        $newSupport ->save();

        return redirect()->back()->with('success','Please Wait..!  We will contact you soon..!');

    }
}
