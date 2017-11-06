@extends('home/layout')

@section('body')

    <div class="layui-container " style="width:60%;margin-top: 20px">
        <fieldset class="layui-elem-field layui-field-title " style=" margin-top: 30px;color: black">
            <legend>blog 后台 登录</legend>
        </fieldset>
        <div class="layui-row layui-col-space10" style="margin-top: 260px">

            <div class="layui-col-xs4 layui-col-sm5 layui-col-md3">
            </div>

            <div class="layui-col-xs4 layui-col-sm5 layui-col-md6">
                <div class="layui-collapse" lay-accordion>
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">杜甫登录哦</h2>
                        <div class="layui-colla-content layui-show">

                            <form class="layui-form" action="{{ url('admin/login') }}" method="post">
                                {{ csrf_field() }}

                                <div class="layui-form-item">
                                    <label class="layui-form-label">用户名</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="username" id="username" lay-verify="title" autocomplete="off" placeholder="User" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">密码</label>
                                    <div class="layui-input-block">
                                        <input type="password" name="password" id="password" lay-verify="required" placeholder="Password" autocomplete="off" class="layui-input">
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <div class="layui-inline">
                                        <label class="layui-form-label">验证码</label>
                                        <div class="layui-input-inline">
                                            <input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input">
                                        </div>
                                        <div class="layui-input-inline">
                                            <input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input" value="imag">
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="layui-form-item">
                                    <div align="center">
                                        {{--<input type="button" class="layui-btn"  id="login" style="width: 80px" value="denglu" />--}}
                                        <button  class="layui-btn"  id="login" style="width: 80px">登录</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs4 layui-col-sm5 layui-col-md3">
            </div>
        </div>

    </div>

    <script>
        $(function () {
            $('#login').click(function () {
                if (!$('#username').val()){
                    alert('fail');
                    return false;
                }
            });
        })
    </script>>



@endsection