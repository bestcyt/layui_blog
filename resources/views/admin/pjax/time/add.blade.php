<form class="layui-form" action="{{ url('admin/time/post') }}" method="post">
    {{ csrf_field() }}
    <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block">
            <input name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">简介</label>
        <div class="layui-input-block">
            <input name="desc" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input" type="text">
        </div>
    </div>

    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">内容</label>
        <div class="layui-input-block">
            <textarea class="layui-textarea" name="content" lay-verify="content" id="LAY_demo_editor"></textarea>
        </div>
    </div>

    <div class="layui-form-item" align="center">
        <button type="submit" class="layui-btn">提交</button>
    </div>
</form>
