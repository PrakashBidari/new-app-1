@extends('admin.master')
@section('master')
    <form method="post" action="{{ route('admin.user.update', $user) }}" class="row g-3 bg-white py-4 px-3 mt-5 mb-5"
        style="width: 500px; border-radius:8px;">
        @csrf
        @method('put')

        <div class="col-12">
            <label for="inputNanme4" class="form-label">Your Name</label>
            <input type="text" value="{{ $user->name }}" class="form-control" id="inputNanme4" disabled>
        </div>
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" value="{{ $user->email }}" class="form-control" id="inputEmail4" disabled>
        </div>
        <div class="col-12">
            <label for="inputRole4" class="form-label">Role</label>
            <select id="inputState" class="form-select" name="role" id="role">
                <option selected="">Choose...</option>
                <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="User" {{ $user->role == 'User' ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <div class="text-start">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
