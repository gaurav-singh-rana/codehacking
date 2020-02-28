@extends('layouts.admin')

@section('content')
<h1>Create Users</h1>


        
        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>'true']) !!}
         <div class="from-group">
              {!! Form::label('title','Title:') !!}
              {!! Form::text('title',null , ['class'=>'form-control']) !!}
	      
	       {{csrf_field()}}
       </div>
       
       <div class="from-group"> 
       {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
           
         </div>
         {!! Form::close() !!}

   



@stop