<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Features;
use App\Models\Specs;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index()
    {
        $features = Features::all();
        return view('features.index', compact('features'));
    }
    public function create()
    {
        $cars=Cars::doesntHave('features')->get();
        return view('features.create', compact('cars'));
    }
    public function edit($id)
{
    $cars = Cars::doesntHave('features')->get();
    $feature = Features::find($id);

    return view('features.edit', compact('feature', 'cars'));
}


    public function store(Request $request)
{
    $data=$request->validate([
        'car_id' => 'required|exists:cars,id',
        'features' => 'required',
    ]);
    Features::create($data);
    

    return redirect()->route('features.index')->with('success', 'Features added successfully.');
}
public function update(Request $request, $id)
{
    $data = $request->validate([
        'car_id' => 'required|exists:cars,id',
        'features' => 'required',
    ]);

    $feature = Features::find($id); // Find the feature by ID
    $feature->update($data);

    return redirect()->route('features.index')->with('success', 'Features updated successfully.');
}
public function delete(Request $request)
{
    $feature = Features::find($request->dataid);
    $feature->delete();

    return redirect()->route('features.index')->with('success', 'Features deleted successfully.');

}
}