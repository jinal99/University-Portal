@extends('layouts.main')
@section('content')
{{ Form::open(array('action' => 'QuestionController@store')) }}
<p>
{{ Form:: label('Subject:')}}
	{{Form::text('subject')}}
<p>
   {{Form::textarea('body', null, ['class' => 'ckeditor']) }}
   {{$errors->first('body')}}
</p>
<p>
	Enter Tags:<ul id="demo4"></ul>
<p>
	{{Form::submit('submit')}}
</p>

{{Form::close()}}


@stop
