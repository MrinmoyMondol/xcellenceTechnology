<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Dashboard\Entities\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allOffers = Offer::latest()->get();
        return view('dashboard::offer.listOffer',[
            'allOffers'=>$allOffers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard::offer.newOffer');

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // Handle Thumbnail upload
        $thumbnail = $request->file('txt_thumb');
        $thumbnailName =time() . Str::random(10) . '.' . $thumbnail->getClientOriginalName();
        $thumbnailPath = 'offerImage/';
        $thumbnail->move($thumbnailPath, $thumbnailName);
        $thumbURL = $thumbnailPath . $thumbnailName;

        $newOffer = new Offer();
        $newOffer ->offer_image =$thumbURL;
        $newOffer ->start_date =  $request->txt_startDate;
        $newOffer ->end_date =$request->txt_endDate;
        $newOffer ->status =1;
        $newOffer ->save();

        return  redirect()->back()->with('success','New Offer Create Successfully..!!');

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
