@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Communities</h1>
        <a href="{{ route('communities.create') }}" class="btn btn-primary">Add New Community</a>
        <table class="table table-bordered mt-3">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Hobby</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
            @foreach ($communities as $community)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $community->name }}</td>
                    <td>{{ $community->hobby->name }}</td>
                    <td>
                        @if($community->logo_url)
                        <img src="{{ asset($community->logo_url) }}" alt="Logo" width="50">
                        @else
                         No logo available
                         @endif
                        </td>


                    <td>
                        <a href="{{ route('communities.show', $community->community_id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('communities.edit', $community->community_id) }}" class="btn btn-warning">Edit</a>
                        
                        <!-- Tombol Hapus dengan Konfirmasi SweetAlert -->
                        <button class="btn btn-danger" onclick="confirmDelete('{{ $community->community_id }}')">Delete</button>
                        <form id="delete-form-{{ $community->community_id }}" action="{{ route('communities.destroy', $community->community_id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    
    <script>
        function confirmDelete(communityId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + communityId).submit();
                }
            })
        }

        
    </script>
@endsection
