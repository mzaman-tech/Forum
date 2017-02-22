<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Thread;

use App\Topic;

class WelcomeController extends Controller
{
    /**
     * Show the welcome page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
    	$threads = Thread::with('user')->orderBy('id', 'desc')->get();
        return view('welcome')->with('topics', Topic::all())->with('threads', $threads->groupBy('topic_id'));
    }
}
