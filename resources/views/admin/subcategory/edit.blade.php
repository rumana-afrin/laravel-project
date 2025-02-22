@extends('admin.dashboard')
@section('content')

<div class="card">
    <h2 class="text-center text-primary mt-4">Edit Subcategory</h2>
      <div class="card-body">
          
          <form action="{{route('subcategory.update', $subcategory->id)}}" method="post" enctype="multipart/form-data">
           @csrf
            @method('PUT')
            <label>Category Name</label></br>

            <select class="form-select mb-2" name="category" id="category">
                @foreach ($category as $row)

                <option value="{{ $row->id }}" {{ $row->id == $subcategory->category->id ? 'selected' : '' }}>
                    {{ $row->name }}
                </option>
                @endforeach
            </select>
            <label>SubCategory Name</label></br>
            <input type="text" name="name" id="name" class="form-control" value="{{$subcategory->name}}"></br>
            
           
            <input type="submit" value="Create" class="btn btn-primary"></br>
        </form>
       
      </div>
    </div>

    @endsection