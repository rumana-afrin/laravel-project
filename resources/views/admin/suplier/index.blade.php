@extends('admin.dashboard')
@section('content')
<h2 class="text-center text-primary mt-4">Supplier</h2>
<div class="container">
    <div class="row mt-4">

        <div class="col-md-9">
            
                <div class="">
                    
                    <a href="{{ route('supplier.create') }}" class="btn btn-primary btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i>Add Supplier
                    </a>
                </div>
             
                    
                 
                    <div class="table-responsive">
                        <table class="table table-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($supplier as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                   

                                    <td>
                                        <a href="{{ route('supplier.show', $item->id) }}" title="View category"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ route('supplier.edit', $item->id) }}" title="Edit category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ route('supplier.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline" onsubmit="return confirm('Confirm delete?')">
                                           @csrf
                                           @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" >
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
@endsection









