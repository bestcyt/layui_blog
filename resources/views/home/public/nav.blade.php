<div class="row">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Layui-Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#"></a></li>
                    <li  class="active"><a href="#">首页</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">一级目录</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">一级目录<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">下拉目录</a></li>
                            <li><a href="#">下拉目录</a></li>
                            <li><a href="#">下拉目录</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="#">一级目录</a></li>

                    <li class="dropdown" style="margin-left: 20px">
                        @inject('Session', 'Illuminate\Support\Facades\Session')
                        @if($Session::has('username'))
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $Session::get('username') }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">用户下拉</a></li>
                                <li><a href="#">用户下拉</a></li>
                                <li><a href="#">用户下拉</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        @else
                            <button class="layui-btn-small  layui-btn-radius layui-btn-primary" style="margin-top: 10px">登录</button>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>



