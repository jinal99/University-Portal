<?php

class VoteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		
	}

			

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}




	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function voteUp()
	{
		$total_votes = array();
		$id_question=$_GET['qid'];
		$vote= Vote::where('id_user','=', Auth::user()->id)->where('id_question','=',$id_question)->first();
		if($vote)
		{
			$vote->likes = 1;
			$vote->dislikes = 0;
			$vote->save();
			$total_votes["message"] ="Your Vote Has Been Updated";
		}
		else
		{
			$vote = new Vote;
			$vote->id_question = $id_question;
			$vote->id_user = Auth::user()->id;
			$vote->likes = 1;
			$vote->dislikes = 0;
			$vote->save();
			$total_votes["message"] ="Your Vote Has Been Saved";
		}
		$total_votes["likes"] =Vote::where('id_question','=',$id_question)->sum('likes');
		$total_votes["dislikes"] =Vote::where('id_question','=',$id_question)->sum('dislikes');
		return json_encode($total_votes);
	}
			
	public function voteDown()
	{
		$total_votes = array();
		$id_question=$_GET['qid'];
		$vote= Vote::where('id_user','=', Auth::user()->id)->where('id_question','=',$id_question)->first();
		if($vote)
		{
			$vote->dislikes = 1;
			$vote->likes = 0;
			$vote->save();
			$total_votes["message"] ="Your Vote Has Been Updated";
		}
		else
		{
			$vote = new Vote;
			$vote->id_question = $id_question;
			$vote->id_user = Auth::user()->id;
			$vote->dislikes = 1;
			$vote->likes = 0;
			$vote->save();
			$total_votes["message"] ="Your Vote Has Been Saved";
		}		 
		$total_votes = array();
		$total_votes["likes"] =Vote::where('id_question','=',$id_question)->sum('likes');
		$total_votes["dislikes"] =Vote::where('id_question','=',$id_question)->sum('dislikes');
		return json_encode($total_votes);
	}
			
}
