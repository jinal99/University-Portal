@extends('layouts.main')
@section('content')

 <table class="table table-striped">
@foreach($displayQuestions as $displayQuestion)
<tr>
  <td>
 <u><h3><li>{{ $displayQuestion->subject}}</li></h3></u>
 {{$displayQuestion->body}}
 
 <p style="float:right">Posted by {{User::find($displayQuestion->id_user)->username}} at {{$displayQuestion->created_at}}</p>
<img src="images/up1.png" alt="like" onclick="voteUp('{{$displayQuestion->id}}')" style="cursor:pointer">
  <span id="{{ $displayQuestion->id}}" style="rgb(81, 182, 81);">{{$displayQuestion->likes}}</span>
  </div>
  <div style="position:relative;top:-23px;left:68px;">
  <img src="images/down1.png" alt="dislike" onclick="voteDown('{{$displayQuestion->id}}')" style="cursor:pointer" />
  <span id="displaydislike" style="rgb(255, 7, 44);">{{$displayQuestion->dislikes}}</span>
</div></td>
</tr>
@endforeach

</table>

<script>
function voteUp(qid){

var url = "voteUp";
/*alert(qid);
*/
$.ajax({
  type: "GET",
  url: url,
  data: {qid: qid},
  success: function(result){
 var res = jQuery.parseJSON(result);
 var likes=res[0].likes;
 var id_question=res[0].id_question;
}
  
});

}

</script>

@stop
