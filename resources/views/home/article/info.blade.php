@extends('home/layout')

@section('body')
    {{--@include('home/public/nav')--}}
    <div class="layui-container" style="width:60%;margin-top: 10px">
        <div class="layui-row  layui-col-space15">
            <div class="layui-col-xs4 layui-col-sm5 layui-col-md8">
                <blockquote class="layui-elem-quote">杜甫详情 -先实现功能 -</blockquote>
                <div class="layui-collapse" style="margin-top: 10px">
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title"><a href="#" target="_blank">{{ $info->title }}</a></h2>
                        <div class="layui-colla-content layui-show">{{ $info->text }}</div>
                    </div>
                </div>
            </div>

            @include('home/public/side_bar')
        </div>
    </div>
    @include('home/public/foot')
@endsection

<script type="text/javascript" src="{{ asset('home/js/index/nav_carousel.js') }}"></script>