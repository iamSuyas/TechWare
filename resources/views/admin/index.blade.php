@extends('adminLayout')

@section('adminContent')
    <div class="container admin-panel">
        <div class="d-flex justify-content-end">
            <a href="/admin/create" class="btn btn-dark mt-4">Add Admin</a>
        </div>
        <div class="fs-1 text-center mb-3 fw-bold">Admins</div>
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
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->password }}</td>
                            <td>
                                <a href="/admin/{{ $admin->id }}/edit" class="btn btn-outline-dark btn-sm">Edit</a>
                                <a href="/deleteAdmin/{{ $admin->id }}" class="btn btn-dark btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
