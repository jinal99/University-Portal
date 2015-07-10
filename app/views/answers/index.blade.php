@extends('layouts.main')
@section('content')
<div class="col-sm-8">
{{ Form::open(array('action' => 'AnswerController@store','id'=>'question')) }}
	@foreach($displayQuestions as $displayQuestion)
	 <li>{{ $displayQuestion->subject}}</li></h3></u>
	              {{$displayQuestion->body}}
	@endforeach
    {{Form::textarea('body', null, ['class' => 'ckeditor']) }}
<p>
	{{ Form::hidden('tags','' ,array('id' => 'tags')) }}
	{{Form::submit('submit')}}
</p>
{{Form::close()}}

@stop
