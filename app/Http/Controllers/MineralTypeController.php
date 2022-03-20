<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MineralType;

class MineralTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    


    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'description' => 'required'
        ]);

        $data = new MineralType;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MineralType  $mineralType
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = MineralType::all();
        return view('mineraltype')->with('data',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MineralType  $mineralType
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = MineralType::find($id);
        return view('',compact ('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MineralType  $mineralType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = MineralType::find($id);
        $data->description=$request->input('description');
        $data->save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MineralType  $mineralType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MineralType::find($id);
        $data->delete();

        return redirect()->back();

    }
}
