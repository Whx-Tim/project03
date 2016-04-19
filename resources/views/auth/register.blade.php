@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">类型</label>
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type1" value="合作社">合作社
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type2" value="个人用户">个人用户
                                </label>
                                @if($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">用户名</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">邮箱</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">密码</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">确认密码</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('truename') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">真实姓名</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="truename" value="{{ old('truename') }}" >

                                @if($errors->has('truename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('truename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sex') ? 'has-error' : '' }}">
                            <label class="col-md-4 control-label">性别</label>
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="sex1" value="1">男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="sex2" value="2">女
                                </label>
                                @if($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? 'has-phone' : '' }}">
                            <label class="col-md-4 control-label">联系电话</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" placeholder="请输入您的电话">
                                @if($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('QQnum') ? 'has-QQnum' : '' }}">
                            <label class="col-md-4 control-label">QQ</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="QQnum" id="QQnum" value="{{ old('QQnum') }}" placeholder="请输入您的QQ号码">

                                @if($errors->has('QQnum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('QQnum') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
