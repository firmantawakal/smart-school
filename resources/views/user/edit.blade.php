@extends('app')
@section('content')

@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif
<div class="col-lg-6">
  <div class="card card-primary card-outline">
    <div class="card-body">
      <form action="{{ route('user.update', $row) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username"
            placeholder="Enter Username" value="{{ old('username', $row->username) }}" >
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password"
            placeholder="Password">
            <p class="form-text">Empty field if not change password</p>
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name"
            placeholder="Enter Name" value="{{ old('name', $row->name) }}" >
        </div>
        <div class="form-group">
          <label for="name">School</label>
          <input type="text" name="id_school" class="form-control" value="{{ $row->id_school }}"
            placeholder="Enter School" readonly>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email"
            placeholder="Enter Email" value="{{ old('username', $row->email) }}" >
        </div>
        <div class="form-group">
          <label for="role">Role</label>
          <select name="level" class="form-control">
            @foreach($levels as $key => $val)
            @if($key==old('level', $row->level))
            <option value="{{ $key }}" selected>{{ $val }}</option>
            @else
            <option value="{{ $key }}">{{ $val }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <!-- /.card-body -->
        <div class="form-group">
          <button class="btn btn-primary">Save</button>
          <a class="btn btn-danger" href="{{ route('user.index') }}">Back</a>
      </div>
      </form>
    </div>
    </div>
</div>


@endsection