<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    protected $fillable = ['id', 'answer', 'question', 'value', 'air_date', 'category_id'];

    public function category() {
        return $this->belongsTo('\App\Category');
    }
}
