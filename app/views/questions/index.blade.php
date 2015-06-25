@extends('layouts.main')
@section('content')

<?php 
	$questions = Question::take(10)->get();
?>
<div class="pull-right">
	<a href="/questions/create" class="btn btn-info" role="button">Ask a question</a>
</div>
<table class="table table-striped">
@foreach($questions as $question)
<tr>
  <td>
 <u><h3><li>{{ $question->subject}}</li></h3></u>
 
 
 <p style="float:right">Posted by {{User::find($question->id_user)->username}} at {{$question->created_at}}</p>
<img src="images/up1.png" alt="like" onclick="voteUp('{{$question->id}}')" style="cursor:pointer">
  <span id="displaylike" style="rgb(81, 182, 81);">{{($question->likes)}}</span>
  </div>
  <div style="position:relative;top:-23px;left:68px;">
  <img src="images/down1.png" alt="dislike" onclick="voteDown('{{$question->id}}')" style="cursor:pointer" />
  <span id="displaydislike" style="rgb(255, 7, 44);">{{$question->dislikes}}</span>
</div></td>
</tr>
@endforeach

</table>

<script>
function voteUp(qid)
{
 
	var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET",votes,true);
    xmlhttp.send();
 
   
}
</script>

@stop
