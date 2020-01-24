<?php

use Illuminate\Http\Request;
use App\Question;
use App\Category;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * /questions
 */
Route::get('questions', function() {
    echo 'return questions with id starting at 1 to 100';
});

Route::get('questions/offset/{offset}', function($offset) {
     echo 'return questions with id starting at '. $offset . ' to ' . ($offset + 100);
});

Route::get('questions/values/{value}', function($value) {
   echo 'return all questions with value of ' . $value . ', 100 at a time';
});

Route::get('questions/values/{value}/offset/{offset}', function($value, $offset) {
    echo 'return all questions with value of ' . $value . ', with an offset of '. $offset . ' to ' . ($offset + 100);
});

/**
 * /question
 */
Route::get('question', function() {
    // return what??
});

Route::get('question/{id}', function($id) {
    return Question::where('id', $id)->with(['category'])->get();
});

Route::get('question/random', function() {
    // return random question
});

Route::get('question/random/{quantity}', function($quantity) {
    //
});

Route::get('question/random/{value}', function($value) {
    //
});

Route::group(['middleware' => ['auth:api']], function() {

});
