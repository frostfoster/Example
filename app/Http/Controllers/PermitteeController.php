<?php

namespace App\Http\Controllers;

use App\Models\Permittee;
use App\Models\Violation;
use Illuminate\Http\Request;



class PermitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');
        if($search){
            $permittee = Permittee::where('responsible_person','LIKE','%'.$search.'%')
            ->orWhere('permit_holder','LIKE','%'.$search.'%')->paginate(5);
            $permittee->appends(['search' => $search]);
        }else{
            $permittee = Permittee::paginate(10);
        }
        
        $violation = Violation::all();
        return view('permittee', compact('permittee','violation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permittee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permittee = new Permittee;
        $permittee->responsible_person = $request->input('responsible');
        $permittee->date_apprehend = $request->input('date');
        $permittee->time_apprehend = $request->input('time');
        $permittee->remark = $request->input('remark');
        $permittee->violation_permit_id = $request->input('violation');
        $permittee->permit_holder = $request->input('permit_holder');
        $permittee->area_location = $request->input('area');
        $permittee->save();
        return redirect()->back()->with('status','Permittee Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permittee  $permittee
     * @return \Illuminate\Http\Response
     */
    public function show(Permittee $permittee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permittee  $permittee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permittee = Permittee::find($id);
        $violation = Violation::all();
        return view('permitteeUpdate',compact("permittee",'violation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permittee  $permittee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $permittee = Permittee::find($id);
        $permittee->responsible_person = $request->input('responsible');
        $permittee->date_apprehend = $request->input('date');
        $permittee->time_apprehend = $request->input('time');
        $permittee->remark = $request->input('remark');
        $permittee->violation_permit_id = $request->input('violation');
        $permittee->permit_holder = $request->input('permit_holder');
        $permittee->area_location = $request->input('area');
        $permittee->update();
        return redirect()->back()->with('status','Permittee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permittee  $permittee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permittee = Permittee::find($id);
        $permittee->delete();       
        return redirect()->back()->with('status','Permittee Deleted Successfully');
    }
}

