@extends('admin.layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex" style="justify-content:space-between">
            <h6 class="m-0 font-weight-bold text-primary">Employees Record</h6>
            <a href="{{ route('admin.employees.create') }}" class="btn btn-success"> Add Employee </a>
        </div>
        {{-- @dd('hello') --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>



                        @foreach ($employee as $data)
                            {{-- @dd($data) --}}
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->designation }}</td>
                                <td>
                                    {{-- edit --}}
                                    <a href="{{ route('admin.employees.edit', $data->id) }}" class="btn btn-info">
                                        Edit
                                    </a>
                                    {{-- for delete  --}}
                                    <form action="{{ route('admin.employees.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('Delete')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
