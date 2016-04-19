@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="page-header">
                        <h1>米东特色</h1>
                    </div>
                    <p>米东区隶属于新疆自治区乌鲁木齐市。2007年8月经国务院批准。



                        由昌吉回族自治州原米泉市和原乌鲁木齐市东山区合并成立。



                        全区总面积3407.42平方千米，辖5镇2乡，6个街道，81个行政村，48个社区，区内常住人口333676人（2010年）。



                        2013年，全年实现地区生产总值260.6亿元，较2011年增长15.8%；

                        地方财政一般预算收入完成30.4亿元，较2011年增长21%。</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            @include('rightmenu')
        </div>
    </div>
</div>
@endsection
