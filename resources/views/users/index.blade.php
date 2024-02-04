@extends('adminLayout')

@section('adminContent')
    <div class="container admin-panel">
        <div class="d-flex justify-content-between">
            <div class="d-flex gap-2">
                <a href="/admins" class="btn btn-outline-dark mt-4">Admins</a>
                <a href="/users" class="btn btn-dark mt-4">Users</a>
            </div>
            <div class="d-flex justify-content-end">
                <a href="/admin/create" class="btn btn-dark mt-4">Add Admin</a>
            </div>
        </div>
        <div class="fs-1 text-center mb-3 fw-bold">Users</div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>
                                <a href="/deleteUser/{{ $user->id }}" class="btn btn-dark btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
