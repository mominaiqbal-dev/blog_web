@extends('admin.layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex" style="justify-content:space-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Cateogy</h6>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-success"> Back </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $category->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug"
                            value="{{ $category->slug }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{ $category->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Parent Category</label>
                        <select class="form-select" name="parent_id" id="parent_id">
                            <option value="">-- None --</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ $cat->id == $category->parent_id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status" id="status" required>
                            <option value="active" {{ $category->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $category->status == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>

            </div>
        </div>
    </div>
@endsection
