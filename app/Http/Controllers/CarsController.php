<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CarsController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('cars.index', compact('cars'));
    }
    public function create()
    {
        return view('cars.create');
    }
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'model' => 'required',
        'fuelType' => 'required',
        'transmission' => 'required',
        'mileage' => 'required',
        'rate' => 'required',
        'photopath' => 'required',
        
    ]);
    if ($request->file('photopath')) {
        $file = $request->file('photopath');
        $filename = $file->getClientOriginalName();
        $photopath = time() . '_' . $filename;
        $file->move(public_path('/images/cars/'), $photopath);
        $data['photopath'] = $photopath;
    }
    Cars::create($data);

    return redirect(route('cars.index'))->with('success', 'Car Added Successfully');
}
public function edit(Cars $cars)
{
    return view('cars.edit', compact('cars'));
}
public function update(Request $request, Cars $cars){

    $data=$request->validate([
        'name' => 'required',
        'description' => 'required',
        'model' => 'required',
        'fuelType' => 'required',
        'transmission' => 'required',
        'mileage' => 'required',
        'rate' => 'required',
        'photopath' => 'nullable',
    ]);
    if ($request->file('photopath')) {
        $file = $request->file('photopath');
        $filename = $file->getClientOriginalName();
        $photopath = time() . '_' . $filename;
        $file->move(public_path('/images/cars/'), $photopath);
        File::delete(public_path('/images/cars/' . $cars->photopath));
        $data['photopath'] = $photopath;
    }
    $cars->update($data);
    return redirect(route('cars.index'))->with('success', 'Car Updated Successfully');
}

public function delete(Request $request){
    
    $cars = Cars::find($request->dataid);
    File::delete(public_path('/images/cars/' . $cars->photopath));
    $cars->delete();
    return redirect(route('cars.index'))->with('success', 'Car Deleted Successfully');
}

}
