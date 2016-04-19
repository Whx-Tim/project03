@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        报价列表
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <th>日期</th>
                                <th>种类</th>
                                <th>农产品名称</th>
                                <th>最低价格</th>
                                <th>最高价格</th>
                                <th>平均价格</th>
                                <th>计量单位</th>
                            </thead>
                            <tbody>
                                @foreach($prices as $price)
                                    <tr>
                                        <td>{{ $price->updated_at }}</td>
                                        <td>{{ $price->type }}</td>
                                        <td>{{ $price->name }}</td>
                                        <td>{{ $price->price }}</td>
                                        <td>{{ $price->max_price }}</td>
                                        <td>{{ $price->avg_price }}</td>
                                        <td>{{ $price->unit }}</td>
                                    </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection