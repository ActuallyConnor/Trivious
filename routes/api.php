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
Route::get('question/id/{id}', 'QuestionController@getQuestionWithId');
Route::get('question/date/today', 'QuestionController@getRandomQuestionFromToday');
Route::get('question/category/{category}/random', 'QuestionController@getRandomQuestionInCategory');
Route::get('question/value/{value}/random', 'QuestionController@getRandomQuestionOfValue');

Route::get('questions/quantity/{quantity}/offset/{offset}', 'QuestionController@getBatchOfQuestions');
Route::get('questions/random/quantity/{quantity}', 'QuestionController@getBatchOfRandomQuestions');
Route::get('questions/category/{category}', 'QuestionController@getQuestionsInCategory');
Route::get('questions/date/month/{month}/day/{day}', 'QuestionController@getQuestionsFromDay');
Route::get('questions/date/{date}', 'QuestionController@getQuestionsFromDate');
Route::get('questions/value/{value}', 'QuestionController@getQuestionsOfValue');

