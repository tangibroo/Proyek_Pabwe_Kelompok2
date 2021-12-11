@extends('admin.layout.home')

@section('content')
<div class="module-large">
    <h4 class="font-alt mb-0">Edit User</h4>
    <hr class="divider-w mt-10 mb-20">
    <form class="form" role="form">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nama"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="harga" placeholder="No HP"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" placeholder="Email"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="quantity" placeholder="Password" readonly=""/>
        </div>

        <div class="col-sm-12"><a class="btn btn-success btn-round" href="#">Submit</a></div>
    </form>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Users</h2></div>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama </th>
                    <th>No HP </th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <p>datanama</p>
                    </td>
                    <td>
                        <p>datanohp</p>
                    </td>
                    <td>
                        <p>dataemail</p>  
                    </td>
                    <td>
                        <p>datapassword</p>
                    </td>
                    <td>
                        <a href="#" class="btn btn-info btn-circle btn-xs" title="View" data-toggle="tooltip">view</a>
                        <a href="#" class="btn btn-warning btn-circle btn-xs" title="Edit" data-toggle="tooltip">edit</a>
                        <a href="#" class="btn btn-danger btn-circle btn-xs" title="Delete" data-toggle="tooltip" style="margin: right">delete</a>
                    </td>
                </tr>
                        
            </tbody>
        </table>
    </div> 
</div>
@endsection