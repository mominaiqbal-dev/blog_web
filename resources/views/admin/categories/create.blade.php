@extends('admin.layouts.master')

@section('content')
{{--new project--}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex" style="justify-content:space-between">
            <h6 class="m-0 font-weight-bold text-primary">Create Cateogy</h6>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-success"> Back </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Parent Category</label>
                        <select class="form-select form-control" name="parent_id" id="parent_id">
                            <option value="">-- None --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select form-control" name="status" id="status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Category</button>
                </form>

            </div>
        </div>
    </div>
@endsection
