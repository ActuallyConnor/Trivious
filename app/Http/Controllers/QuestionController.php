<?php

namespace App\Http\Controllers;

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

    function getBatchOfQuestions($amount, $offset) {
        $questions = array();
        for ($i = $offset; $i < $amount + $offset; $i++) {
            array_push($questions, $this->getQuestionWithId($i));
        }
        return $questions;
    }

    function getBatchOfFirstHundredQuestions() {
        return $this->getBatchOfQuestions(100, 1);
    }

    function getBatchOfHundredQuestions($offset) {
        return $this->getBatchOfQuestions(100, $offset);
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
}
