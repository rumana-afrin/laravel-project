@extends('admin.dashboard')
@section('content')

<div class="card">
    <h2 class="text-center text-primary mt-4">Create Supplier</h2>
      <div class="card-body">
          
          <form action="{{route('supplier.store')}}" method="post" id="your-form-id" enctype="multipart/form-data">
           @csrf
      
            <label>name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            
            <label>email</label></br>
            <input type="email" name="email" id="email" class="form-control">
            <div id="alert-message"></div>

            <label class="mt-4">phone</label></br>
            <input type="text" name="phone" id="phone" class="form-control"></br>

            <input type="submit"  value="submit" class="btn btn-primary"></br>
        </form>
       
      </div>
    </div>

    @endsection

