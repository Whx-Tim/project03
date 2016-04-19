    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header" style="height:70px;">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" style="color:red;font-weight: bold;font-size: 30px;">
                    米科农
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">米东特色</a></li>
                    <li><a href="#shucai">蔬菜</a></li>
                    <li><a href="#shuiguo">水果</a></li>
                    <li><a href="#liangyou">粮油</a></li>
                    <li><a href="#yangzhi">畜牧养殖</a></li>
                    <li><a href="{{ url('/cooperatives') }}">合作社</a></li>
                    <li><a href="{{ url('/pricing') }}">农产品报价</a></li>
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
                <form action="#serach" class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="农产品信息">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </nav>