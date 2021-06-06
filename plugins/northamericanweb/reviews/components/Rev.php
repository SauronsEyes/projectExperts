<?php namespace Northamericanweb\Reviews\Components;

use Cms\Classes\ComponentBase;
use Northamericanweb\Reviews\Models\Review;

class Reviews extends ComponentBase 
{
    public function componentDetails(){
        return [

            'name' => 'User Name',
            'review' => 'User Review',
            'stars' => 'Stars'


        ];

    }
    public function onRun(){
        $this->reviews = $this->loadReviews();
    }
    protected function loadReviews(){
        return Review::all();
    }

    public $reviews;
}