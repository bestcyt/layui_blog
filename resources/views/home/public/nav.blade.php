<div class="layui-container" style="width:60%;">

    <div class="layui-row">
        <div class="layui-col-md12" style="color: #00A000">
            <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item">blog</li>
                <li class="layui-nav-item layui-this"><a href="{{ url('/') }}">首页</a></li>
                <li class="layui-nav-item"><a href="{{ url('tag/1') }}">tag1</a></li>
                <li class="layui-nav-item"><a href="{{ url('tag/2') }}">tag2</a></li>
                <li class="layui-nav-item"><a href="{{ url('tag/3') }}">tag3</a></li>
                <li class="layui-nav-item">
                    <a href="javascript:;">tag1</a>
                    <dl class="layui-nav-child"> <!-- 二级菜单 -->
                        <dd><a href="{{ url('tag/4') }}">tag4</a></dd>
                        <dd><a href="{{ url('tag/5') }}{{ url('tag/5') }}">tag1</a></dd>
                        <dd><a href="">电商平台</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">&nbsp;</a></li>
                <li class="layui-nav-item"><a href="{{ url('tag/6') }}">tag6</a></li>

                <li class="layui-nav-item">
                    @inject('Session', 'Illuminate\Support\Facades\Session')
                    @if($Session::has('username'))
                        <a href=""><img src="http://t.cn/RCzsdCq" class="layui-nav-img">{{ $Session::get('username') }}</a>
                        <dl class="layui-nav-child">
                            <dd><a href="{{ url('tag/7') }}">tag7</a></dd>
                            <dd><a href="{{ url('tag/8') }}">tag8</a></dd>
                            <dd><a href="{{ url('tag/9') }}">tag9</a></dd>
                        </dl>
                        @else
                        <button class="layui-btn-small  layui-btn-radius layui-btn-primary">登录</button>
                    @endif

                </li>
            </ul>
        </div>
    </div>
</div>

