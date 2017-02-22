@extends('layouts.app') @section('content')

<div class="forabg">
    <div class="inner">
        <ul class="topiclist">
            <li class="header">
                <dl class="icon"> <dt><div class="list-inner"><a href="javascript::void(0)">{{$thread->title}}</a></div></dt>
                    </dd>
                </dl>
            </li>
        </ul>
        <ul class="topiclist forums">           
                <li class="row">
                    <dl class="icon forum_read"> 
                        <dt title="No unread posts">
                            <div class="list-inner">
                            Posted at: {{date("d M Y h:i:s", strtotime($thread->created_at))}}
                            @if(!is_null($thread->updated_at))
                                    | Last Updated: {{date("d M Y h:i:s", strtotime($thread->updated_at))}}</span>
                                @endif
                            <br /><br />{{$thread->description}}<br />
                            @if(!empty($thread->image))
                                <img src="{{asset('images/threads/'.$thread->image)}}">
                            @endif
                            <br />

                            <div class="responsive-show">
                                @if(Auth::check() && Auth::user()->id == $thread->user_id)
                                <strong><a href="{{url('thread/'.$thread->id.'/edit')}}">Edit</a></strong>
                                | <strong><a href="{{url('thread/'.$thread->id.'/delete')}}" onclick="return confirm('Are you sure?')">Delete</a></strong>
                                @endif
                            </div> 

                            </div>
                        </dt>
                        <dd class="lastpost"><span>
                             <img src="{{asset('images/avatars/'.$thread->user->avatar)}}" width="75px"> <br />
                             By: {{$thread->user->name}}                           
                        </dd>
                    </dl>
                </li>            
        </ul>
    </div>
</div>


@if(session('success_message'))
    <strong class="success_message">{{session('success_message')}} </strong>
@endif

@if(session('info_message'))
    <strong class="info_message">{{session('info_message')}} </strong>
@endif


<form id="login" method="POST" action="{{ url('/comment/store') }}">
                        {{ csrf_field() }}

            <input type="hidden" name="thread_id" value="{{$thread_id}}">
                <div class="panel">
                    <div class="inner">
                        <div class="content">
                            <h2 class="login-title">Comment</h2>
                            <fieldset class="fields1">
                                <dl>
                                    <dd>
                                        <textarea name="message" autocomplete="off" placeholder="Comment"></textarea>

                                        @if ($errors->has('message'))
                                            <span>{{ $errors->first('message') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <input type="submit" value="Submit" class="button1" />
                                    </dd>
                                    </dd>
                                </dl>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>


<div class="forabg">
    <div class="inner">
        <ul class="topiclist">
            <li class="header">
                <dl class="icon"> <dt><div class="list-inner"><a href="#">Comments</a></div></dt>
                    </dd>
                </dl>
            </li>
        </ul>
        <ul class="topiclist forums">

                @if(!empty($comments[0]))

                @foreach($comments as $comment) 

                    <li class="row">
                    <dl class=""> 
                        <dt title="No unread posts">
                            <div class="list-inner">
                             Posted at: {{date("d M Y h:i:s", strtotime($comment->created_at))}}
                            @if(!is_null($comment->updated_at))
                                    | Last Updated: {{date("d M Y h:i:s", strtotime($comment->updated_at))}}</span>
                                @endif
                            <br />

                            <br />{{$comment->message}}<br />
                            <br />

                            <div class="responsive-show">
                                @if(Auth::check() && Auth::user()->id == $comment->user_id)
                                <strong><a href="{{url('comment/'.$comment->id.'/edit')}}">Edit</a></strong>
                                | <strong><a href="{{url('comment/'.$comment->id.'/delete')}}" onclick="return confirm('Are you sure?')">Delete</a></strong>
                                @endif
                            </div> 

                            </div>
                        </dt>
                        <dd class="lastpost"><span>
                                <img src="{{asset('images/avatars/'.$comment->avatar)}}" width="25px"> <br />
                             By: {{$comment->name}}
                                
                        </dd>
                    </dl>
                </li> 

                @endforeach 

                @else


                <li class="row" style="text-align: center">
                    <dl class=""> 
                        <dt title="No unread posts">
                            No Comments Available !
                        </dt>
                    </dl>
                </li> 

                @endif
        </ul>
    </div>
</div>


@endsection