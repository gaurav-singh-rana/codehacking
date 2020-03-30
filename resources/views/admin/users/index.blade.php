@extends('layouts.admin')



@section('content')

<!-- #####For Session Flash #### -->
@if (Session::has('deleted_user'))
<div class="alert alert-danger">
          <p>{{session('deleted_user')}}</p>
      </div>
@endif

@if (Session::has('updated_user'))
<div class="alert alert-success">
          <p>{{session('updated_user')}}</p>
      </div>
@endif

@if (Session::has('created_user'))
<div class="alert alert-success">
          <p>{{session('created_user')}}</p>
      </div>
@endif
<!-- #####For Session Flash #### -->
<h1>Users</h1>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>

    	@if($users)

    	@foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td><img height="50" src="{{$user->photo ? $user->photo->file: '/images/avatar.png'}}"> </td>
        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
        
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>

      @endforeach
      @endif
    </tbody>
  </table>


@stop