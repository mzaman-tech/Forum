@extends('layouts.app')

@section('content')
<div class="forabg">
                <div class="inner">
                    <ul class="topiclist">
                        <li class="header">
                            <dl class="icon">   <dt><div class="list-inner"><a href="./viewforum.php?style=1&amp;f=10">Examples</a></div></dt>
                                <dd class="topics">Topics</dd>
                                <dd class="posts">Posts</dd>
                                <dd class="lastpost"><span>Last post</span>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                    <ul class="topiclist forums">
                        <li class="row">
                            <dl class="icon forum_read">    <dt title="No unread posts">
                                        <div class="list-inner">
                                                <a href="./viewforum.php?style=1&amp;f=11" class="forumtitle">Forum with long description</a>
                        <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                               
                                                <div class="responsive-show" style="display: none;">
                                                            Topics: <strong>1</strong>
                                                    </div>
                                            </div>
                </dt>
                                <dd class="topics">1 <dfn>Topics</dfn>
                                </dd>
                                <dd class="posts">2 <dfn>Posts</dfn>
                                </dd>
                                <dd class="lastpost"><span>
                                                <dfn>Last post</dfn>
                                                                                <a href="./viewtopic.php?style=1&amp;f=11&amp;p=77#p77" title="Re: Good topic" class="lastsubject">Re: Good topic</a> <br />
                         
                        by <a href="./memberlist.php?style=1&amp;mode=viewprofile&amp;u=56" class="username">Kamziu</a>
                        <a href="./viewtopic.php?style=1&amp;f=11&amp;p=77#p77"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span>
                                    </a>
                                    <br />07 Dec 2015, 21:06</span>
                                </dd>
                            </dl>
                        </li>
                        <li class="row">
                            <dl class="icon forum_read_subforum">   <dt title="No unread posts">
                                        <div class="list-inner">
                                                <a href="./viewforum.php?style=1&amp;f=12" class="forumtitle">Forum with long description and subforums</a>
                        <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                                                                       <br /><strong>Subforums:</strong>
                                                            <a href="./viewforum.php?style=1&amp;f=13" class="subforum read" title="No unread posts">First subforum</a>,                                                            <a href="./viewforum.php?style=1&amp;f=14" class="subforum read" title="No unread posts">Second subforum</a>                                                                                
                                                <div class="responsive-show" style="display: none;">
                                                            Topics: <strong>1</strong>
                                                    </div>
                                            </div>
                </dt>
                                <dd class="topics">1 <dfn>Topics</dfn>
                                </dd>
                                <dd class="posts">2 <dfn>Posts</dfn>
                                </dd>
                                <dd class="lastpost"><span>
                                                <dfn>Last post</dfn>
                                                                                <a href="./viewtopic.php?style=1&amp;f=12&amp;p=73#p73" title="Re: Another example" class="lastsubject">Re: Another example</a> <br />
                         
                        by <a href="./memberlist.php?style=1&amp;mode=viewprofile&amp;u=54" class="username">Famziu</a>
                        <a href="./viewtopic.php?style=1&amp;f=12&amp;p=73#p73"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span>
                                    </a>
                                    <br />07 Dec 2015, 20:42</span>
                                </dd>
                            </dl>
                        </li>
                        <li class="row">
                            <dl class="icon forum_read_locked"> <dt title="Forum locked">
                                        <div class="list-inner">
                        <!-- <a class="feed-icon-forum" title="Feed - Locked forum with short description" href="http://gramziu.pl/phpBB/feed.php?f=16"><img src="./styles/prosilver/theme/images/feed.gif" alt="Feed - Locked forum with short description" /></a> -->
                                                <a href="./viewforum.php?style=1&amp;f=16" class="forumtitle">Locked forum with short description</a>
                        <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.                                               
                                                <div class="responsive-show" style="display: none;">
                                                            Topics: <strong>1</strong>
                                                    </div>
                                            </div>
                </dt>
                                <dd class="topics">1 <dfn>Topics</dfn>
                                </dd>
                                <dd class="posts">2 <dfn>Posts</dfn>
                                </dd>
                                <dd class="lastpost"><span>
                                                <dfn>Last post</dfn>
                                                                                <a href="./viewtopic.php?style=1&amp;f=16&amp;p=75#p75" title="Re: Next lorem ipsum text" class="lastsubject">Re: Next lorem ipsum text</a> <br />
                         
                        by <a href="./memberlist.php?style=1&amp;mode=viewprofile&amp;u=50" style="color: #00AA00;" class="username-coloured">Ramziu</a>
                        <a href="./viewtopic.php?style=1&amp;f=16&amp;p=75#p75"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span>
                                    </a>
                                    <br />07 Dec 2015, 20:55</span>
                                </dd>
                            </dl>
                        </li>
                        <li class="row">
                            <dl class="icon forum_read_locked"> <dt title="Forum locked">
                                        <div class="list-inner">
                        <!-- <a class="feed-icon-forum" title="Feed - Locked forum with short description and moderator" href="http://gramziu.pl/phpBB/feed.php?f=17"><img src="./styles/prosilver/theme/images/feed.gif" alt="Feed - Locked forum with short description and moderator" /></a> -->
                                                <a href="./viewforum.php?style=1&amp;f=17" class="forumtitle">Locked forum with short description and moderator</a>
                        <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.                                                   <br /><strong>Moderator:</strong> <a href="./memberlist.php?style=1&amp;mode=viewprofile&amp;u=2" style="color: #AA0000;" class="username-coloured">Gramziu</a>
                                                
                                                <div class="responsive-show" style="display: none;">
                                                            Topics: <strong>1</strong>
                                                    </div>
                                            </div>
                </dt>
                                <dd class="topics">1 <dfn>Topics</dfn>
                                </dd>
                                <dd class="posts">2 <dfn>Posts</dfn>
                                </dd>
                                <dd class="lastpost"><span>
                                                <dfn>Last post</dfn>
                                                                                <a href="./viewtopic.php?style=1&amp;f=17&amp;p=76#p76" title="Re: Hello!" class="lastsubject">Re: Hello!</a> <br />
                         
                        by <a href="./memberlist.php?style=1&amp;mode=viewprofile&amp;u=55" style="color: #00AA00;" class="username-coloured">Tramziu</a>
                        <a href="./viewtopic.php?style=1&amp;f=17&amp;p=76#p76"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span>
                                    </a>
                                    <br />07 Dec 2015, 21:01</span>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
@endsection
