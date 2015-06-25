@extends('layouts.main')
@section('content')
<div class="col-sm-8">
{{ Form::open(array('action' => 'QuestionController@store','id'=>'question')) }}
<p>
{{ Form:: label('Subject:')}}
	{{Form::text('subject')}}
<p>
   {{Form::textarea('body', null, ['class' => 'ckeditor']) }}
   {{$errors->first('body')}}
</p>
<p>
    <div class="box">
		<ul id="demo4"></ul>
	</div>
 
</p>
<p>
	{{ Form::hidden('tags','' ,array('id' => 'tags')) }}
	{{Form::submit('submit')}}
</p>
</div>
 <!--  <div class="col-sm-4" style="background-color:lavender;">
  	<h3>How To Ask</h3>
  </div> -->
@stop
