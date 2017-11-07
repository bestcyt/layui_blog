<div class="layui-container" style="width:60%;">

    <div class="layui-row">
        {{--这里的导航栏是直接扒官网导航栏的样式，6的飞起--}}
        <div class="layui-header header header-doc">
            <div class="layui-main">
                <a class="logo" href="#" style="color: white">
                    <strong>标题</strong>
                </a>
                <div class="layui-form component">
                    <select lay-search lay-filter="component">
                        <option value="">搜索组件或模块</option>
                        <option value="element/layout.html">grid 栅格布局</option>
                        <option value="element/layout.html#admin">admin 后台布局</option>
                        <option value="element/color.html">color 颜色</option>
                        <option value="element/icon.html">iconfont 字体图标</option>
                        <option value="element/anim.html">animation 动画</option>
                        <option value="element/button.html">button 按钮</option>
                        <option value="element/form.html">form 表单组</option>
                        <option value="element/form.html#input">input 输入框</option>
                        <option value="element/form.html#select">select 下拉选择框</option>
                        <option value="element/form.html#checkbox">checkbox 复选框</option>
                        <option value="element/form.html#switch">switch 开关</option>
                        <option value="element/form.html#radio">radio 单选框</option>
                        <option value="element/form.html#textarea">textarea 文本域</option>
                        <option value="element/nav.html">nav 导航菜单</option>
                        <option value="element/nav.html#breadcrumb">breadcrumb 面包屑</option>
                        <option value="element/tab.html">tabs 选项卡</option>
                        <option value="element/progress.html">progress 进度条</option>
                        <option value="element/collapse.html">collapse 折叠面板/手风琴</option>
                        <option value="element/table.html">table 表格元素</option>
                        <option value="element/badge.html">badge 徽章</option>
                        <option value="element/timeline.html">timeline 时间线</option>
                        <option value="element/auxiliar.html#blockquote">blockquote 引用块</option>
                        <option value="element/auxiliar.html#fieldset">fieldset 字段集</option>
                        <option value="element/auxiliar.html#hr">hr 分割线</option>

                        <option value="modules/layer.html">layer 弹出层/弹窗综合</option>
                        <option value="modules/laydate.html">laydate 日期时间选择器</option>
                        <option value="modules/layim.html">layim 即时通讯/聊天</option>
                        <option value="modules/laypage.html">laypage 分页</option>
                        <option value="modules/laytpl.html">laytpl 模板引擎</option>
                        <option value="modules/form.html">form 表单模块</option>
                        <option value="modules/table.html">table 数据表格</option>
                        <option value="modules/upload.html">upload 文件/图片上传</option>
                        <option value="modules/element.html">element 常用元素操作</option>
                        <option value="modules/carousel.html">carousel 轮播/跑马灯</option>
                        <option value="modules/layedit.html">layedit 富文本编辑器</option>
                        <option value="modules/tree.html">tree 树形菜单</option>
                        <option value="modules/flow.html">flow 信息流/图片懒加载</option>
                        <option value="modules/util.html">util 工具集</option>
                        <option value="modules/code.html">code 代码修饰</option>
                    </select>
                </div>
                <ul class="layui-nav" pc>
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
                    <li class="layui-nav-item"><a href="{{ url('tag/6') }}">tag6</a></li>
                    <li class="layui-nav-item" mobile>
                        <a href="javascript:;">更多</a>
                        <dl class="layui-nav-child">
                            <dd><a href="http://fly.layui.com/" target="_blank">社区</a></dd>
                        </dl>
                    </li>
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
</div>

