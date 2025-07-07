@extends('layouts.app')
@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h6>welcome page </h6>
    </div>
@endsection
