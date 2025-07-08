@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <p>contact index</p>



            <div>
                <a href="{{ route('admin.contacts.create') }}"> create</a>
            </div>

            <table>
                <thead>
                    <td>
                        name
                    </td>
                    <td>
                        email </td>


                </thead>
                <tbody>

                    @foreach ($contacts as $item)
                        <tr>
                            <th>
                                {{ $item->name }}
                            </th>
                            <th>
                                {{ $item->email }}
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
