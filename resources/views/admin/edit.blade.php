@extends('adminLayout')
  
@section('adminContent')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <div class="card mt-3 p-3">
                    <form method="POST" action="/admin/{{$admin->id}}" >
                        <h3>Edit Admin [{{$admin->name}}]</h3>
                        
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="name" id="" value="{{$admin->name}}">
                           
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="" value="{{$admin->email}}">
                            
                        </div>                           
                                                  
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection