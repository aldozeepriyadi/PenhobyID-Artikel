@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Hobby</h1>
        <form action="{{ route('hobbies.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Hobby Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
