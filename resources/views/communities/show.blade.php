@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $community->name }}</h1>
        <p><strong>Hobby:</strong> {{ $community->hobby->name }}</p>
        <p><strong>Logo:</strong> <img src="{{ $community->logo_url }}" alt="Logo" width="100"></p>
        <a href="{{ route('communities.index') }}" class="btn btn-secondary">Back to Communities</a>
    </div>
@endsection
