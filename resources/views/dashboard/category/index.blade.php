@extends('')

<h2 class="text-center text-primary mt-4">Category</h2>
<div class="container">
    <div class="row mt-4">

        <div class="col-md-9">
            
                <div class="">
                    
                    <a href="" class="btn btn-primary btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i>Add Category
                    </a>
                </div>
             
                    
                 
                    <div class="table-responsive">
                        <table class="table table-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                           
                                <tr>
                                    <td></td>
                                    <td></td>
                                   

                                    <td>
                                        <a href="" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="" accept-charset="UTF-8" style="display:inline" >
                                         
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" >
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
               
            
        </div>
    </div>
</div>
@endsection