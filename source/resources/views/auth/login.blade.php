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
             <form id="login" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                <div class="panel">
                    <div class="inner">
                        <div class="content">
                            <h2 class="login-title">Login</h2>
                            <fieldset class="fields1">
                                <dl>
                                    <dd>
                                        <input type="email" class="inputbox autowidth" placeholder="Email" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span>{{ $errors->first('email') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <input type="password" class="inputbox autowidth" name="password" autocomplete="off" placeholder="Password">

                                        @if ($errors->has('password'))
                                            <span>{{ $errors->first('password') }}</span>
                                        @endif
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <input type="submit" name="login" tabindex="6" value="Login" class="button1" />
                                    </dd>
                                    </dd>
                                </dl>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</body>

</html>
