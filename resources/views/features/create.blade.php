@extends('layouts.app')

@section('content')
@include('layouts.message')
<div class="container mx-auto mt-6 p-4">
    <h1 class="text-2xl font-semibold mb-4">Add Features for a Car</h1>

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

    <form action="{{ route('features.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="car_id" class="block text-gray-600 font-medium mb-2">Select Car</label>
            <select name="car_id" id="car_id" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300">
                <option value="" selected>-- Select Car --</option>
                @foreach($cars as $car)
                <option value="{{ $car->id }}">{{ $car->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="features" class="block text-gray-600 font-medium mb-2">Features (Separate with commas)</label>
            <textarea name="features[]" id="features" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" rows="4"></textarea>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300">Add Features</button>
        <a href="{{ route('features.index') }}" class="bg-red-500 text-white px-4 py-3 rounded focus:outline-none focus:ring focus:ring-gray-300">Exit</a>
        </div>
    </form>
</div>
@endsection