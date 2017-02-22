<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

use Validator;

use Auth;

use DB;

use Session;

use URL;

class CommentController extends Controller
{
   /**
     * Storing the comment
     *
     */

    public function store(Request $request)
    {
        if(!Auth::check())
        {
        	Session::flash('info_message', 'Please login first.');
        	return redirect()->back();

        }
        else
        {
        	$validator = Validator::make($request->all(), [
                'message' => 'required',
                ]);

	        if ($validator->fails())
	        {
	            return redirect()->back()
	            ->withErrors($validator)
	            ->withInput();
	        }       


	        try
	        {
	        	
	        	$comment = new Comment();
	        	$comment->user_id = Auth::user()->id;
	        	$comment->thread_id = $request->thread_id;
	        	$comment->message = $request->message;
	        	$comment->created_at = date('Y-m-d h:i:s');
		        $comment->save();

		        Session::flash('success_message', 'Your comment has been posted.');
		        return redirect()->back();
		        }

	        catch(\Exception $e)
	        {
	        	Session::flash('info_message', 'Error ocuured in posting your comment. Please try again.');
	             return redirect()->back();
	        }
        }
    }


     /**
     * show edit form
     *
     */

    public function edit($id)
    {
    	$comment = Comment::find($id);
    	$this->checkValidParameter($comment);

    	Session::put('backUrl', URL::previous());
    	return view('comment')->with('comment', $comment);

    }


    /**
     * update comment
     *
     */

    public function update(Request $request)
    {
    	$comment = Comment::find($request->comment_id);
    	$this->checkValidParameter($comment);
    	$comment->message = $request->message;
    	$comment->save();

    	Session::flash('success_message', 'Your comment has been updated.');
		return redirect(Session::pull('backUrl'));

    }



    /**
     * destory the comment
     *
     */

    public function destroy($id)
    {
    	$comment = Comment::find($id);
    	$this->checkValidParameter($comment);
    	$comment->delete();
    	Session::flash('success_message', 'Your comment has been deleted.');
		return redirect()->back();
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
