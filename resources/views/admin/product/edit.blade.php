@extends('layout.main')
@section('content')

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">

        <form action="{{ route('content.update', $content->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label>Title</label><br>
            <input type="text" name="title" id="name" class="form-control" value="{{$content->title}}"><br>
            <label>Description</label><br>
            <input type="text" name="description" id="address" class="form-control" value="{{$content->description}}"><br>

            
            <label>Category</label><br>
            <select class="form-select" name="category" id="category">
                @foreach ($category as $row)
                <option value="{{ $row->id }}" {{ $row->id == $content->category->id ? 'selected' : '' }}>
                    {{ $row->name }}
                </option>
                @endforeach
            </select>

            <label>Author</label><br>
            <select class="form-select" name="author" id="author">
                @if ($content->auther)
                <option value="{{$content->auther->id}}">{{$content->auther->name}}</option>
                @else
                <option value="">No Author</option>
                @endif
            </select>

            <label>Current image</label><br>
            @if($content->image && file_exists(public_path('storage/' . $content->image)))
            <img style="max-width: 100px; max-height: 100px; margin: 5px;" src="{{asset('storage/' . $content->image)}}" alt="">
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