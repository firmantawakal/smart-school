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
      <h4>Welcome 
        <b>{{Auth::user()->name}}</b>
        , You login as <b>
          {{Auth::user()->level}}</b>.
      </h4>
    </div>
</div>
@endsection