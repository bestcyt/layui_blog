
<table class="layui-table">
    <colgroup>
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>id</th>
        <th>标题</th>
        <th>简介</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->desc }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
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