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


Route::get('question', 'QuestionController@singleQuestionRequestHandler');

Route::get('question/today', 'QuestionController@getRandomQuestionFromToday');
Route::get('questions/today', 'QuestionController@getQuestionsFromToday');

Route::get('questions', 'QuestionController@multiQuestionRequestHandler');
