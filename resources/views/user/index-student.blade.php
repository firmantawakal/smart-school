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
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID School</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($rows as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->id_school }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-message{{ $no }}">Send Message</button>
                </td>
            </tr>
            {{-- MESSAGE MODAL --}}
            <div class="modal fade" id="modal-message{{ $no }}">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">SEND MESSAGE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ route('send-message') }}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="username">To</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter Username" value="{{ $row->name }}" readonly>
                        <input type="hidden" name="username" class="form-control" value="{{ $row->username }}"/>

                        </div>
                        
                        <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" id="message"
                            placeholder="Enter Message"></textarea>
                        </div>
                        
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
            @endforeach
        </tbody>
      </table>
@endsection