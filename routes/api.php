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


Route::get('question/random', 'QuestionController@getRandomQuestion');
Route::get('question/{id}', 'QuestionController@getQuestionWithId');

Route::get('questions/amount/{amount}/offset/{offset}', 'QuestionController@getBatchOfQuestions');
Route::get('questions', 'QuestionController@getBatchOfFirstHundredQuestions');
Route::get('questions/offset/{offset}', 'QuestionController@getBatchOfHundredQuestions');

Route::get('questions/random/{quantity}', 'QuestionController@getBatchOfRandomQuestions');

Route::get('questions/category/{category}', 'QuestionController@getQuestionsInCategory');

// date - get all questions from one date
Route::get('questions/date/{date}', 'QuestionController@getQuestionsFromDate');
// date - get random from todays date of any year

// get questions of value
Route::get('questions/value/{value}', 'QuestionController@getQuestionsOfValue');
Route::get('questions/value/{value}/{amount}', 'QuestionController@getQuestionsOfValueAndAmount');

// value, amount, offset
// value, category, amount, offset
