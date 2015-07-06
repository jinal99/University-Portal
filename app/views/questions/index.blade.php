<div id="displayQuestions">
@extends('layouts.main')
@section('content')
<div class="cd-tabs">
  <nav>
    <ul class="cd-tabs-navigation">
    <li onclick="display('1')" style="cursor:pointer;"><a>Newest</a></li>
    <li onclick="display('2')" style="cursor:pointer;"><a>Most Voted</a></li>
<!--     <li onclick="display('3')" style="cursor:pointer;"><a>Unanswered</a></li> -->
  </nav>
</div> <!-- cd-tabs -->
<table class="table table-striped">
@foreach($displayQuestions as $displayQuestion)
<tr>
  <td>
 <u><h3><li  id="subject">{{ $displayQuestion->subject}}</li></h3></u>
 {{$displayQuestion->body}}
 
 <p  id="user" style="float:right">Posted by {{User::find($displayQuestion->id_user)->username}} at {{$displayQuestion->created_at}}</p>


<img src="images/up1.png" alt="like" onclick="voteUp('{{$displayQuestion->id}}')" style="cursor:pointer">
 
   <span id="l{{$displayQuestion->id}}" style="color:rgb(81, 182, 81);" class="a">{{Vote::where('id_question','=',$displayQuestion->id)->sum('likes')}}</span>
  
  </div>
  <div style="position:relative;top:-23px;left:68px;">
  <img src="images/down1.png" alt="dislike" onclick="voteDown('{{$displayQuestion->id}}')" style="cursor:pointer" />
  <span id="d{{$displayQuestion->id}}" style="color:rgb(255, 7, 44);">{{Vote::where('id_question','=',$displayQuestion->id)->sum('dislikes')}}</span>
</div></td>
</tr>
@endforeach

</table>
</div>
<script>

function voteUp(qid){
var url = "voteUp";
$.ajax({
  type: "GET",
  url: url,
  data: {qid: qid},
  success: function(result){
    var message = jQuery.parseJSON(result);
    $('#l'+qid).text(message.likes);
    $('#d'+qid).text(message.dislikes);
   /* alert(message.message);    */
  }
});
}

function voteDown(qid){
var url = "voteDown";
$.ajax({
  type: "GET",
  url: url,
  data: {qid: qid},
  success: function(result){
    var message = jQuery.parseJSON(result);
    $('#l'+qid).text(message.likes);
    $('#d'+qid).text(message.dislikes);
   /* alert(message.message);*/
    }
});
}

function display(id)
{
  var url = "display";
  $.ajax({
  type: "GET",
  url: url,
  data: {id: id}
  });
  $("#displayQuestions").load("display?id="+id);
}

</script>

@stop
