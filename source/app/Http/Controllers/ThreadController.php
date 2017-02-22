<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Thread;

use App\Comment;

use App\Topic;

use App\User;

use Validator;

use Auth;

use DB;

use Session;

use URL;

class ThreadController extends Controller
{
    /**
     * Show thread form
     *
     */

    public function index()
    {
        return view('thread.index')->with('topics', Topic::all());
    }


    /**
     * Show thread detail
     *
     */

    public function detail($id)
    {
        $thread = Thread::find($id);
        $comments = DB::table('comments')->select('comments.id', 'comments.user_id', 'comments.message', 'comments.created_at', 'comments.updated_at', 'users.name', 'users.avatar')->where('thread_id', $id)->leftJoin('users', 'comments.user_id', '=', 'users.id')->get();
        return view('thread.detail')->with('thread', $thread)->with('comments', $comments)->with('thread_id', $id);
    }


    /**
     * Storing the thread
     *
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'topic' => 'required',
                'title' => 'required',
                'summary' => 'required',
                'description' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif | max:1000',
                ]);

        if ($validator->fails())
        {
            return redirect('/thread')
            ->withErrors($validator)
            ->withInput();
        }


        try
        {
        	
        	$thread = new Thread();
        	$thread->user_id = Auth::user()->id;
        	$thread->topic_id = $request->topic;
        	$thread->title = $request->title;
        	$thread->summary = $request->summary;
        	$thread->description = $request->description;
        	$thread->created_at = date('Y-m-d h:i:s');

        	if(!is_null($request->file('image')))
	        {
	            $image = $request->file('image');
	            $file_name = uniqid().".".$image->getClientOriginalExtension();
	            $file_path = 'images/threads';
	            $image->move($file_path, $file_name);
	            $thread->image = $file_name ;

	        }

	        $thread->save();

	        Session::flash('success_message', 'Your thread has been created.');
	            return redirect('/');
	        }

        catch(\Exception $e)
        {
        	Session::flash('info_message', 'Error ocuured in creating a new thread. Please try again.');
             return redirect()->back();
        }


    }


    /**
     * show edit form
     *
     */

    public function edit($id)
    {
        $thread = Thread::find($id);
        $this->checkValidParameter($thread);

        Session::put('backUrl', URL::previous());
        return view('thread.edit')->with('thread', $thread)->with('topics', Topic::all());;

    }


    /**
     * update thread
     *
     */

    public function update(Request $request)
    {
        $thread = Thread::find($request->thread_id);
        $this->checkValidParameter($thread);

        $thread->topic_id = $request->topic;
        $thread->title = $request->title;
        $thread->summary = $request->summary;
        $thread->description = $request->description;
        $thread->save();

        Session::flash('success_message', 'Your thread has been updated.');
        return redirect(Session::pull('backUrl'));

    }


    /**
     * destory the thread
     *
     */

    public function destroy($id)
    {
        $thread = Thread::find($id);
        $this->checkValidParameter($thread);
        $thread->delete();

        Session::flash('success_message', 'Your thread has been deleted.');
        return redirect('/');
    }


    /**
     * return the user to error page if the wrong id is passed on the URL
     *
     */

    protected function checkValidParameter($data)
    {
        
        if(is_null($data))
        {
            abort(404);
        }

        if(!Auth::check())
        {
            return redurect('/login');
        }

        if($data->user_id != Auth::user()->id)
        {
            abort(403);
        }
    }


}
