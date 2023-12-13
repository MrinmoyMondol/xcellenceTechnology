<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Entities\Sample;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allSamples = Sample::all();
        return view('dashboard::sample.sampleList',[
            'allSamples'=>$allSamples
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
//        dd($request->all());

//        $request->validate([
//            'txt_sampleCode' => 'required',
//            'txt_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'txt_sampleFile' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'txt_description' => 'nullable',
//        ]);


        // Handle Thumbnail upload
        $thumbnail = $request->file('txt_thumbnail');
        $thumbnailName = $thumbnail->getClientOriginalName();
        $thumbnailPath = 'sampleFile/thumbnails/';
        $thumbnail->move($thumbnailPath, $thumbnailName);
        $thumbURL = $thumbnailPath . $thumbnailName;



        // Handle Sample File upload
        $sampleFile = $request->file('txt_sampleFile');
        $sampleFileName = $sampleFile->getClientOriginalName();
        $sampleFilePath = 'sampleFile/files/';
        $sampleFile->move($sampleFilePath, $sampleFileName);
        $sampleFileURL = $sampleFilePath . $sampleFileName;

        // Create a new Sample instance and save to the database
        $newSample = new Sample();
        $newSample->sample_code = $request->txt_sampleCode;
        $newSample->sample_file = $sampleFileURL;
        $newSample->thumbnail = $thumbURL;
        $newSample->description = $request->txt_description;
        $newSample->save();

        return  redirect(route('dashboard.sampleList'))->with('success','Successfully Saved..!');
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
        $sampleById = Sample::where('id', $id)->first();
        $sampleById ->delete();

        return  redirect()->back()->with('success','Sample Delete Successfully..!!');
    }
}
