<?php

namespace App\Http\Controllers;

use App\Models\ModeofTransportation;
use Illuminate\Http\Request;

class ModeofTransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportation = ModeofTransportation::paginate(10);
        return view('transportation', compact('transportation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transportation = new ModeofTransportation;
        $transportation->description = $request->input('description');
        $transportation->save();
        return redirect()->back()->with('status','Transportation Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModeofTransportation  $modeofTransportation
     * @return \Illuminate\Http\Response
     */
    public function show(ModeofTransportation $modeofTransportation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModeofTransportation  $modeofTransportation
     * @return \Illuminate\Http\Response
     */
    public function edit(ModeofTransportation $modeofTransportation)
    {
        $transportation = ModeofTransportation::find($id);
        return view('transportationUpdate',compact('transportation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModeofTransportation  $modeofTransportation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModeofTransportation $modeofTransportation)
    {
        $transportation = ModeofTransportation::find($id);
        $transportation->description = $request->input('description');
        $transportation->update();
        return redirect()->back()->with('status','Transporation Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModeofTransportation  $modeofTransportation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModeofTransportation $modeofTransportation)
    {
        $transportation = ModeofTransportation::find($id);
        $transportation->delete();

        return redirect()->back()->with('status','Transportation Deleted Successfully');
    }


}
