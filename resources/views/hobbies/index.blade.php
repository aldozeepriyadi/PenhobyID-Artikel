@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hobbies</h1>
        <a href="{{ route('hobbies.create') }}" class="btn btn-primary">Add New Hobby</a>
        <table class="table table-bordered mt-3">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            @foreach ($hobbies as $hobby)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $hobby->name }}</td>
                    <td>
                        <a href="{{ route('hobbies.show', $hobby->hobby_id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('hobbies.edit', $hobby->hobby_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('hobbies.destroy', $hobby->hobby_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
