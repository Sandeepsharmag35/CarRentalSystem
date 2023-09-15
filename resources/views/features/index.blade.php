@extends('layouts.app')
@section('content')
@include('layouts.message')
<div class="mx-8 text-left mt-20">
    <a href="{{route('features.create')}}" class="bg-sidebar hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Features</a>
</div>
<div class="mt-8 border-2 border-blue-500">
    <div class="mb-4 p-3 bg-sidebar">
        <span class="text-white font-bold text-xl">Cars Lists</span>
    </div>
    <div class="overflow-x">
        <table id="example" class="display w-auto">
            <thead>
                <th>Car Name</th>
                <th>Body Type</th>
                <th>Model</th>
                <th>Features</th>
                <th>Image</th>
                <th>Action</th>
            </thead>

            <tbody>
                @foreach($features as $feature)
                <tr>
                    <td>{{$feature->cars->name}}</td>
                    <td>{{$feature->cars->specs->bodyType}}</td>
                    <td>{{$feature->cars->model}}</td>


                    
                    <td>
                        
                            @php
                            
                            $values=explode(',',$feature->features[0]);
                            
                            @endphp

                            @foreach($values as $value)
                            <li>{{ $value }}</li>
                            @endforeach
                        
                    </td>


                    <td><img src="{{asset('images/cars/'.$feature->cars->photopath)}}" alt="" class="w-20 h-20"></td>


                    <td>
                        <div class="flex flex-wrap justify-center space-x-2 gap-2 sm:space-x-4 md:space-x-6">
                            <a href="{{route('features.edit',$feature->id)}}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300 ease-in-out">Edit</a>
                            <a onclick="showDelete('{{$feature->id}}')" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg cursor-pointer transition duration-300 ease-in-out">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
<div id="deletebox" class=" hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 ">
            <p class="font-bold text-2xl">Are you sure to delete?</p>

            <form action="{{route('features.delete')}}" method="POST">
                @csrf
                <input type="hidden" name="dataid" id="dataid" value="">
                <div class="flex mt-10 justify-center ">
                    <input type="submit" value="Yes! Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
                    <a onclick="hideDelete()" class="bg-red-600 text-white px-6 py-2 rounded-lg cursor-pointer mx-2">Exit</a>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            columnDefs: [{
                    width: 200,
                    targets: 0
                },
                {
                    width: 400,
                    targets: 3
                },
                {
                    width: 100,
                    targets: 2
                },
                {
                    width: 200,
                    targets: 1
                }
            ],

        });
    });
</script>

<script>
    function showDelete(id) {
        $('#deletebox').removeClass('hidden');
        $('#dataid').val(id);
    }

    function hideDelete() {
        $('#deletebox').addClass('hidden');
    }
</script>
@endsection