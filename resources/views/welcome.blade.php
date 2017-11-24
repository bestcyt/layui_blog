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


{{--分页--}}
<div class="row">
    <div class="col-xs4 col-sm5 col-md8 col-lg8">
        <div align="center">
        @foreach ($list as $user)
        {{ $user->name }}
        @endforeach
        {{ $list->links() }}
        </div>
    </div>
</div>


</div>
{{--底部foot信息--}}
@include('home/public/foot')


@endsection