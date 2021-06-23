@extends('layout')
@section('content')
<div class="page-header">
    <h1>ADD USERS</h1>
</div>
<form action="/users" method="post">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="/users" class="btn btn-danger">Back</a>
</form>
@endsection