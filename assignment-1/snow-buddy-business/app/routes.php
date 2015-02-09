<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
           {      
             return Redirect::to(url("post"));
           });

Route::get('post', function()
           {
             $posts = get_posts();
             foreach($posts as $post)
             {
               $count = count(get_comments($post->id));
               $post->count = $count;
             }
             return View::make('pages.post')->withPosts($posts);
           });

Route::post('add_post_action', function()
            {
              $user = Input::get('name');
              $title = Input::get('title');
              $message = Input::get('message');
              if(!empty($title) && !empty($message))
              {
                add_post($user, $title, $message);
              }

              return Redirect::to(url("post"));
            });

Route::get('delete_post_action/{id}', function($id)
           {
             delete_post($id);

             return Redirect::to(url("post"));
           });

Route::get('update_post/{id}', function($id) 
           {
             $post = get_post($id);
             $comments = get_comments($id);
             $count = count(get_comments($post->id));
             $post->count = $count;
             return View::make('pages.update_post')->withPost($post)->withComments($comments);
           });

Route::post('update_post_action', function()
            {
              $id = Input::get('id');
              $user = Input::get('name');
              $title = Input::get('title');
              $message = Input::get('message');

              if(!empty($title) && !empty($message))
              {
                update_post($id, $user, $title, $message);
              }
              return Redirect::to(url("update_post/$id"));
            });

Route::get('comments/{id}', function($id) 
           {
             $post = get_post($id);
             $comments = get_comments($id);
             $count = count(get_comments($post->id));
             $post->count = $count;
             return View::make('pages.comments')->withPost($post)->withComments($comments);
           });

Route::post('add_comment_action', function()
            {
              $id = Input::get('id');
              $user = Input::get('name');
              $message = Input::get('message');

              add_comment($id, $user, $message);

              return Redirect::to(url("comments/$id"));
            });

Route::get('delete_comment/{id}/{postid}', function($id, $postid) 
           {
             delete_comment($id);

             return Redirect::to(url("comments/$postid"));
           });

// Comments Functions

function delete_comment($id)
{
  $sql = "delete from comments where id = ?";
  DB::delete($sql, array($id));
}
function delete_comments($id)
{
  $sql = "delete from comments where postid = ?";

  DB::delete($sql, array($id));

}
function get_comment($cid) {
  $sql = "select postid from comments where id = ?";

  DB::select($sql, array($cid));
}
function get_comments($id)
{
  $sql = "select comments.id, comments.postid, comments.user, comments.message from comments, posts where posts.id = comments.postid and comments.postid = ? order by comments.id desc";

  return $comments = DB::select($sql, array($id));
}

function add_comment($id, $user, $message)
{
  $sql = "insert into comments (postid, user, message) values(?, ?, ?)";

  DB::insert($sql, array($id, $user, $message));
}

//Post Functions

function update_post($id, $user, $title, $message) 
{
  $sql = "update posts set user = ?, title = ?, message = ? where id = ?";

  DB::insert($sql, array($user, $title, $message, $id));
}

function delete_post($id) 
{
  $sql = "delete from posts where id = ? ";
  DB::delete($sql, array($id));

  delete_comments($id);
}

function add_post($user, $title, $message)
{
  if (!empty($title) && !empty($message)) 
  {
    $sql = "insert into posts (user, title, message) values (?, ?, ?)";
    DB::insert($sql, array($user, $title, $message));
  }

}

function get_post($id)
{
  $sql = "select * from posts where id = ?";

  $post = DB::select($sql, array($id));
  return $post[0];
}

function get_posts() 
{
  $sql = "select * from posts order by id desc";
  $posts = DB::select($sql);
  return $posts;

  //die "be the first to post on chatter";

}




