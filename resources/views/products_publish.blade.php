@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        发布农产品信息
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/publish') }}" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">标题</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="请输入您的标题">
                                </div>
                            </div>l
                            <div class="form-group">
                                <label for="contact" class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="contact" id="contact" placeholder="请输入联系人">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">手机号码</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">联系电话</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">联系邮箱</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">QQ</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">上市时间</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">联系地址</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">淘宝店铺</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">产品类别</label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">最新报价</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">产品详情</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group"><label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-6"><input type="text" class="form-control"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection