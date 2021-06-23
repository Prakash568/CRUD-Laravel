@extends('layout')
@section('content')
<div class="page-header">
    <h1>EDIT USERS</h1>
</div>
{{-- <form action="{{ route('users.update', $user->id)}}" method="post" > --}}
<form action="/users/{{$user->id}}" method="post" >
    @method('PUT')
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="{{$user->email}}">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" value="{{$user->address}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/users" class="btn btn-danger">Cancel</a>
</form>
@endsection