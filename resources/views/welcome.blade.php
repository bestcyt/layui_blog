@extends('home/layout')

<!-- header结束，body开始 -->
@section('body')
<div class="container">
{{--顶部导航--}}
@include('home/public/nav')

{{--轮播图--}}
@include('home/public/carousel')

{{--文章列表--}}
@include('home/article/article_list')


{{--<div class="layui-container" style="width:60%;margin-top: 10px">--}}
    {{--<div class="layui-row">--}}
        {{--<div class="layui-col-xs4 layui-col-sm5 layui-col-md8">--}}
            {{--<div align="center">--}}
                {{--@foreach ($list as $user)--}}
                {{--{{ $user->name }}--}}
                {{--@endforeach--}}
                {{--{{ $list->links() }}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}

{{--</div>--}}

@include('home/public/foot')
</div>
@endsection