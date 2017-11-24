@extends('home/layout')


<div class="row" style="margin-top: 20px">
    {{--文章列表--}}
    <div class="col-md8 col-lg-8">

        @foreach($list as $item)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="{{ url('info').'/'.$item->id }}" target="_blank">{{ $item->title }}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ url('info').'/'.$item->id }}" target="_blank" style="font-size: 10px">tag--{{ $item->tag }}</a>

                    </h3>
                </div>
                <div class="panel-body">
                    {{ $item->text }}
                </div>
                <div class="panel-footer" style="font-size: 10px;.panel-footer{height: 10px}">时间-作者-等等 </div>
            </div>
        @endforeach
    </div>
{{--侧边区域--}}
@include('home/left')
</div>