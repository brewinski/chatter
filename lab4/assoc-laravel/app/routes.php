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

/* Load sample data, an array of associative arrays. */
require "models/pms.php";



// Display search form
Route::get('/', function()
{
	return View::make('pms.query');
});

// Perform search and display results
Route::get('search', function()
{
  $name = Input::get('name');

  $results = search($name);

	return View::make('pms.results')->withPms($results);
});


/* Functions for PM database example. */

/* Search sample data for $name or $year or $state from form. */
function search($name) {
  $pms = getPms();
  // Filter $pms by $name
  $pms = DB::select("select * from pms where name like '%{$name}%' or start like '%{$name}%' or finish like '%{$name}%' or state like '%{$name}%'");
  return $pms;
}