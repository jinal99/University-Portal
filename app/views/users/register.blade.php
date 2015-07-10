@extends('layouts.main')
@section('content')

<div class=class="sr-only">
	<div class="form-signin">
		<div class="color">
			<div class="login">
				<h2 class="form-signin-heading">Create A New Account</h2>
				{{ Form::open(['route' => 'users.store']) }}
					<div class=class="sr-only"  style="position:relative;top:-74px;">
						<table>
	 					<tr>
	 					<td><div style="color:#337AB7;">{{ Form:: label('name','Name:')}}</div></td>
	 					<td><input type="text" class="form-control" name="name" id="name"></td><br/>
	 					<td>{{$errors->first('name')}}</td>  
	 					</tr>
						<tr>
	 		            <td><div class="lineHeight"></div></td>
	 					</tr>
	 					<tr>
	 					<td><div style="color:#337AB7;">{{ Form:: label('username','Username:')}}</div></td>
	 					<td><input type="text" class="form-control" name="username" id="username"></td><br/>
	 					<td>{{$errors->first('name')}}</td>  
	 					</tr>
						<tr>
	 					<td><div class="lineHeight"></div></td>
	 					</tr>
	 					<tr>
	 					<td><div style="color:#337AB7;">{{ Form:: label('email','Email:')}}</div></td>
	 					<td><input type="text" class="form-control" name="email" id="email"></td><br/>
	 					<td>{{$errors->first('email')}}</td> 
	 					</tr>
						<tr>
	 					<td><div class="lineHeight"></div></td>
	 					</tr>
	 					<tr>
	 					<td><div style="color:#337AB7;">{{ Form:: label('password','Password:')}}</div></td>
	 					<td><input type="text" class="form-control" name="password" id="password"></td><br/>
	 					<td>{{$errors->first('password')}}</td> 
	 					</tr>
						</table>
	 					<div class="lineHeight"></div> 
	 
						<p  style="position:relative;left:82px;">
							{{ Form::submit('create !')}}</p>
					</div>
			</div>
		</div>
	</div>
</div>
{{ Form::close() }}
@stop
