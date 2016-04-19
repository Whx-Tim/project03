@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <h1>{{ $informations->title }}</h1><br>
                            <h6>发布时间：{{ $informations->created_at }}</h6>
                        </div>
                        <p>
                            公告详情：{{ $informations->content }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @include('rightmenu')
            </div>
        </div>
    </div>
@endsectionroutes