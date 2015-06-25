<?php

class QuestionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('questions.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('questions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$question=new Question;
		$question->subject=Input::get('subject');
		$question->body=Input::get('body');
		$question->id_user=Auth::user()->id;
		$question->save();
		
		$tags = explode(',', Input::get('tags'));

		foreach ($tags as $tag_value) {
			$tag =new Tag;
			$tag->id_question = $question->id;
			$tag->tags = $tag_value;
			$tag->save();
		}
		return Redirect::to('/questions');	
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		
		$search=$_GET['search'];
		$id_questions=DB::table('questions')
            ->join('tags', 'questions.id', '=', 'tags.id_question')->where('tags','=',$search)->get(); 
		return View::make('/questions/search')->with('id_questions',$id_questions);
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

	public function display()
	{
		return "string";
	}


}
