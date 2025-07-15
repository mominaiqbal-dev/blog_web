@extends('admin.layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex" style="justify-content:space-between">
            <h6 class="m-0 font-weight-bold text-primary">Posts Listing</h6>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success"> create </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tile</th>
                            <th>Slug</th>
                            <th>Decription</th>
                            <th>Status</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->slug }}</td>
                                <td>{{ $data->content }}</td>
                                <td>
                                    @if ($data->image)
                                        <img src="{{ asset('storage/' . $data->image) }}" alt="Post Image"
                                            class="img-thumbnail" style="max-height: 150px;">
                                    @endif
                                </td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    {{-- edit --}}
                                    <a href="{{ route('admin.posts.edit', $data->id) }}" class="btn btn-info">
                                        Edit
                                    </a>
                                    {{-- for delete  --}}
                                    <form action="{{ route('admin.posts.destroy', $data->id) }}" method="POST">
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
