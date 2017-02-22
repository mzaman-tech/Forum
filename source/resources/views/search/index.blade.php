@extends('layouts.app') @section('content')

    <div class="panel">
        <div class="inner">
            <div class="content">
                <h2 class="login-title">Search</h2>
                <fieldset class="fields1">
                    <dl>
                        <dd>
                            <input type="text" name="keyword" id="keyword" autocomplete="off" placeholder="Keyword" required>
                        </dd>
                    </dl>
                    <dl>
                        <dd>
                            <input type="submit" value="Serch" class="button1" />
                        </dd>
                        </dd>
                    </dl>
                </fieldset>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(".button1").click(function(){
            var keyword = $("#keyword").val();
            if(keyword != ''){
               window.location.href = "{{url('/search')}}"+"/"+keyword; 
           }            
        });
    </script>

@endsection