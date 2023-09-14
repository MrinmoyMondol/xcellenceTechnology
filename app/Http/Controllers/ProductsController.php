<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //Web Projects Function
    public function webProject(){
        return view('pages.products.webProject');
    }


}
