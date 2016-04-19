<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>掌上荔园</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="http://fonts.useso.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                掌上荔园
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">首页</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人主页 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#BindingEmail">绑定邮箱</a></li>
                        <li><a href="#BindingPhone">绑定手机</a></li>
                        <li><a href="#ModifyPassword">修改密码</a></li>
                        <li><a href="#ModifyInfo">修改个人信息</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#Banjiya" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">万事屋 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#Course">课程交换</a></li>
                        <li><a href="#Sell">二手交易</a></li>
                        <li><a href="#PartTime">兼职发布</a></li>
                        <li><a href="#Transport">快递帮取</a></li>
                    </ul>
                </li>
                <li><a href="#Post">操场</a></li>
                <li><a href="#Weather">天气预报</a></li>
                <li class="dropdown">
                    <a href="#Lost" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">失物招领 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#Found">拾金不昧</a></li>
                        <li><a href="#Find">查找宝贝</a></li>
                        <li><a href="#Release">发布遗失宝贝信息</a></li>
                    </ul>
                </li>
                <li><a href="#Suggest">意见反馈</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">登录</a></li>
                    <li><a href="{{ url('/register') }}">注册</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>登出</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

        <!-- JavaScripts -->
<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
