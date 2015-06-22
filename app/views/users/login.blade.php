@extends('layouts.main')
@section('content')
 <div class=class="sr-only">
<div class="form-signin">
	<div class="color">
		<div class="login">
 	{{ Form::open(['route' => 'home.store']) }}
		<table>
	 	<tr>
	 	<td> {{ Form:: label('username','USERNAME:')}} </td>
	 	<td><input type="text" class="form-control" name="username" id="username"></td><br/>  
	 	</tr>

	 	<tr>
	 		<td><div class="lineHeight"></div></td>
	 	</tr>

	 	<tr>
	 	<td><div style="color:#337AB7;">{{ Form:: label('password','PASSWORD:')}}</div></td>
	 	<td>{{ Form:: password('password',array('class' => 'form-control'))}}</td><br/>
	 
	 	</tr>
	 	
		</table>
		<div class="lineHeight"></div>
		<div class="submit">
		<p>	<input type="submit" value="Sign In" >
			<div class="or">OR</div>
			<div class="newUser"><a href="users/register"><button>Create A New User</button></div></p>
		</div>
	</div>
</div>
{{ Form::close() }}
</div>
@stop
  