<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Question;
use App\Category;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller {
    function getNumberOfQuestions() {
        return 96221;
    }

    function getRandomId() {
        return rand(1, $this->getNumberOfQuestions());
    }

    function getQuestionWithId($id) {
        return Question::where('id', $id)->with(['category'])->get();
    }

    function getBatchOfQuestions($quantity, $offset) {
        $questions = array();
        for ($i = $offset; $i < $quantity + $offset; $i++) {
            array_push($questions, $this->getQuestionWithId($i));
        }
        return $questions;
    }

    function getRandomQuestion() {
        $random_id = rand(1, $this->getNumberOfQuestions());
        return $this->getQuestionWithId($random_id);
    }

    function getBatchOfRandomQuestions($quantity) {
        $questions = array();
        for ($i = 0; $i < $quantity; $i++) {
            array_push($questions, $this->getRandomQuestion());
        }
        return $questions;
    }

    function getQuestionsFromToday() {
        return $this->getQuestionsFromDay(date("m"), date("d"));
    }

    function getRandomQuestionFromToday() {
        return $this->getQuestionsFromDay(date("m"), date("d"))->random();
    }

    function singleQuestionRequestHandler(Request $request) {
        $question = Question::query();

        if (count($request->all()) == 0) {
            $random_id = rand(1, $this->getNumberOfQuestions());
            $question = $question->where('id', $random_id);
        }

        $question = $this->addParamToQuestionQuery($request, $question, 'id');

        $question = $this->questionRequestHandler($request, $question);

        return $question->with('category')->get()->random();
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

        return $question->with(['category'])->get();
    }

    function questionRequestHandler($request, $question) {
        $question = $this->addParamToQuestionQuery($request, $question, 'value');
        $question = $this->addCategoryToQuestionQuery($request, $question);
        $question = $this->addParamToQuestionQuery($request, $question, 'air_date');

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

}
