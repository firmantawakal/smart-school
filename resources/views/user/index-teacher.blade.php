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
<!-- ./row -->
<div class="row">
<div class="col-12">
    <div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Teacher</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Student</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
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
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-messageTc{{ $no }}">Send Message</button>
                        </td>
                    </tr>
                    {{-- MESSAGE MODAL --}}
                    <div class="modal fade" id="modal-messageTc{{ $no }}">
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
        </div>
        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
            <table style="width: 100%" id="example2" class="table table-bordered table-striped">
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
                    <?php $no2 = 1 ?>
                    @foreach($student as $row2)
                    <tr>
                        <td>{{ $no2++ }}</td>
                        <td>{{ $row2->id_school }}</td>
                        <td>{{ $row2->username }}</td>
                        <td>{{ $row2->name }}</td>
                        <td>{{ $row2->email }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-messageSt{{ $no }}">Send Message</button>
                        </td>
                    </tr>
                    {{-- MESSAGE MODAL --}}
                    <div class="modal fade" id="modal-messageSt{{ $no }}">
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
                                <input type="text" class="form-control" id="username" placeholder="Enter Username" value="{{ $row2->name }}" readonly>
                                <input type="hidden" name="username" class="form-control" value="{{ $row2->username }}"/>
        
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
        </div>
        </div>
    </div>
    <!-- /.card -->
    </div>
</div>
</div>
@endsection