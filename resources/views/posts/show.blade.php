@extends('main')

@section('title','|create a  show posts ')
@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1> {{ $post->title }} </h1>
			<p class="lead">{{ $post->body }}}</p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create at:</dt>
					<dd>time</dd>
				</dl>
			<dl class="dl-horizontal">
				<dt>Updated at:</dt>
				<dd>time</dd>
			</dl>
			<hr>

			<div class="row">
				<div class="col-sm-6">
					<a href="#" class="btn btn-primary btn-block"> Edit</a>
				</div>

				<div class="col-sm-6">
					<a href="#" class="btn btn-danger btn-block"> Delete</a>
				</div>
			</div>

			</div>
		</div>
			
	</div>
   @endsection

