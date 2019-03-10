@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email_verified_at</th>
                <th>Role</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['email_verified_at'] }}</td>
                    <td>{{ $user['role']['name'] }}</td>
                </tr>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
@endsection