@extends('main')

@section('title', '|create new posts')

@section('content')
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>create a new posts</h1>
		<hr>
		{!! Form::open(['route' => 'posts.store']) !!}
		{{ Form::label('title','title:')}}
		{{ Form::text('title',null , array('class' => 'form-control' ))}}

		{{Form::label('body','bodytext:')}}
		{{Form::textarea('body',null,array('class'=> 'form-control'))}}

		{{Form::submit('create post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
    
		{!! Form::close() !!}

	</div>
	</div>
	
	@endsection 
