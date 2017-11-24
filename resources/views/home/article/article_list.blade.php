@extends('home/layout')


<div class="row" style="margin-top: 20px">
    {{--文章列表--}}
    <div class="col-md8 col-lg-8">

        @foreach($list as $item)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="{{ url('info').'/'.$item->id }}" target="_blank">{{ $item->title }}tag : {{ $item->tag }}
                        </a></h3>
                </div>
                <div class="panel-body">
                    {{ $item->text }}
                </div>
            </div>
        @endforeach
    </div>
{{--侧边区域--}}
@include('home/left')
</div>