<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class SearchController extends Controller
{
    
	/**
     * Show search form
     *
     */

    public function index()
    {
    	return view('search.index');
    }


    /**
     * get search result
     *
     */

    public function getResult($keyword)
    {
    	$threads = DB::table('threads')->select('threads.*', 'users.name')->leftJoin('topics', 'topic_id', '=', 'topics.id')->leftJoin('users', 'user_id', '=', 'users.id')->where('title', 'like', '%'.$keyword.'%')->orWhere('summary', 'like', '%'.$keyword.'%')->orWhere('description', 'like', '%'.$keyword.'%')->get();

    	return view('search.result')->with('threads', $threads);
    }

    
}
