<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Entities\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allTestimonials = Testimonial::all();
        return view('dashboard::testimonials.listTest',[
            'allTestimonials'=>$allTestimonials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard::testimonials.addTest');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|Renderable|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        dd($request->all());

        if ($request->has('txt_file')){

            $avatar = $request->file('txt_file');
            $imageName = $avatar->getClientOriginalName();

            $uploadPath = 'clientImage/';
            $avatar->move($uploadPath, $imageName);

            $imageURL = $uploadPath . $imageName ;

            $this->saveClientInfo($request, $imageURL);

        }
        else{
            $newTestimonial = new Testimonial();
            $newTestimonial -> name = $request->txt_name;
            $newTestimonial -> country = $request->txt_country;
            $newTestimonial -> platform = $request->txt_platform;
            $newTestimonial -> comments = $request->txt_comments;
            $newTestimonial -> save();

        }

        return  redirect(route('dashboard.testimonials'))->with('success','New Testimonials Save Successfully..!!');



    }

    private function saveClientInfo($request, $imageURL){
        $newTestimonial = new Testimonial();
        $newTestimonial -> name = $request->txt_name;
        $newTestimonial -> country = $request->txt_country;
        $newTestimonial -> platform = $request->txt_platform;
        $newTestimonial -> comments = $request->txt_comments;
        $newTestimonial -> image = $imageURL;
        $newTestimonial -> save();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('dashboard::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
