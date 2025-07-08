@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <p>contact create</p>



            <form action="{{ route('admin.contacts.store') }}" method="POST">
                @csrf

                <div class="row">
                    <input type="text" name="name">
                    <input type="text"name='email'>
                    <input type="text" name="pass">
                </div>

                <button type="submit"> Submit </button>
            </form>
        </div>
    </div>
@endsection
