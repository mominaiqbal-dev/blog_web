@extends('layouts.app')
@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h6>welcome page </h6>
        <h6>welcome with the header </h6>



        @foreach ($posts as $data)
            <div class="row">

                <div class="col-md-6">
                    {{ $data->title }}
                </div>
                <div class="col-md-6">
                    @if ($data->image)
                        <img src="{{ asset('storage/' . $data->image) }}" alt="Post Image" class="img-thumbnail"
                            style="max-height: 350px;">
                    @endif
                </div>
                <ul>
                    @foreach ($data->comments as $item)
                        <li>
                            <p>{{ $item->comment }}</p>
                            <button> reply</button>
                            
                        </li>
                    @endforeach
                </ul>

                <form action="{{ route('front.save.comment') }}" method="POST">
                    @csrf
                    <input type="text" name="comment" id="comment" value="{{ old('comment') }}" class="form-control">
                    <input type="hidden" name="post_id" id="post_id" value="{{ $data->id }}" class="form-control">
                    <button type="submit" class="btn btn-success btn- sm ">comment</button>
                </form>
            </div>
        @endforeach




        {{-- jawad section  --}}









        {{-- new section --}}
    </div>
@endsection
