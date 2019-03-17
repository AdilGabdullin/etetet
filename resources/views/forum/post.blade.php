@extends('layouts.app')

@section('content')
    <div id="subSide1">
        <h2>{{ $post->header }}</h2>
        {{ $post->content }}
        <h2>Comments</h2>
        @foreach($post->comments as $comment)
            <div>
                <p>Created at:{{$comment->created_at}}</p>
                <p>Author:{{$comment->user->name}}</p>
                {!! $comment->content !!}
                <hr>
            </div>
        @endforeach
        <form action="{{route('comment')}}" method="post">
            {{ csrf_field() }}
            <textarea name="content" id="comment-ckeditor" cols="30" rows="10"></textarea>
            <input type="text" name="post_id" value="{{$post->id}}" hidden>
            <input type="submit">
        </form>
        <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace('comment-ckeditor');
        </script>

    </div>
    <div id="subSide2">
        <div class="credit" style="background:#FFFBF5 none no-repeat scroll 0 0;">
            @foreach($recentPosts as $rp)
                <span style="font-size: 70%; line-height: 116%;"><span style="color: #c0c0c0">_______________________________________________</span><br/><span
                            style="color: #730B06"><span
                                style="font-weight: bold">{{ $rp->header }}</span></span> <span
                            style="color: #c0c0c0">_______________________________________________</span><br/><br/><div
                            style="padding-right:170px;"><img
                                src="{{ asset($rp->thumbnail) }}"
                                alt="Image"/></div><br/>{{ $rp->description }}</span><br/>
                <div style="padding-left:210px;"><span style="font-size: 70%; line-height: 116%;"><a
                                href="{{ route('post', [$rp->id] ) }}" class="postlink">more...</a></span></div>
                <br/>
            @endforeach
        </div>
        <style>
            .forumcat {
                color: #28241F;
            }

            .forumlist {
                background-color: #FFFAF5;
            }

            .forumlist li a: {
                COLOR: #28241F;
            }

            .forumlist li a:link {
                COLOR: #28241F;
            }

            .forumlist li a:visited {
                COLOR: #28241F;
            }

            .forumlist li a:hover {
                COLOR: white;
                text-decoration: none;
                BACKGROUND-COLOR: #28241F;
            }

            .forumlist li a:active {
                COLOR: #28241F;
            }
        </style>
    </div>
@endsection
