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

    function getQuestionsInCategory($category) {
        $category_id = Category::where('name', $category)->value('id');
        return Question::where('category_id', $category_id)->with(['category'])->get();
    }

    function getRandomQuestionInCategory($category) {
        return $this->getQuestionsInCategory($category)->random();
    }

    function getQuestionsFromDate($date) {
        return Question::where('air_date', $date)->with(['category'])->get();
    }

    function getQuestionsFromDay($month, $day) {
        return Question::whereMonth('air_date', $month)->whereDay('air_date', $day)->with(['category'])->get();
    }

    function getQuestionsFromToday() {
        return $this->getQuestionsFromDay(date("m"), date("d"));
    }

    function getRandomQuestionFromToday() {
        return $this->getQuestionsFromDay(date("m"), date("d"))->random();
    }

    function getQuestionsOfValue($value) {
        return Question::where('value', $value)->with(['category'])->get();
    }

    function getRandomQuestionOfValue($value) {
        return $this->getQuestionsOfValue($value)->random();
    }

}
