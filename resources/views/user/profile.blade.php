@extends('layouts.app')

 <style type="text/css">
 	.profile-img{
 		max-width: 150px;
 		border: 5px solid #fff;
 		border-radius: 100%;
 		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
 	}
 </style>
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img class="profile-img" src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-knives-ninja.png" alt="">
				<h1>{{$user->name}}</h1>
				<h5>{{$user->email}}</h5>
				<h5>{{$user->created_at->format('l j F y')}}</h5><br>
				<h5> ({{$user->dob->age}} years old)</h5>
				<button class="btn btn-success">Follow</button>
			</div>
		</div>
	</div>
</div>

@endsection