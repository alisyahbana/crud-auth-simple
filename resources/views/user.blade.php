@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My Profile</div>

                <div class="panel-body">
                    Name : {{ $user->name }}<br>
                    Email : {{ $user->email }}<br>
                    Joined On : {{ $user->created_at->format('M d,Y \a\t h:i a') }}<br>
                    <a href="{{ url('/edit-user') }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
