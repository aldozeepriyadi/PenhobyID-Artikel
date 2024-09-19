@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Community</h1>
        <form action="{{ route('communities.update', $community->community_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Community Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $community->name }}" required>
            </div>
            <div class="mb-3">
                <label for="hobby_id" class="form-label">Hobby</label>
                <select name="hobby_id" class="form-control" id="hobby_id" required>
                    @foreach ($hobbies as $hobby)
                        <option value="{{ $hobby->hobby_id }}" {{ $hobby->hobby_id == $community->hobby_id ? 'selected' : '' }}>{{ $hobby->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="logo_url" class="form-label">Current Logo</label><br>
                @if($community->logo_url)
                    <img src="{{ asset($community->logo_url) }}" alt="Logo" width="100">
                @else
                    <p>No logo available</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="logo_url" class="form-label">Upload New Logo</label>
                <input type="file" name="logo_url" class="form-control" id="logo_url" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
