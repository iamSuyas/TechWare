@extends('adminLayout')
  
@section('adminContent')

<div class="container">
        <div class="text-right">
            <a href="/admin/create" class="btn btn-dark mt-2">Add Admin</a>
        </div>
        <h1 class="text-center">Admins</h1>
        <div class="container">           
  <table class="table table-striped">
    <thead>
    <tr>
            <th>Id  </th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($admins as $admin)
      <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->password}}</td>
        <td>
            <a href="/admin/{{$admin->id}}/edit" class="btn btn-outline-dark btn-sm">Edit</a>
            <a href="/deleteAdmin/{{$admin->id}}" class="btn btn-outline-dark btn-sm">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

    </div>
 
    @endsection

