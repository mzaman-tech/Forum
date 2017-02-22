@extends('layouts.app') @section('content')


 <form id="login" method="POST" action="{{ url('/thread/update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <input type="hidden" name="thread_id" value="{{$thread->id}}">

                <div class="panel">
                    <div class="inner">
                        <div class="content">
                            <h2 class="login-title">Update Thread</h2>
                            <fieldset class="fields1">
                                <dl>
                                    <dd>
                                        <select name="topic" class="inputbox autowidth">
                                            <option value="">Select Topic</option>
                                            @foreach($topics as $topic)
                                            <option value="{{$topic->id}}" @if($topic->id == $thread->topic_id){{'selected'}}@endif>{{$topic->name}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('topic'))
                                            <span>{{ $errors->first('topic') }}</span>
                                        @endif
                                    </dd>
                                </dl>

                                <dl>
                                    <dd>
                                        <input type="text" class="inputbox autowidth" name="title" autocomplete="off" placeholder="Title" value="{{$thread->title}}">
                                        @if ($errors->has('title'))
                                            <span>{{ $errors->first('title') }}</span>
                                        @endif
                                    </dd>
                                </dl>

                                <dl>
                                    <dd>
                                        <input type="text" class="inputbox autowidth" name="summary" autocomplete="off" placeholder="Summary" value="{{$thread->summary}}">
                                        @if ($errors->has('summary'))
                                            <span>{{ $errors->first('summary') }}</span>
                                        @endif
                                    </dd>
                                </dl>

                                <dl>
                                    <dd>
                                        <textarea name="description" placeholder="Description" >{{$thread->description}}</textarea>
                                        @if ($errors->has('description'))
                                            <span>{{ $errors->first('description') }}</span>
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

@if(session('success_message'))
    <strong class="success_message">{{session('success_message')}} </strong>
@endif

@if(session('info_message'))
    <strong class="info_message">{{session('info_message')}} </strong>
@endif

@endsection