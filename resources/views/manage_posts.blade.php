<html>
<head>
	<title>Mange Posts</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Montserrat:700" rel="stylesheet">
</head>
<body>
<div style="min-width: 1050px; margin: 0 auto;">
	<div class="container-content">
        welcome back{{\Illuminate\Support\Facades\Auth::user()->name}}
        &nbsp;&nbsp; <a href='/dashboard'>Return to Dashboard</a><br>
        <h1 id="title">Posts</h1>
		@foreach($contents as $content)
            <div class="display-content">
                <div class="display-content2">
                    <h2>{{$content['post']['title']}}</h2>
                    <form action="/managePosts" method="POST">
                        @csrf
                        <input type="hidden" name="pid" value="{{$content['post']->id}}">
                        <input type="submit" value="Remove" id="logout2" name="removePost">
                    </form> </br>
                    {{$content['post']['content']}}</br></br></br>
                    @foreach($content['comments'] as $comment)
                        <div class="display-comment">
                            <form action="/managePosts" method="POST">
                                @csrf
                                <input type="hidden" name="cid" value="{{$comment->id}}">
                                <input type="submit" value="Remove" id="logout2" name="removeComment">
                            </form>
                                {{$comment->content}}
                        </div></br>
                    @endforeach
                    <form action="/managePosts" method="POST" >
                        @csrf
                        <textarea id="content-text" name="comment_text" rows="10" placeholder="your comment"></textarea><br><br>
                        <input type="hidden" name="pid" value="{{$content['post']->id}}">
                        <input type="submit" name="sendComment" value="send comment">
                        </form>
                </div>
            </div>
            </br>
        @endforeach
	</div>
</div>

</body>
</html>