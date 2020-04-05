@extends('layouts.admin')

@section('content')

<h1>Categories</h1>

<div class="col-sm-6">

{!! Form::model( $category ,  ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
         <div class="from-group">
              {!! Form::label('name','Category Name:') !!}
              {!! Form::text('name',null , ['class'=>'form-control']) !!}
	      
	       <!-- {{csrf_field()}} -->
       </div>
       
      <div class="from-group"> 
       {!! Form::submit('Update Category',['class'=>'btn btn-primary col-sm-6']) !!}
      </div>
         {!! Form::close() !!}

         {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy' , $category->id] ]) !!}
          
          <div class="from-group"> 
          {!! Form::submit('Delete Category',['class'=>'btn btn-danger col-sm-6']) !!}
          </div>
         {!! Form::close() !!}
	

	
</div>

<div class="col-sm-6">

	
	
</div>

@stop