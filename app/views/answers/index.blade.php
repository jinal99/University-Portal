@extends('layouts.main')
@section('content')
<div class="col-sm-8">
{{ Form::open(array('action' => 'AnswerController@store')) }}

   {{Form::textarea('body', null, ['class' => 'ckeditor']) }}
   {{$errors->first('body')}}
</p>
<p>
	{{Form::submit('submit')}}
</p>
</div>
 <!--  <div class="col-sm-4" style="background-color:lavender;">
  	<h3>How To Ask</h3>
  </div> -->
@stop
