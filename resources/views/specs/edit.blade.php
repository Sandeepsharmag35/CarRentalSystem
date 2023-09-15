@extends('layouts.app')

@section('content')
@include('layouts.message')
<div class="container mx-auto mt-6 p-4">
    <h1 class="text-2xl font-semibold mb-4">Edit Car Specifications</h1>

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

    <form action="{{ route('specs.update',$specs->id) }}" method="POST" class="w-full max-w-lg">
        @csrf
       

        <div class="mb-4">
    <label for="car_id" class="block text-gray-600 font-medium mb-2">Car</label>
    <select class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" name="car_id" id="car_id">
        <option value="{{ $specs->cars->id }}" selected>{{ $specs->cars->name }}</option>
    </select>
</div>


        <div class="mb-4">
            <label for="bodyType" class="block text-gray-600 font-medium mb-2">Body Type</label>
            <input type="text" name="bodyType" id="bodyType" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('bodyType', $specs->bodyType) }}">
        </div>

        <div class="mb-4">
            <label for="seatCapacity" class="block text-gray-600 font-medium mb-2">Seat Capacity</label>
            <input type="text" name="seatCapacity" id="seatCapacity" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('seatCapacity', $specs->seatCapacity) }}">
        </div>

        <div class="mb-4">
            <label for="doors" class="block text-gray-600 font-medium mb-2">Doors</label>
            <input type="text" name="doors" id="doors" class="w-full px-4 py-2 border rounded focus:ring focus:ring-indigo-300" value="{{ old('doors', $specs->doors) }}">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300">Update Specifications</button>
            <a href="{{ route('specs.index') }}" class="bg-red-500 text-white px-4 py-3 rounded hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300">Exit</a>
        </div>
    </form>
</div>
@endsection
