@extends('layouts.app') @section('content')

@if(session('success_message'))
    <strong class="success_message">{{session('success_message')}} </strong>
@endif

@if(session('info_message'))
    <strong class="info_message">{{session('info_message')}} </strong>
@endif


<form id="login" method="POST" action="{{ url('/comment/update') }}">
                        {{ csrf_field() }}

            <input type="hidden" name="comment_id" value="{{$comment->id}}">
                <div class="panel">
                    <div class="inner">
                        <div class="content">
                            <h2 class="login-title">Comment</h2>
                            <fieldset class="fields1">
                                <dl>
                                    <dd>
                                        <textarea name="message" autocomplete="off" placeholder="Comment">{{$comment->message}}</textarea>

                                        @if ($errors->has('message'))
                                            <span>{{ $errors->first('message') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <input type="submit" value="Update" class="button1" />
                                    </dd>
                                    </dd>
                                </dl>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>

@endsection