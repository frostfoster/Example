<?php

namespace App\Http\Controllers;

use App\Models\Permittee;
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
        $permittee = Permittee::paginate(10);
        return view('permittee', compact('permittee'));
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
        return view('permitteeUpdate',compact("permittee"));
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

    public function search(Request $request){

        $search_text = $request->get('search');
        // $permittee = Permittee::where('responsible_person','LIKE','&'.$search_text.'&')->get();

        // return view('permittee', compact('permittee'));
        return Log::alert($search_text);
    }
}
