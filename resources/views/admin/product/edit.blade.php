@extends('admin.dashboard')
@section('content')


<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">

        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label>Title</label><br>
            <input type="text" name="title" id="name" class="form-control" value="{{$product->title}}"><br>
            <label>Description</label><br>
            <input type="text" name="description" id="address" class="form-control" value="{{$product->description}}"><br>

            
            <label>Category</label><br>
            <select class="form-select" name="category" id="category">
                @foreach ($category as $row)
                <option value="{{ $row->id }}" {{ $row->id == $product->category->id ? 'selected' : '' }}>
                    {{ $row->name }}
                </option>
                @endforeach
            </select>

            <label>Subcategory</label><br>
            <select class="form-select" name="author" id="author">
                @if ($product->subcategory)
                <option value="{{$product->subcategory->id}}">{{$product->subcategory->name}}</option>
                @else
                <option value="">No Author</option>
                @endif
            </select>

            <label>Current image</label><br>
            @if($product->image && file_exists(public_path('storage/' . $product->image)))
            <img style="max-width: 100px; max-height: 100px; margin: 5px;" src="{{asset('storage/' . $product->image)}}" alt="">
            @else
            <p>No image found</p>
            @endif
            <label>Image</label><br>
            <input type="file" name="image" id="image" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>

    </div>
</div>

@endsection