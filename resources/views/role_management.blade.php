@extends('all')

@section('content')

<!-- Main Content -->
<div class="main">
    <div class="main-content">
        <div class="tt mb-3">
            <span class="content-title">Role</span>
            <a href="{{ route('role.create') }}" class="btn btn-dark">Add Role</a>
        </div>
        <div class="mb-3">
            <form action="{{ route('role.search') }}" method="GET">
                <div class="input-group">
                    <input class="form-control" type="search" name="q" value="" placeholder="Search..." style="outline: none;" />
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="card-container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    
                    <strong>Successful!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- Role Table -->
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                @forelse ($roles as $role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->description }}</td>          
                    <td>
                        <a href="" class="btn btn-primary btn-sm mr-2">Edit</a>
                        
                        <form action="{{ route('role.destroy', $role) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <td colspan="4" class="text-center">No records found</td>
                @endforelse
            </table>
            
        </div>
    </div>
</div>

@endsection