@extends('layouts.admin')

@section('content')

<h1>Media</h1>




@if($photos)
	<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
        <th>Updated</th>
        
      </tr>
    </thead>
    <tbody>

    	

    	@foreach($photos as $photo)
      <tr>
        <td>{{$photo->id}}</td>
        <td><img height="50" src="{{$photo->file}}"> </td>
        <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'No Date Available'}}</td>
        <td>{{$photo->updated_at ? $photo->updated_at->diffForHumans() : 'No Date Available'}}</td>
<td>
{!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id] ]) !!}
        
   <div class="from-group"> 
          {!! Form::submit('Delete',['class'=>'btn btn-danger ']) !!}
          </div>   
{!! Form::close() !!}
 </td>
        
      </tr>

      @endforeach
      @endif
    </tbody>
  </table>
	


@stop