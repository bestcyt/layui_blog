<ul class="layui-timeline">
    @if(isset($time))
        @foreach($time as $item)
        <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis"></i>
            <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title">{{ date('Y-m-d',$item->create_time) }}</h3>
                <p>
                    {{ $item->title }}
                    <br>{{ $item->desc }}。
                    <br>{{ $item->content }} <i class="layui-icon"></i>
                </p>
            </div>
        </li>
        @endforeach

        @else
        <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis"></i>
            <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title">暂时无时间线</div>
            </div>
        </li>
    @endif

</ul>