<?php


namespace App\Http\Controllers;


class QuoteController extends Controller
{
   private $qoutes=[
            ['quote' =>  "My mission in life is not merely to survive, but to thrive; and to do so with some passion,
             some compassion,some humor, and some style.",
             'author' => "Maya Angelou"],
            ['quote' =>"What lies behind you and what lies in front of you, pales in comparison to what lies inside of you.",
             'author' => "RalphWaldo Emerson"],
            ['quote' =>"You must do the things you think you cannot do.",
             'author' => "Eleanor Roosevelt"],
            ['quote' =>"Keep your face always toward the sunshine - and shadows will fall behind you.",
             'author' => "Walt Whitman"]
                    ];
    public function generateQuote()
    {
        $rand=rand(0,3);
        $quote=$this->qoutes[$rand]['quote'];
        $author=$this->qoutes[$rand]['author'];
        return view('quote',compact('quote','author'));
    }
}
