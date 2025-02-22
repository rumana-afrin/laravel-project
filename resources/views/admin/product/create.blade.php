@extends('admin.dashboard')
@section('content')

<div class="card w-75 mx-auto mt-5">
  <div class="card-header">product Page</div>
  <div class="card-body">

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
      @csrf

      <label>Category</label></br>
      <select class="form-select" name="category_id" id="category_id">
        <option value="-1">Select</option>
        @forelse ($category as $row)
        <option value="{{ $row->id }}">{{ $row->name }}</option>
        @empty
        @endforelse
    </select>

      <label>Sub Category</label></br>
      <select class="form-select" name="subcategory_id" id="subcategory_id">
    
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
      <input value="1" type="checkbox" id="active" class="form-check" name="active"></br>
      
      <label>Status</label></br>
      <input type="text" name="status" id="address" class="form-control"></br>

      <label>Feature</label></br>
      <input value="0" type="checkbox" id="featured" class="form-check" name="featured">


      <label>image</label></br>
      <input type="file" name="image" id="image" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection

@section('script');
<script>
  function decorate_subcat(d) {
        // console.log(d);
        $h = "<option value='-1'>Select</option>";
        for (const k in d) {
            $h += "<option value='" + k + "'>" + d[k] + "</option>";
        }
        $("#subcategory_id").html($h);
    }

    $(document).ready(function() {
        $("#category_id").change(function() {
            let id = $(this).val();

            if (id == "-1") {
                return;
            }
            let url = "{{url('getsubcat')}}/" + id;
            // alert(url);
            // alert(id);
            $.get(url, {}, function(d) {

                decorate_subcat(d);
            });


        })
        
    });
</script>


@endsection
<!-- php artisan storage:link -->