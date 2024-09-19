@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Hobby</h1>
        <form action="{{ route('hobbies.update', $hobby->hobby_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Hobby Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $hobby->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
