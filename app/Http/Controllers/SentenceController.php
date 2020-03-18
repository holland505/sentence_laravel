<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sentence;

class SentenceController extends Controller
{
    //
    public function index (Request $request)
    {
        $items = Sentence::all();
        return view('list', ['items' => $items]);
    }

}
