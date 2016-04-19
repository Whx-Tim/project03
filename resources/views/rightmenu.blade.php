<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-wifi"></i>公告</div>
    <div class="panel-body">巴拉巴拉巴拉巴拉巴拉巴拉</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">优秀合作社</div>
    <div class="panel-body">
        <ul class="list-unstyled">
            @foreach($excellentUsers as $user)
                <li><a href="#">{{ $user->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">合作社信息</div>
    <div class="panel-body">
        <ul class="list-unstyled">
            @foreach($users as $user)
            <li><a href="#">{{ $user->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
