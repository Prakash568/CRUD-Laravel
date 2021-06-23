@extends('layout')
@section('content')
<div class="page-header">
    <h1>Laravel CRUD Application</h1>
</div>
<div class="pull-right">
<button class="btn btn-success"><a href="users/create"><span class="glyphicon glyphicon-plus"></span></a></button>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

            <td>{{$user->address}}</td>
            <td>
                <a href="users/{{$user->id}}/edit" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                <form action="users/{{$user->id}}" method="post">
                    @csrf @method("delete")
                   
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection