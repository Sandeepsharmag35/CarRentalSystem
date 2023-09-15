<!-- resources/views/edit-car.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6 p-4">
    <h1 class="text-2xl font-semibold mb-4">Edit Car</h1>

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Validation Error!</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('cars.update', $cars->id) }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
        @csrf


        <div class="mb-4">
            <label for="name" class="block text-gray-600 font-medium mb-2">Name</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('name', $cars->name) }}">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-600 font-medium mb-2">Description</label>
            <textarea name="description" id="description" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300">{{ old('description', $cars->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="model" class="block text-gray-600 font-medium mb-2">Model</label>
            <input type="text" name="model" id="model" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('model', $cars->model) }}">
        </div>

        <div class="mb-4">
            <label for="fuelType" class="block text-gray-600 font-medium mb-2">Fuel Type</label>
            <input type="text" name="fuelType" id="fuelType" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('fuelType', $cars->fuelType) }}">
        </div>

        <div class="mb-4">
            <label for="transmission" class="block text-gray-600 font-medium mb-2">Transmission</label>
            <input type="text" name="transmission" id="transmission" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('transmission', $cars->transmission) }}">
        </div>

        <div class="mb-4">
            <label for="mileage" class="block text-gray-600 font-medium mb-2">Mileage</label>
            <input type="text" name="mileage" id="mileage" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('mileage', $cars->mileage) }}">
        </div>

        <div class="mb-4">
            <label for="rate" class="block text-gray-600 font-medium mb-2">Rate</label>
            <input type="text" name="rate" id="rate" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('rate', $cars->rate) }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2">Current Car Photo</label>
            <img src="{{ asset('/images/cars/'.$cars->photopath) }}" alt="Current Car Photo" class="max-w-sm">
        </div>

        <div class="mb-4">
            <label for="photopath" class="block text-gray-600 font-medium mb-2">Car Photo</label>
            <input type="file" name="photopath" id="photopath" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300">Update Car</button>
            <a href="{{ route('cars.index') }}" class="text-white bg-red-500 py-3 px-4 rounded hover:underline">Exit</a>
        </div>
        

    </form>
</div>
@endsection