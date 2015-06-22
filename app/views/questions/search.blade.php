@extends('layouts.main')
@section('content')

{{ Form::open(array('action' => 'SearchController@show')) }}
@foreach($questions as $question)
{{$question->id_question}}
@endforeach
{{Form::close()}}


@stop
