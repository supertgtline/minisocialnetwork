@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading default">
			Edit Article
			</div>
			<div class="panel-body">
			<form action="/articles/{{$articles->id}}" method="POST">
			{{method_field('PUT')}}
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			{{csrf_field()}}
				<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" class="form-control"></textarea>

			</div>
			<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="live">
					Live
				</label>

			</div>
			<div class="form-group">
				<label for="post_on">Post on</label>
				<input type="datetime-local" name="post_on" class="form-control">
			</div>
				<input class="btn btn-success pull-right" type="submit" name="Submit">
			</form>
			
			</div>
		</div>
	</div>
</div>
@endsection