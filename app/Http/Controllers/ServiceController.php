<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //Web Development Function
    public function webDev(){
        return view('pages.services.webDev');
    }


    //Mobile Development Function
    public function appDev(){
        return view('pages.services.appDev');
    }

    //Graphics Design Function
    public function graphics(){
        return view('pages.services.graphics');
    }

    //Digital Marketing Function
    public function marketing(){
        return view('pages.services.digMarketing');
    }

    //Lead Generation Function
    public function lead(){
        return view('pages.services.leadGen');
    }

    //Virtual Assistant Function
    public function virtual(){
        return view('pages.services.virAssistant');
    }

    //Ecommerce Solution Function
    public function ecommerce(){
        return view('pages.services.ecommerce');
    }

    //Admin Support Function
    public function admin(){
        return view('pages.services.admin');
    }
}
