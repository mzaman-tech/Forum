@extends('layouts.app') @section('content')

<div class="forabg">
    <div class="inner">
        <ul class="topiclist">
            <li class="header">
                <dl class="icon"> <dt><div class="list-inner"><a href="#">Search Result </a></div></dt>
                    </dd>
                </dl>
            </li>
        </ul>
        <ul class="topiclist forums">
            @foreach($threads as $thread)
                <li class="row">
                    <dl class="icon forum_read"> 
                        <dt title="No unread posts">
                            <div class="list-inner">
                                <a href="{{url('thread/'.$thread->id.'/detail')}}" class="forumtitle">{{$thread->title}}</a>
                            <br />{{$thread->summary}}

                            <div class="responsive-show">
                                <strong><a href="{{url('thread/'.$thread->id.'/detail')}}">Detail</a></strong>
                                @if(Auth::check() && Auth::user()->id == $thread->user_id)
                                | <strong><a href="{{url('thread/'.$thread->id.'/edit')}}">Edit</a></strong>
                                | <strong><a href="{{url('thread/'.$thread->id.'/delete')}}" onclick="return confirm('Are you sure?')">Delete</a></strong>
                                @endif
                            </div> 

                            </div>
                        </dt>
                        <dd class="lastpost"><span>
                                <a href="#">By: {{$thread->name}}</a><br />
                                Posted at: {{date("d M Y h:i:s", strtotime($thread->created_at))}}<br />
                                @if(!is_null($thread->updated_at))
                                    Last Updated: {{date("d M Y h:i:s", strtotime($thread->updated_at))}}</span>
                                @endif
                                
                        </dd>
                    </dl>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection