@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        合作社
                    </div>
                    <ul class="list-group">
                        @foreach($users as $user)
                            <li class="list-group-item"><a href="{{ url('/cooperativeDetail/'.$user->id) }}">{{ $user->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                @include('rightmenu')
            </div>
        </div>
    </div>
@endsection