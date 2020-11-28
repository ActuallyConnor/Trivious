<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Question;
use App\Category;
use Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller {
    function getNumberOfQuestions() {
        return 96221;
    }

    function getRandomId() {
        return rand(1, $this->getNumberOfQuestions());
    }

    function getQuestionsFromToday(Request $request) {
        $question = Question::query();
        if (count($request->all()) == 0) {
            $question = $question->whereMonth('air_date', date('m'))
            ->whereDay('air_date', date('d'));
        }
        if ($request->has('value')) {
            $question = $question->where('value', $request->value);
        }
        $question = $this->addCategoryToQuestionQuery($request, $question);

        return response(
            $question->with(['category'])->get()
        )->header('Access-Control-Allow-Origin', '*');
    }

    function getRandomQuestionFromToday(Request $request) {
        return $this->getQuestionsFromToday($request)->random();
    }

    function singleQuestionRequestHandler(Request $request) {
        $question = Question::query();

        if (count($request->all()) == 0) {
            $random_id = rand(1, $this->getNumberOfQuestions());
            $question = $question->where('id', $random_id);
        }

        $question = $this->addParamToQuestionQuery($request, $question, 'id');

        $question = $this->questionRequestHandler($request, $question);

        return response(
            $question->with('category')->get()->random()
        )->header('Access-Control-Allow-Origin', '*');
    }

    function multiQuestionRequestHandler(Request $request) {
        $question = Question::query();

        if (count($request->all()) == 0) {
            $question = $question->where('id', '>', 0)
                ->limit(100);
        }

        $question = $this->questionRequestHandler($request, $question);

        if ($request->has('offset')) {
            $question = $question->where('id', '>', $request->offset - 1);
        }

        if ($request->has('quantity')) {
            $question = $question->limit($request->quantity);
        }

        return response(
            $question->with(['category'])->get()
        )->header('Access-Control-Allow-Origin', '*');
    }

    function questionRequestHandler($request, $question) {
        $question = $this->addParamToQuestionQuery($request, $question, 'value');
        $question = $this->addCategoryToQuestionQuery($request, $question);
        $question = $this->addParamToQuestionQuery($request, $question, 'airdate');

        $question = $this->addDateParamsToQuestionQuery($request, $question);

        return $question;
    }

    function addParamToQuestionQuery($request, $question, $param) {
        if ($request->has($param)) {
            $question = $question->where($param, $request->input($param));
        }
        return $question;
    }

    function addCategoryToQuestionQuery($request, $question) {
        if ($request->has('category')) {
            $category_id = Category::where('name', $request->category)->value('id');
            $question = $question->where('category_id', $category_id);
        }
        return $question;
    }

    function addDateParamsToQuestionQuery($request, $question) {
        if ($request->has('year')) {
            $question = $question->whereYear('air_date', $request->year);
        }
        if ($request->has('month')) {
            $question = $question->whereMonth('air_date', $request->month);
        }
        if ($request->has('day')) {
            $question = $question->whereDay('air_date', $request->day);
        }
        return $question;
    }

    function addQuestion(Request $request)
    {
        if (!Auth::guest()) {

            $data = $request->validate([
                'question' => 'required|string',
                'answer' => 'required|string',
                'value' => 'required|string',
                'air_date' => 'required|date',
                'category_id' => 'required|integer|exists,categories,id'
            ]);

            $question = Question::create($data);

            return response()->json([
                'question' => $question,
                'created'  => true,
                'message'  => "Question was successfully created",
            ], 201);
        }

    }

}
