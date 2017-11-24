<form class="layui-form" action="{{ url('admin/article/post') }}" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block">
            <input name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">标签</label>
        <div class="layui-input-block">
            @foreach($tags  as $item)
            <input type="checkbox" name="type[{{ $item->id }}]" title="{{ $item->tag }}">
            @endforeach
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
            <textarea class="layui-textarea layui-hide" name="text" lay-verify="content" id="LAY_demo_editor"></textarea>
        </div>
    </div>

    <div class="layui-form-item" align="center">
        <button type="submit" class="layui-btn">提交</button>
    </div>
</form>


<script>
    layui.use('layedit', function(){
        var layedit = layui.layedit;
        layedit.set({
            uploadImage: {
                url: '{{ url('admin/article/post') }}' //接口url
                ,type: 'post' //默认post
            }
        });
        layedit.build('LAY_demo_editor'); //建立编辑器
    });
</script>