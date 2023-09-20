<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Modules\Dashboard\Entities\Admin;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');;

    }


    //Registration function
    public function registration(Request $request){
//        dd($request->all());

        if ($request->has('txt_thumb')){

            $avatar = $request->file('txt_thumb');
            $imageName = $avatar->getClientOriginalName();

            $uploadPath = 'adminImage/';
            $avatar->move($uploadPath, $imageName);

            $imageURL = $uploadPath . $imageName ;

            $this->saveAdminInfo($request, $imageURL);

        }
        else{

            $newAdmin = new Admin();
            $newAdmin ->fName = $request->txt_firstName;
            $newAdmin ->lName = $request->txt_lastName;
            $newAdmin ->user_name = $request->txt_userName;
            $newAdmin ->phone = $request->txt_phone;
            $newAdmin ->email  = $request->txt_email;
            $newAdmin ->gender  = $request->txt_gender;
            $newAdmin ->dob  = $request->txt_dob;
            $newAdmin ->city  = $request->txt_city;
            $newAdmin ->postalcode  = $request->txt_postalCode;
            $newAdmin ->password  =Hash::make($request->txt_pass) ;
            $newAdmin ->save();

        }


        return redirect(route('dashboard.members'))->with('success','New Admin Created Successfully..!!');
    }


    private function saveAdminInfo($request, $imageURL){
        $newAdmin = new Admin();
        $newAdmin ->fName = $request->txt_firstName;
        $newAdmin ->lName = $request->txt_lastName;
        $newAdmin ->user_name = $request->txt_userName;
        $newAdmin ->phone = $request->txt_phone;
        $newAdmin ->email  = $request->txt_email;
        $newAdmin ->gender  = $request->txt_gender;
        $newAdmin ->dob  = $request->txt_dob;
        $newAdmin ->city  = $request->txt_city;
        $newAdmin ->postalcode  = $request->txt_postalCode;
        $newAdmin ->password  =Hash::make($request->txt_pass) ;
        $newAdmin ->avatar  = $imageURL;
        $newAdmin ->save();

    }


    //Form Validation Function

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email'=> 'required|string',
            'password' => 'required|string',
        ]);
    }


    //Admin Login Function
    public function login(Request $request){
        $this->validateLogin($request);

//            dd($request->all());

        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->get('remember')  )){


            return $request->wantsJson()
                ? new Response('', 204)
                : redirect()->intended(route('dashboard.home'))->with('success','Successfully Login..!!');

//            return redirect(route('home'))->with('success','Successfully Login..!!');

        }else{
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }


    }



    //Logout Function
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->intended(route('dashboard.loginForm'))->with('success','Successfully Logout..!!');
    }




    //Members List Function
    public function memberList(){
        $allMembers = Admin::all();
        return view('dashboard::members.members',[
            'allMembers'=>$allMembers
        ]);
    }


    //Members Details Function
    public function detailsMember($id){
        $MemberById = Admin::findOrFail($id);
        return view('dashboard::members.viewMember',[
            'MemberById'=>$MemberById
        ]);
    }




}
