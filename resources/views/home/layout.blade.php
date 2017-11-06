<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>cyt-blog</title>
    <!-- layui.css -->
    <link rel="stylesheet" href="{{ asset('ui/layui/css/layui.css') }}" media="all">
    {{--<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" media="all">--}}
    <script src="{{ asset('js/jquery.js') }}"></script>
    {{--<script src="{{ asset('js/bootstrap.js') }}"></script>--}}
    <script src="{{ asset('ui/layui/layui.js') }}" charset="utf-8"></script>
    @yield('head')
</head>
<body style="background: #f7ffec">
<script src="{{ url('js/canvas-nest.js') }}"></script>
@yield('body')

</body>



@yield('script')

</html>