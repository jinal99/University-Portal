@extends('layouts.main')
@section('content')
{{ Form::open(array('action' => 'QuestionController@show')) }}
<div class="pull-right">
	<a href="/questions" class="btn btn-info" role="button">View All Questions</a>
</div>
<div class="lineHeight"></div>
<table class="table table-striped">
@foreach($id_questions as $id_question)
<tr>
  <td onclick="myfunction('{{$id_question->id}}')">
 <u><h3><li>{{ $id_question->subject}}</li></h3></u>
 {{$id_question->body}}
 <p style="float:right">Posted by {{User::find($id_question->id_user)->username}} at {{$id_question->created_at}}</p>
</td>
</tr>
@endforeach

</table>
<script>
function myfunction(id)
{
	alert(id);

}
</script>
{{Form::close()}}


@stop
