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
  if (!empty($name)) {
    $results = array();
    foreach ($pms as $pm) {
      if (stripos($pm['name'], $name) !== FALSE || 
          stripos($pm['address'], $name) !== FALSE || 
          stripos($pm['email'], $name) !== FALSE || 
          stripos($pm['phone'], $name) !== FALSE) {
        $results[] = $pm;
      }
    }
    $pms = $results;
  }

  return $pms;
}