<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Dashboard\Entities\Offer;
use Modules\Dashboard\Entities\Testimonial;

class WelcomeController extends Controller
{
    //Welcome Page Function
    public function index(){
        return view('home.home');
    }


    //About Us Page
    public function aboutUs(){
        return view('pages.about');
    }

    //COntact Us Page
    public function contact(){
        return view('pages.contact');
    }

    //Testimonial Page Function
    public function offer(){
        $allOffers = Offer::latest()->get();
        return view('pages.offer',[
            'allOffers'=>$allOffers
        ]) ;
    }

    //Pricing Page Function
    public function pricing(){
        return view('pages.packages');
    }



}
