@extends('admin.dashboard')
@section('content')

<div class="card w-75 mx-auto mt-5">
  <div class="card-header">product Page</div>
  <div class="card-body">

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
      @csrf

      <label>Category</label></br>
      <select class="form-select" name="category" id="category">
        <option value="-1">Select</option>
        @forelse ($category as $row)
        <option value="{{ $row->id }}">{{ $row->name }}</option>
        @empty
        @endforelse
    </select>

      <label>Sub Category</label></br>
      <select class="form-select" name="auther" id="subcategory">
      <option value="-1">Select</option>
        @forelse ($subcategory as $row)
        <option value="{{$row->id}}">{{$row->name}}</option>
        @empty
        @endforelse
      </select>

      <label>Name</label></br>
      <input type="text" name="name" id="name" class="form-control"></br>

      <label>Details</label></br>
      <input type="text" name="details" id="address" class="form-control"></br>
      
      <label>Price</label></br>
      <input type="text" name="price" id="address" class="form-control"></br>

      <label>Quantity</label></br>
      <input type="text" name="quantity" id="address" class="form-control"></br>

      <label>Discount</label></br>
      <input type="text" name="discount" id="address" class="form-control"></br>

      <label>Active</label></br>
      <input type="text" name="active" id="address" class="form-control"></br>
      
      <label>Status</label></br>
      <input type="text" name="status" id="address" class="form-control"></br>


      <label>image</label></br>
      <input type="file" name="image" id="image" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection

@section('script');
<script>
  $(document).ready(function() {
    $("#category").change(function() {
        let catid = $(this).val();
        alert(catid);
    });
  });
</script>
@endsection
<!-- php artisan storage:link -->