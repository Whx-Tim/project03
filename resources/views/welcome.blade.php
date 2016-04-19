@extends('layouts.app')

@section('title','首页')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body" >
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox" style="width:818px;height:360px;">
                            <div class="item active">
                                <img src="http://www.mikenong.com/images/banner2.jpg" alt="First slide">
                            </div>
                            <div class="item">
                                <img src="http://www.mikenong.com/images/banner3.jpg" alt="Second slide">
                            </div>
                            <div class="item">
                                <img src="http://www.mikenong.com/images/banner4.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">产业新闻 <a href="#" class="pull-right">更多...</a></div>
                    <ul class="list-group">
                        @foreach( $news as $new)
                        <li class="list-group-item"><a href="{{ url('newsdetail/'.$new->id) }}">{{ $new->title }}</a></li>
                        @endforeach
                    </ul>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">农产品供求信息</div>
                <ul class="list-group">
                    @foreach($products as $product)
                    <li class="list-group-item"><a href="{{ url('productDetail/'.$product->id) }}">{{ $product->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ url('/publish') }}" class="btn btn-success btn-block"><i class="fa fa-align-justify"></i>发布信息</a>
                    <a href="#publish-price" class="btn btn-primary btn-block"><i class="fa fa-list"></i>农产品报价</a>
                </div>
            </div>
            @include('rightmenu')
        </div>
    </div>
</div>

@endsection
