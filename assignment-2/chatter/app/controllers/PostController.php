<?php

class PostController extends \BaseController {

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
  public function index()
  {
    $posts = Post::all();
    return View::make('page.post', compact('posts'));
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
    $post = new Post();

    $input = Input::all();

    $post->user = $input['name'];
    $post->title = $input['title'];
    $post->message = $input['message'];
    
    $post->save();
    $posts = Post::all();
    return View::make('page.post', compact('posts'));

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


}
