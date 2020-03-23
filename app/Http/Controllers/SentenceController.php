<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sentence;

class SentenceController extends Controller
{
    //
    public function index (Request $request)
    {
        $items = Sentence::inRandomOrder()->take(5)->get();
        return view('list', ['items' => $items]);
    }

}
