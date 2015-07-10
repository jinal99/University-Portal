<div id="displayQuestions">
@extends('layouts.main')
@section('content')
 <script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a').filter(function() {
              return this.href==url;
        }).parent().addClass('active');
    });
    </script>
 
    <ul class="nav nav-tabs" role="tablist">
      <li onclick ="display(0)"><a href="/questions" role="tab" data-toggle="tab" style="cursor:pointer">All Questions</a></li>
      <li onclick="display(1)"><a href="/question?id=1"role="tab" data-toggle="tab" style="cursor:pointer">Newest</a></li>
      <li onclick="display(2)"><a href="/question?id=2"role="tab" data-toggle="tab">Most Voted</a></li>
<!--  <li><a role="tab" data-toggle="tab">Answered</a></li>
      <li><a role="tab" data-toggle="tab">Unanswered</a></li> -->
    </ul>
    
 
    <div class="tab-content">
      <div id="displayQuestions">
        <div class="tab-pane fade active in" id="allQuestions">
          <table >
              @foreach($displayQuestions as $displayQuestion)
              <tr>
              <td>
              <u><h3><li onclick="answer('{{$displayQuestion->id}}')" id="subject">{{ $displayQuestion->subject}}</li></h3></u>
              {{$displayQuestion->body}}

              <p id="user" style="float:right">Posted by {{User::find($displayQuestion->id_user)->username}} at {{$displayQuestion->created_at}}</p>

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
      </div>
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
  if(id==0)
  {
    window.location="/questions";
  }
 
  var url = "questions";
  $.ajax({
  type: "GET",
  url: url,
  data: {id: id}
  });
   
  $("#displayQuestions").load("question?id="+id);
   
  if(id){
  window.location="/question?id="+id;
}
}


function answer(id)
{
   window.location = "answers?id="+id;
}
</script>

@stop
