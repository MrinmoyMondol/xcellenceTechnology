<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Dashboard\Entities\PreviousWork;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allWorks = PreviousWork::all();
        return view('dashboard::prevWork.workList',[
            'allWorks'=>$allWorks
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
        $avatar = $request->file('txt_workFile');
        $imageName =time() . Str::random(10) . '.' . $avatar->getClientOriginalName();

        $uploadPath = 'prevWorkFile/';
        $avatar->move($uploadPath, $imageName);

        $imageURL = $uploadPath . $imageName ;

        $newWork = new PreviousWork();
        $newWork ->work_type = $request->txt_workType;
        $newWork ->work_title = $request->txt_title;
        $newWork ->work_link = $request->txt_url;
        $newWork ->work_file = $imageURL;
        $newWork ->save();

        return  redirect(route('dashboard.workList'))->with('success','Successfully Saved..!');
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
        $workById = PreviousWork::where('id',$id)->first();
        $workById ->delete();

        return redirect()->back()->with('success','Successfully Deleted..!');
    }
}
