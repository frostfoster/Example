<?php

namespace App\Http\Controllers;

use App\Models\MiningTenementPermit;
use Illuminate\Http\Request;

class MiningTenementPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenement = MiningTenementPermit::paginate(10);
        return view('tenement', compact('tenement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tenement = new MiningTenementPermit;
        $tenement->description = $request->input('description');
        $tenement->denominated = $request->input('denominated');
        $tenement->granted = $request->input('granted');
        $tenement->expired = $request->input('expired');
        $tenement->sitio = $request->input('sitio');
        $tenement->barangay = $request->input('barangay');
        $tenement->municipality = $request->input('municipality');
        $tenement->province = $request->input('province');
        $tenement->save();
        return redirect()->back()->with('status','Mining Tenement Permit Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MiningTenementPermit  $tenement
     * @return \Illuminate\Http\Response
     */
    public function show(MiningTenementPermit $tenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MiningTenementPermit  $tenement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenement = MiningTenementPermit::find($id);
        return view('tenementUpdate',compact("tenement"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MiningTenementPermit  $tenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tenement = MiningTenementPermit::find($id);
        $tenement->description = $request->input('description');
        $tenement->denominated = $request->input('denominated');
        $tenement->granted = $request->input('granted');
        $tenement->expired = $request->input('expired');
        $tenement->sitio = $request->input('sitio');
        $tenement->barangay = $request->input('barangay');
        $tenement->municipality = $request->input('municipality');
        $tenement->province = $request->input('province');
        $tenement->update();
        return redirect()->back()->with('status','Mining Tenement Permit Updated Successfully');
    }
    public function destroy($id)
    {

        $tenement = MiningTenementPermit::find($id);
        $tenement->delete();

        
        return redirect()->back()->with('status','Mining Tenement Permit Deleted Successfully');
    }

    public function search(Request $request){

        $search_text = $request->get('search');
        // $tenement = MiningTenementPermit::where('description','LIKE','&'.$search_text.'&')->get();

        // return view('tenement', compact('tenement'));
        return Log::alert($search_text);
    }
}
