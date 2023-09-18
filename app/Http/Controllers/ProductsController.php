<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Dashboard\Entities\Sample;

class ProductsController extends Controller
{
    //Web Projects Function
    public function webProject(){
        return view('pages.products.webProject');
    }

    //Sample Page Function
    public function sample(){
        $allSamples = Sample::all();
        return view('pages.products.allSample',[
            'allSamples'=>$allSamples
        ]);
    }



}
