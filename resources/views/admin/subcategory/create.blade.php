@extends('admin.dashboard');
@section('content');

<div class="card">
    <h2 class="text-center text-primary mt-4">Create Category</h2>
      <div class="card-body">
          
          <form action="{{ route('subcategory.store') }}" method="post" enctype="multipart/form-data">
           @csrf
      
            <label>Category</label></br>

            <select class="form-select mb-2" name="category_id" id="categoryid">
                <option value="-1">select</option>
                @forelse($category as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @empty 
                @endforelse
            </select>
            <input type="text" name="name" id="name" class="form-control"></br>
            
           
            <input type="submit" value="Create" class="btn btn-primary"></br>
        </form>
       
      </div>
    </div>

    @endsection