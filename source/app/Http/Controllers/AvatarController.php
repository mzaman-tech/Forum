<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Validator;

use Auth;

use Session;

class AvatarController extends Controller
{
    /**
     * Show avatar update form
     *
     */

    public function edit()
    {
        return view('avatar');
    }


    /**
     * Update user avatar
     *
     */

    public function update(Request $request)
    {
    	$validator = Validator::make($request->all(), [
                'avatar' => 'required | mimes:jpeg,jpg,png,gif | max:1000',
                ]);

        if ($validator->fails())
        {
            return redirect('/avatar/edit')
            ->withErrors($validator)
            ->withInput();
        }

        try
        {
        	if(!is_null($request->file('avatar')))
	        {
	            $avatar = $request->file('avatar');
	            $file_name = Auth::user()->id.".".$avatar->getClientOriginalExtension();
	            $file_path = 'images/avatars';
	            $avatar->move($file_path, $file_name);
	        }

	        $user = User::find(Auth::user()->id);
	        $user->avatar = $file_name;
	        $user->save();

	        Session::flash('success_message', 'Your avatar has been changed.');
	            return redirect()->back();
	        }

        catch(\Exception $e)
        {
        	Session::flash('info_message', 'Error ocuured in updating avatar. Please try again.');
             return redirect()->back();
        }       

        
    }
}
