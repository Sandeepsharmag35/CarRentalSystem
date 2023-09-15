<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Specs;
use Illuminate\Http\Request;

class SpecsController extends Controller
{
    public function index()
    {
        $specs=Specs::all();
        return view('specs.index',compact('specs'));
    }
    public function create()
    {
        $cars=Cars::doesntHave('specs')->get();
        return view('specs.create',compact('cars'));
    }
    public function edit(Specs $specs)
    {
        $cars=Cars::all();
        return view('specs.edit',compact('specs','cars'));
    }
    public function store(Request $request){
        $data=$request->validate([
            'car_id'=>'required',
            'bodyType'=>'required',
            'seatCapacity'=>'required',
            'doors'=>'required',
        ]);
        Specs::create($data);
        return redirect()->route('specs.index')->with('success','Specs Added Successfully');
    }
    public function update(Request $request,Specs $specs){
        $data=$request->validate([
            'car_id'=>'required',
            'bodyType'=>'required',
            'seatCapacity'=>'required',
            'doors'=>'required',
        ]);
        $specs->update($data);
        return redirect()->route('specs.index')->with('success','Specs Updated Successfully');
    }
    public function delete(Request $request){
        $specs=Specs::find($request->dataid);
        $specs->delete();
        return redirect()->route('specs.index')->with('success','Specs Deleted Successfully');
    }
}
