<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Abridge Corp, Japanese IT Company Assignment</title>
    <link href="{{asset('css/stylesheet.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body>
    <div id="wrap">
        <div id="page-header">
            <div class="headerbar" role="banner">
                <div class="inner">
                    <div id="site-description">
                        <h1>Abridge Corp, Japanese IT Company Assignment </h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="page-body" role="main">
             <form id="login" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                <div class="panel">
                    <div class="inner">
                        <div class="content">
                            <h2 class="login-title">Register</h2>
                            <fieldset class="fields1">
                                <dl>
                                    <dd>
                                        <input id="name" type="text" class="inputbox autowidth" name="name" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span>{{ $errors->first('name') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <input id="email" type="email" class="inputbox autowidth" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span>{{ $errors->first('email') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <input id="password" type="password" class="inputbox autowidth" name="password" placeholder="Password" value="{{ old('email') }}">
                                        @if ($errors->has('password'))
                                            <span>{{ $errors->first('password') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <input id="password_confirmation" type="password" class="inputbox autowidth" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                                        @if ($errors->has('password_confirmation'))
                                            <span>{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                
                                <dl>
                                    <dd>
                                        <input type="submit" value="Register" class="button1" />
                                    </dd>
                                    </dd>
                                </dl>
                            </fieldset>
                            <p>Already have a user account? <a href="{{url('login')}}">Click here</a> to login or go <a href="{{url('/')}}">home</a>.</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</body>

</html>

