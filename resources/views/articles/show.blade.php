@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading default">
			Article by Renato Hysa
			<small>
				<a href="/articles/{{$articles->id}}/edit">Edit</a>
			</small>
			<span class="pull-right">
				{{$articles->created_at->diffForHumans()}}
			</span>
			</div>
			<div class="panel-body">
			
			{{$articles->content}}
			</div>
		</div>
	</div>
</div>
@endsection