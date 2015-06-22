@extends('layouts.main')
@section('content')
<h2 class="form-signin-heading">Create a New Account</h2>
<div class="form-signin">
{{ Form::open(['route' => 'users.store']) }}
	<div class=class="sr-only">
		<table>
	 	<tr>
	 	<td>{{ Form:: label('name','Name:')}}</td>
	 	<td>{{ Form:: text('name')}} </td><br/>
	 	<td>{{$errors->first('name')}}</td>
		</tr>

	 	<tr>
	 	<td>{{ Form:: label('username','Username:')}}</td>
	 	<td>{{ Form:: text('username')}}</td><br/>
	 	<td>{{$errors->first('username')}}</td>
	 	</tr>

	 	<tr>
	 	<td>{{ Form:: label('email','Email')}}</td>
	 	<td>{{ Form:: text('email')}}</td><br/>
	 	<td>{{$errors->first('email')}}</td>
	 	</tr>

	 	<tr>
	 	<td>{{ Form:: label('password','Password')}}</td>
	 	<td>{{ Form:: password('password')}}</tr></br>
	 	<td>{{$errors->first('password')}}</td>
	 	</tr>
	 	
		</table>
		<p>{{ Form::submit('create !')}}</p>

	</div>
</div>
{{ Form::close() }}
@stop
