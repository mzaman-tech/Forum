@extends('layouts.app') @section('content')


 <form id="login" method="POST" action="{{ url('/avatar/update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                <div class="panel">
                    <div class="inner">
                        <div class="content">
                            <h2 class="login-title">Change Avatar</h2>
                            <fieldset class="fields1">
                                <dl>
                                    <dd>
                                        <input type="file" class="inputbox autowidth" name="avatar"  />
                                        @if ($errors->has('avatar'))
                                            <span>{{ $errors->first('avatar') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <input type="submit" value="Upload" class="button1" />
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