@extends('admin.dashboard')
@section('content')

<div class="container">
    <div class="row"> 

        <div class="col-md-12 pt-5">
            <div class="card ">
                <!-- <div class="card-header">
                    <h2>Laravel 10 Crud</h2>
                </div> -->
                <div class="card-body">
                    <a href="{{ route('product.create') }}" class="btn btn-success btn-sm" >
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New content
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                
                                    <th style="width:300px">Name</th>
                                    <th style="width:150px">Category</th>
                                    <th style="width:150px">sub Category</th>
                                    <th style="width:150px">price</th>
                                    <th style="width:100px">image</th>
                                    <th style="width:100px">quantity</th>
                                    <th style="width:100px">discount</th>
                                    <th style="width:100px">active</th>
                                    <th style="width:100px">status</th>
                                    <th style="width:500px">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                     <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->subcategory->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->discount }}</td>
                                    <td>{{ $item->active }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->action }}</td>
                                    <td><img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="100px" height="100px"></td>

                                    <td>
                                        <a href="{{ route('product.show', $item->id) }}" title="View content"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ route('product.edit', $item->id) }}" title="Edit content"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ route('product.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline"  onsubmit="return confirm('Confirm delete?')">
                                          @csrf 
                                          @method('delete')
                                           
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete content">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection