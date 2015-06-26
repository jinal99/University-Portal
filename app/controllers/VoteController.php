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
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
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
		$id_question=$_GET['qid'];
		$vote= Vote::where('id_question','=',$id_question)->where('id_user','=', Auth::user()->id)->first();
		if($vote == null)
		{
			$vote = new Vote;
			$vote->id_question = $id_question;
			$vote->id_user = Auth::user()->id;
			$vote->likes = 1;
			$vote->save();
		}
				$total_votes = Vote::where('id_question','=',$id_question)->sum('likes');
				return json_encode($total_votes);
	}

}
