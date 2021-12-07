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
      <h4>Selamat Datang 
        <b>{{Auth::user()->name}}</b>
        , Anda Login sebagai <b>
          {{Auth::user()->level}}</b>.
      </h4>
    </div>
</div>
@endsection