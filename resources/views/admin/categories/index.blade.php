@extends('admin.layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex" style="justify-content:space-between">
            <h6 class="m-0 font-weight-bold text-primary">Categories Listing</h6>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success"> create </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Decription</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Decription</th>
                            <th>Status</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($categories as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->slug }}</td>
                                <td>{{ $data->description }}</td>
                                <td>{{ $data->status }}</td>
                                <td>

                                    <a href="{{ route('admin.categories.edit', $data->id) }}" class="btn btn-info">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
