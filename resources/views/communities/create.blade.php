@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Community</h1>
        <form action="{{ route('communities.store') }}" method="POST"  enctype="multipart/form-data" onsubmit="return handleFormSubmit(event)">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Community Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="hobby_id" class="form-label">Hobby</label>
                <select name="hobby_id" class="form-control" id="hobby_id" required>
                    @foreach ($hobbies as $hobby)
                        <option value="{{ $hobby->hobby_id }}">{{ $hobby->name }}</option>
                    @endforeach
               </select>
            </div>
        
            <div class="mb-3">
                <label for="logo_url" class="form-label">Upload Logo</label>
                <input type="file" name="logo_url" class="form-control" id="logo_url" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

   
    <script>
        function handleFormSubmit(event) {
            event.preventDefault(); // Mencegah form dari pengiriman langsung

            Swal.fire({
                title: 'Creating Community...',
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            event.target.submit(); // Submit form setelah notifikasi loading muncul
        }

        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}'
            });
        @endif
    </script>
@endsection
