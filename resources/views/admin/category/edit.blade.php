@extends('admin.dashboard');
@section('content');

<div class="card">
    <h2 class="text-center text-primary mt-4">Create Category</h2>
      <div class="card-body">
          
        <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
           @csrf
           @method('PUt')
            <label>Category</label></br>
            <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}"></br>
            <label>Current Image</label></br>
            @if($category->image && file_exists(public_path('storage/' . $category->image)))
            
            <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" style="max-width: 100px; max-height: 100px; margin: 5px;">
            @else
            <p>No image found.</p>
            @endif
            <input type="file" name="image" id="image" class="form-control" value=""></br>
           
            <input type="submit" value="Create" class="btn btn-primary"></br>
        </form>

        {{-- <tr>
            <td>Current Image</td>
            <td> --}}
                <!-- Display the current image here (if applicable) -->
                {{-- @if($category->images && file_exists(public_path('storage/' . $category->images)))
                    <img src="{{ asset('storage/' . $category->images) }}" alt="Category Image" style="max-width: 100px; max-height: 100px; margin: 5px;">
                @else
                    <p>No image found.</p>
                @endif
                <td>
                    <input type="file" name="images" id="images" class="form-control"> --}}
                    <!-- You can use this field to upload a new image if needed -->
                {{-- </td> --}}
       
      </div>
    </div>

    @endsection