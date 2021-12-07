@extends('app')
@section('content')
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif
<div class="card card-primary card-outline">
    <div class="card-body">
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add">Add User</button>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($rows as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->level }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('user.edit', $row) }}">Edit</a>
                    <form method="POST" action="{{ route('user.destroy', $row) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete Data?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

      {{-- INSERT MODAL --}}
      <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" id="username"
                    placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password"
                    placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name"
                    placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="name">School</label>
                  <input type="text" name="id_school" class="form-control" value="{{Auth::user()->id_school}}"
                    placeholder="Enter School">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email"
                    placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="role">Role</label>
                  <select name="level" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                  </select>
                </div>
                <!-- /.card-body -->
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
@endsection