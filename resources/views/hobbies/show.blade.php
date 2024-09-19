@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $hobby->name }}</h1>
        <a href="{{ route('hobbies.index') }}" class="btn btn-secondary">Back to Hobbies</a>
    </div>
@endsection
