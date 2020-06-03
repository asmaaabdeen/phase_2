<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;

class FeedbackController extends Controller
{
    //
    function saveFeedback(Request $req)
    {
      $feedback= new feedback;
      $feedback-> name = $req -> input('name');
      $feedback-> email = $req -> input('email');
      $feedback-> message = $req -> input('message');
      $feedback-> save();
      return redirect('/feedback')->with('status','your feedback is sent successfully !');
    }
    public function feedback(){
      $title = 'Feedback';
      return view('feedback')->with('title', $title);
    }
    
    public function showFeedback()
    {
      $feedback = feedback::all()->toArray();
      return view('showfeedback', compact('feedback'));

       
    }
}
