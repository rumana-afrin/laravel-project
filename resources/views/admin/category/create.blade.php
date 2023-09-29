@extends('admin.dashboard');
@section('content');

<div class="card">
    <h2 class="text-center text-primary mt-4">Create Category</h2>
      <div class="card-body">
          
          <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
           @csrf
      
            <label>Category</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <input type="file" name="image" id="image" class="form-control"></br>
           
            <input type="submit" value="Create" class="btn btn-primary"></br>
        </form>
       
      </div>
    </div>

    @endsection