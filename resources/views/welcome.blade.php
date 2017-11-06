@extends('home/layout')

    <!-- header结束，body开始 -->
    @section('body')
        @include('home/public/nav')

        @include('home/public/carousel')

        <div class="layui-container" style="width:60%;margin-top: 10px">
            <div class="layui-row  layui-col-space15">
                <div class="layui-col-xs4 layui-col-sm5 layui-col-md8">
                    <blockquote class="layui-elem-quote">杜甫列表</blockquote>
                    @foreach($list as $item)
                    <div class="layui-collapse" style="margin-top: 10px">
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">
                                <a href="{{ url('info').'/'.$item->id }}" target="_blank">{{ $item->title }}
                                    tag : {{ $item->tag }}
                                </a>
                            </h2>
                            <div class="layui-colla-content layui-show">{{ $item->text }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="layui-col-xs4 layui-col-sm5 layui-col-md4">
                    <fieldset class="layui-elem-field">
                        <legend>简介</legend>
                        <div class="layui-field-box">
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                        </div>
                    </fieldset>
                    <fieldset class="layui-elem-field">
                        <legend>标签</legend>
                        <div class="layui-field-box">
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                        </div>
                    </fieldset>
                    <fieldset class="layui-elem-field">
                        <legend>推荐</legend>
                        <div class="layui-field-box">
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                        </div>
                    </fieldset>
                    <fieldset class="layui-elem-field">
                        <legend>友链接</legend>
                        <div class="layui-field-box">
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                            内容区域内容区域内容区域内容区域
                        </div>
                    </fieldset>
                    {{--<fieldset class="layui-elem-field layui-field-title">--}}
                        {{--<legend>字段集区块 - 横线风格</legend>--}}
                        {{--<div class="layui-field-box">--}}
                            {{--内容区域内容区域内容区域内容区域--}}
                            {{--内容区域内容区域内容区域内容区域--}}
                            {{--内容区域内容区域内容区域内容区域--}}
                            {{--内容区域内容区域内容区域内容区域--}}
                        {{--</div>--}}
                    {{--</fieldset>--}}
                </div>
            </div>
        </div>

        <div class="layui-container" style="width:60%;margin-top: 10px">
            <div class="layui-row">
                <div class="layui-col-xs4 layui-col-sm5 layui-col-md8">
                    <div align="center">
                        @foreach ($list as $user)
                            {{ $user->name }}
                        @endforeach
                        {{ $list->links() }}
                    </div>
                </div>
            </div>

        </div>

        @include('home/public/foot')
    @endsection

    <!-- body结束，script开始 -->
    @section('script')
            <script type="text/javascript" src="{{ asset('home/js/index/nav_carousel.js') }}"></script>
            <script>
                var count = {{ $count }};
                var limmit = {{ count($list) }};
                layui.use('laypage', function(){
                    var laypage = layui.laypage;

                    //执行一个laypage实例
                    laypage.render({
                        elem: 'test22' //注意，这里的 test1 是 ID，不用加 # 号
                        ,count: count //数据总数，从服务端得到
                        ,limit:limmit
                        ,limits :[10, 20, 30, 40, 5]
                        ,jump: function(obj, first){
                                //obj包含了当前分页的所有参数，比如：
//                                alert(obj.curr);
                            if (obj.curr == 1){

                            }else {
                                window.location.href = 'http://www.blog.cn/?page='+obj.curr;
                            }

                                console.log(obj); //得到当前页，以便向服务端请求对应页的数据。
//                                console.log(obj.limit); //得到每页显示的条数

                                //首次不执行
                                if(!first){
                                    //do something
                                }
                            }
                        });
                });
            </script>
    @endsection




