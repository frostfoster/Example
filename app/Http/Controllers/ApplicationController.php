<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\MineralType;
use App\Models\MiningTenementPermit;
use App\Models\ModeofTransportation;
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
        $search = request()->query('search');
        if($search){
            $application = Application::where('permittee_name','LIKE','%'.$search.'%')
            ->orWhere('applicant_name','LIKE','%'.$search.'%')->paginate(5);
            $application->appends(['search' => $search]);
        }else{
            $application = Application::paginate(10);
        }
        $mineral = MineralType::all();     
        $tenement = MiningTenementPermit::all();     
        $transportation = ModeofTransportation::all();     
        return view('application', compact('application','mineral','tenement','transportation'));
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
        $tenement = new MiningTenementPermit;
        if ($input->otp == 1)
        {
            $input->otp;
        }
        $input=$request->all();
        Application::create($input);
        return redirect()->back()->with('status','Application Added Successfully');
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
        $mineral = MineralType::all();     
        $tenement = MiningTenementPermit::all();     
        $transportation = ModeofTransportation::all();  
        return view('applicationUpdate',compact("application",'mineral','tenement','transportation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\s
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
}
