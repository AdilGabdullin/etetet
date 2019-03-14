@extends('layouts.app')

@section('content')
    <div id="subSide1">
        <img src="{{ asset($post->thumbnail) }}" alt="Image"/>
        {{ $post->content }}
        <div style="padding-left:560px;">
            <div style="padding-right:35px;">
                <img style="width: 40px;height: 40px;" src="{{ asset('img/etetet.jpg') }}" alt="Image">
            </div>
        </div>
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
