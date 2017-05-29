@extends('main')

@section('title','|create a new posts')

@section('sylesheets')
{!!Html::style('css/parsley.css')!!}
@endsection


@section('content')
 <div class="row">
 	<div class="col-md-8 col-md-offset-2" >
 		<h1>create a new posts</h1>
 		 {!! Form::open(array('route' => 'posts.store', )) !!}
 		 {{Form::label( 'title','title:')}}
 		 {{Form::text('title',null,array('class'=>'form-control')) }}

 		 {{Form::label('body',"Post Body:")}}
 		 {{Form::textarea('body',null,array('class'=>'form-control'))}}
 		 {{Form::submit('Crete new post', array( 'class'=>'btn btn-success btn-lg btn-block'))}}

			{!! Form::close() !!}
 	</div>
 </div>
 @endsection

 @section('scripts')
 {!!Html::script('js/parsley.min.js')!!}
 @endsection


