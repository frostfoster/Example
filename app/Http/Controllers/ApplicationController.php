<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $application = Application::paginate(10);
        return view('application', compact('application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = new Application;
        if ($input->otp == 1)
        {
            $input->otp;
        }
        $input=$request->all();
        Application::create($input);
        return redirect()->back()->with('status','Permittee Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $application = Application::find($id);
        return view('applicationUpdate',compact("application"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $application = Application::find($id);
        $input = $request->all();
        $application->update($input);
        return redirect()->back()->with('status','Application Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $application = Application::find($id);
        $application->delete();       
        return redirect()->back()->with('status','Application Deleted Successfully');
    }

    public function search()
    {
        //
        $search_text = $_GET['search'];
        $application = Application::where('applicant_name','LIKE', '%'.$search_text.'%')->get();
        return view('application', compact('application'));
    }
}
