@extends('layouts.app')

@section('content')
    <style>
        a:hover {
            text-decoration: underline;
        }

        a:visited, a:link {
            color: blue;
        }
    </style>
    <div class="container">
        @foreach($users as $user)
            <h2>{{ $user['name'] }}</h2>
            @foreach($user['files'] as $file)
                <ul>
                    <li><a href="{{ asset($file) }}">{{ $file }}</a></li>
                </ul>
            @endforeach
        @endforeach
    </div>
@endsection
