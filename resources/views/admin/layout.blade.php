<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>cyt-blog</title>
    <!-- layui.css -->

    <link rel="stylesheet" href="{{ asset('ui/layui/css/layui.css') }}" media="all">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="https://cdn.bootcss.com/jquery.pjax/2.0.0/jquery.pjax.js"></script>
    <script src="{{ asset('ui/layui/layui.js') }}" charset="utf-8"></script>
    @yield('head')
</head>

<body style="background: #f7ffec">

<script src="{{ url('js/canvas-nest.js') }}"></script>


<div class="layui-container " style="width:80%;margin-top: 10px">
    <fieldset class="layui-elem-field layui-field-title " style=" margin-top: 30px;color: black">
        <legend>blog 后台</legend>
    </fieldset>
    <div class="layui-row layui-col-space10">
        <div class="layui-col-xs4 layui-col-sm5 layui-col-md2">
            <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="demo" style="width: 100%">
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;">文章模块</a>
                    <dl class="layui-nav-child">
                        <dd><a href="{{ url('admin/article/list') }}">文章列表</a></dd>
                        <dd><a href="{{ url('admin/article/add') }}">添加文章</a></dd>
                        <dd><a href="{{ url('admin/pjax') }}">跳转项</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">标签设置</a>
                    <dl class="layui-nav-child">
                        <dd><a href="{{ url('admin/pjax') }}">移动模块</a></dd>
                        <dd><a href="{{ url('admin/pjax') }}">后台模版</a></dd>
                        <dd><a href="{{ url('admin/pjax') }}">电商平台</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="{{ url('admin/time/add') }}">时间线</a></li>
                <li class="layui-nav-item"><a href="{{ url('admin/pjax') }}">测试pjax测试pjax</a></li>
            </ul>
        </div>
        <div class="layui-col-xs4 layui-col-sm5 layui-col-md8" id="frame">
            @yield('body')
        </div>
        <div class="layui-col-xs4 layui-col-sm5 layui-col-md2">
            @yield('left')
        </div>
    </div>

</div>



<script>
    $(function () {

        $(document).pjax('a', '#frame');

        //注意：导航 依赖 element 模块，否则无法进行功能性操作
        layui.use('element', function(){
            var element = layui.element;
            //…
        });
    })
</script>
</body>


@yield('script')

</html>