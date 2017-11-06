@if ($paginator->hasPages())
    <div id="page">
        <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-1">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="layui-laypage-prev" data-page="{{ $paginator->currentPage() -1 }}">上一页</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>{{ $page }}</em></span>
                        @else
                            <a href="{{ $url }}" data-page="{{ $page }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="layui-laypage-next" data-page="{{ $page }}">下一页</a>
            @else
                <a href="javascript:;" class="layui-laypage-next layui-disabled" data-page="{{ $page }}">下一页</a>
            @endif
            <span class="layui-laypage-count">共 {{ $paginator->total() }} 条</span>
            {{--<span class="layui-laypage-skip">到第--}}
             {{--<input type="text" min="1" name="page" value="1" class="layui-input" id="inputpage">页--}}
             {{--<a class="layui-laypage-btn" onclick="set_pageurl()" href = "javascript:;" >确定</a>--}}
            {{--</span>--}}
        </div>
    </div>
    <script type="text/javascript">
        function set_pageurl(){
            var jump_page = document.getElementById('inputpage').value;
            var search = window.location.search
            if (search.length > 0){
                if (search.indexOf('page') > -1){
                    jump_url = search.replace(/page=\d/,'page=' + jump_page)
                } else {
                    jump_url = search + '&page=' + jump_page;
                }
            } else {
                jump_url = '?page='+ jump_page;
            }
            window.location.href = jump_url
        }
    </script>
@endif