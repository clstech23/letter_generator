<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
  public function leaningView(){

    return view("clsu.learning_view");
  }
}
