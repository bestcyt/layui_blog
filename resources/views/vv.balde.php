
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>晴枫博客</title>
    <link rel="stylesheet" href="/static/common/layui/css/layui.css"  media="all">
    <link rel="stylesheet" href="/static/common/layui/css/layui.mobile.css"  media="all">
    <link rel="stylesheet" href="/static/blog/css/style.css?=1.0.0"  media="all">
</head>
<body>
<!--引入nav文件-->
<!--导航-->
<div class="qf_blog_header">
    <div class="layui-container">
        <div class="layui-row">
            <div class="layui-col-md2 qf_blog_nav_logo">
                <a href="/"><img  src="/static/blog/images/logo.png"></a>
            </div>
            <i class="layui-icon qf_blog_nav_more" style="display: none;">&#xe671;</i>
            <div class="layui-col-md7 qf_blog_nav">
                <ul class="layui-nav">
                    <li class="layui-nav-item"><a href="/">首页</a></li>

                    <li class="layui-nav-item">
                        <a href="javascript:;">编程</a>
                        <dl class="layui-nav-child">
                            <dd><a href="/typeid/24" style="text-align: center;">PHP</a></dd>
                            <dd><a href="/typeid/28" style="text-align: center;">Java</a></dd>
                            <dd><a href="/typeid/25" style="text-align: center;">数据库</a></dd>
                            <dd><a href="/typeid/27" style="text-align: center;">前端</a></dd>
                            <dd><a href="/typeid/30" style="text-align: center;">Linux</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">生活</a>
                        <dl class="layui-nav-child">
                            <dd><a href="/typeid/19" style="text-align: center;">随笔</a></dd>
                            <dd><a href="/typeid/18" style="text-align: center;">心情</a></dd>
                            <dd><a href="/typeid/20" style="text-align: center;">摄影</a></dd>
                        </dl>
                    </li>


                    <li class="layui-nav-item"><a href="/said.html">微语</a></li>
                    <li class="layui-nav-item"><a href="/message.html">留言</a></li>
                    <li class="layui-nav-item"><a href="/about.html">关于</a></li>
                </ul>
            </div>
            <div class="layui-col-md2 qf_blog_nav_right">
                <a onclick="layer.msg('正在登陆', {icon:16, shade: 0.1, time:0})"  href="/login.html"  class="login">登陆</a>
            </div>
            <div class="layui-col-md1 qf_blog_nav_search">
                搜索
            </div>
            <div class="qf_blog_nav_search_show layui-hide" >
                <form class="layui-form">
                    <input id="article_search" style="width: 240px; height: 36px;" type="text" name="search"     placeholder="请输入关键字" class="layui-input">
                </form>
            </div>
        </div>
    </div>
</div>



<div style="display: none;" id="bind_email_view">
    <div class="layui-field-box">
        <form method="post" class="layui-form" action="" >
            <div class="layui-form-item">
                <label style="width:40px; text-align: left;" class="layui-form-label">邮箱 *</label>
                <div class="layui-input-block"  style="margin-left: 80px;" >
                    <input type="email" name="email" lay-verify="email"  autocomplete="off" placeholder="请输入绑定的邮箱" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" style="">
                <label style="width:40px;text-align: right;" class="layui-form-label">密码 *</label>
                <div class="layui-input-block"  style="margin-left: 80px; ">
                    <input  type="password" name="bind_user_password" lay-verify="bind_user_password"   autocomplete="off" placeholder="用于登录的密码" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" >
                <div class="layui-input-block">
                    <button style=" margin-left: 20%; " class="layui-btn" lay-submit="" lay-filter="bind_email">提交</button>
                </div>
            </div>
        </form>
    </div>

</div>

<!--首页轮播-->
<div class="layui-container qf_blog_index_carousel">
    <div class="layui-row">
        <div class="layui-col-md8  qf_blog_index_carousel_left" >
            <div class="layui-carousel" id="qf_blog_index_carousel" lay-filter="qf_blog_index_carousel">
                <div carousel-item="">
                    <div  class="carousel"><img src="/static/blog/images/2.jpg"></div>
                    <div class="carousel"><img  src="/static/blog/images/1.jpg"></div>
                    <div class="carousel"><img  src="/static/blog/images/3.jpg"></div>
                </div>
            </div>
        </div>
        <div class="layui-col-md4 qf_blog_index_carousel_right">
            <div class="layui-col-md12 qf_blog_index_carousel_right_my">
                <h2>我的名片</h2>
                <ul>`
                    <li>网名 : 晴枫 / sunmale</li>
                    <li>职业 : 软件工程师</li>
                    <li>邮箱 : 1982127547@qq.com</li>
                    <li>爱好 : 运动、摄影、看书</li>
                    <li>座右铭 : 水滴穿石，顽强的毅力可以征服世界上任何一座高峰。</li>
                </ul>
                <h2 class="subscribe">订阅关注</h2>
                <ul>
                    <li>关注订阅 : <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=9f37605fd0e52a0f3796bff08142894c5862c2ba200a6fe5b190c16664c9c8c7">
                            <img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="php开发交流" title="php开发交流"></a>
                        <a class="qf_blog_wx"   href="#"><img src="/static/blog/images/qf_wx.jpg" style="width: 22px;">
                            <!--个人公众号的显示二维码-->
                            <div class="qf_blog_wx_code" style="display: none;" >
                                <img src="/static/blog/images/qf_wx_code.jpg"  style="width: 200px;">
                            </div>
                        </a>
                        <!--  <a>微信</a> 、<a>微博</a> 、<a>邮箱</a>--> </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="layui-container qf_blog_index_content">
    <div class="layui-row">
        <div class="layui-col-md8 qf_blog_index_content_left" >
            <blockquote class="layui-elem-quote" style=" ">
              <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>文章列表</cite></a>

              </span>
            </blockquote>
            <!--内容-->
            <ul class="blog_list">

                <!--  <li class="blog_pic">
                      <h2 class="title"><a href="detail.html">测试标题</a></h2>
                      <div class="desc" >
                          v1.1.4更新日志2017-8-15 1、修改设置表数据结构 2、修正后台删除栏目更新栏目缓存问题 3、修正单页模型栏目不能删除问题
                          4、修正后台列表页小屏幕下错位问题 5、后台可设置留言回复的管理员和姓名 6、修正在IE下上传图片/文件提示下载
                      </div>
                      <div class="data">
                          <span><i class="layui-icon">&#xe637;</i> 3小时前</span>
                          <span><i class="layui-icon">&#xe612;</i> sunmale</span>
                      </div>
                  </li>
  -->
                <li class="blog_pic">
                    <button class="layui-btn layui-btn-mini layui-btn-warm reprint">原创</button>
                    <h2 class="title"><a href="/21.html">Linux下搭建Lnmp环境--Mysql安装</a></h2>

                    <div class="desc" >
                        MySQL是一个关系型数据库管理系统，由瑞典MySQL AB 公司开发，目前属于 Oracle 旗下产品。MySQL 是最流行的关系型数据库管理系统之一，在 WEB 应用方面，MySQL是最好的 RDBMS (Relational Database Management System，关系数据库管理系统) 应用软件。                    </div>
                    <div class="data">
                        <span><i class="layui-icon">&#xe637;</i> 10-21 18:40</span>
                        <span><i class="layui-icon">&#xe612;</i> 晴枫</span>
                    </div>
                </li>
                <li class="blog_pic">
                    <button class="layui-btn layui-btn-mini layui-btn-warm reprint">原创</button>
                    <h2 class="title"><a href="/20.html">tp5项目如何让nginx支持pathino并且隐藏index.php</a></h2>

                    <div class="desc" >
                        Nginx中是不支持pathinfo模式，所以通过修改nginx的配置文件来让项目支持pathinfo模式访问。                    </div>
                    <div class="data">
                        <span><i class="layui-icon">&#xe637;</i> 10-19 20:21</span>
                        <span><i class="layui-icon">&#xe612;</i> 晴枫</span>
                    </div>
                </li>
                <li class="blog_pic">
                    <button class="layui-btn layui-btn-mini layui-btn-warm reprint">原创</button>
                    <h2 class="title"><a href="/19.html">Linux搭建lnmp环境--Nginx安装</a></h2>

                    <div class="desc" >
                        Nginx (engine x) 是一个高性能的HTTP和反向代理服务器，也是一个IMAP/POP3/SMTP服务器。
                        下面介绍如何在Linux下安装编译Nginx服务器。并如何关联php-fpm支持php。                    </div>
                    <div class="data">
                        <span><i class="layui-icon">&#xe637;</i> 10-19 18:37</span>
                        <span><i class="layui-icon">&#xe612;</i> 晴枫</span>
                    </div>
                </li>
                <li class="blog_pic">
                    <button class="layui-btn layui-btn-mini layui-btn-warm reprint">原创</button>
                    <h2 class="title"><a href="/18.html">Linux下搭建LNMP---PHP安装</a></h2>

                    <div class="desc" >
                        虽然网上有很多lnmp/lamp一键安装包。但是作为一名php开发者，最好还是能够搭建自己的lnmp环境。
                        本篇文章主要记录编译安装php过程中遇到的问题。                    </div>
                    <div class="data">
                        <span><i class="layui-icon">&#xe637;</i> 10-19 14:59</span>
                        <span><i class="layui-icon">&#xe612;</i> 晴枫</span>
                    </div>
                </li>
                <li class="blog_pic">
                    <button class="layui-btn layui-btn-mini layui-btn-warm reprint">原创</button>
                    <h2 class="title"><a href="/17.html">php下安装redis扩展</a></h2>

                    <div class="desc" >
                        php安装redis扩展一定要根据 php 的版本来找是否有相对应redis的版本。                    </div>
                    <div class="data">
                        <span><i class="layui-icon">&#xe637;</i> 10-17 17:55</span>
                        <span><i class="layui-icon">&#xe612;</i> 晴枫</span>
                    </div>
                </li>
                <li class="blog_pic">
                    <button class="layui-btn layui-btn-mini layui-btn-warm reprint">原创</button>
                    <h2 class="title"><a href="/16.html">Redis安装</a></h2>

                    <div class="desc" >
                        Redis是一个开源的使用ANSI C语言编写、遵守BSD协议、支持网络、可基于内存亦可持久化的日志型、Key-Value数据库，并提供多种语言的API。它通常被称为数据结构服务器，因为值（value）可以是 字符串(String), 哈希(Map), 列表(list), 集合(sets) 和 有序集合(sorted sets)等类型。                    </div>
                    <div class="data">
                        <span><i class="layui-icon">&#xe637;</i> 10-17 12:04</span>
                        <span><i class="layui-icon">&#xe612;</i> 晴枫</span>
                    </div>
                </li>

            </ul>
            <!--分页-->
            <div class="qf_blog_index_page" id="qf_blog_index_page"></div>
        </div>

        <!--引入右边公用文件-->
        <div class="layui-col-md4 qf_blog_content_right">
            <div class="layui-col-md12 qf_blog_content_right_tag" >
                <h2>文章标签</h2>
                <!-- <a href="#" ><span  class="layui-badge layui-bg-orange">php函数</span></a>
                 <a href="#" ><span  class="layui-badge layui-bg-green">js问题</span></a>
                 <a href="#" ><span  class="layui-badge">php函数</span></a>
                 <a href="#" ><span  class="layui-badge layui-bg-blue">Linux问题</span></a>
                 <a href="#" ><span  class="layui-badge layui-bg-green">php函数</span></a>
                 <a href="#" ><span  class="layui-badge layui-bg-cyan">样式调整</span></a>
                 <a href="#" ><span  class="layui-badge">tp5支付</span></a>
                 <a href="#" ><span  class="layui-badge layui-bg-green">php函数</span></a>
         -->
                <a href="/tag/1" ><span  class="layui-badge  layui-bg-orange">Linux</span></a>
                <a href="/tag/2" ><span  class="layui-badge  layui-badge">svn</span></a>
                <a href="/tag/3" ><span  class="layui-badge  layui-bg-blue">tp5</span></a>
                <a href="/tag/4" ><span  class="layui-badge  layui-bg-black">sqlserver</span></a>
                <a href="/tag/5" ><span  class="layui-badge  layui-badge">快捷登录</span></a>
                <a href="/tag/6" ><span  class="layui-badge  layui-bg-orange">redis</span></a>
                <a href="/tag/7" ><span  class="layui-badge  layui-bg-black">lnmp</span></a>
                <a href="/tag/8" ><span  class="layui-badge  layui-bg-blue">nginx</span></a>
                <a href="/tag/9" ><span  class="layui-badge  layui-bg-orange">mysql</span></a>

            </div>
            <div class="layui-col-md12 qf_blog_content_right_file" >
                <h2>文章归档</h2>
                <ol>
                    <!--       <li><a href="#" title="2017年7月">2017年7月</a></li>
                           <li><a href="#" title="2017年7月">2017年4月</a></li>
                           <li><a href="#" title="2017年7月">2017年1月</a></li>
                           <li><a href="#" title="2017年7月">2016年11月</a></li>
                           <li><a href="#" title="2017年7月">2016年3月</a></li>
                           <li><a href="#" title="2017年7月">2015年10月</a></li>
                           <li><a href="#" title="2017年7月">2014年7月</a></li>-->
                    <li><a href="/date/2017-10" title="2017年-10月">2017年-10月</a></li>
                    <li><a href="/date/2017-02" title="2017年-02月">2017年-02月</a></li>
                    <li><a href="/date/2016-12" title="2016年-12月">2016年-12月</a></li>


                </ol>
            </div>
            <div class="layui-col-md12 qf_blog_content_right_hot_article" >
                <h2>热门文章</h2>
                <ol>
                    <!--   <li><a href="#">php截取字符串函数</a></li>
                       <li><a href="#">tp5整合微信支付</a></li>
                       <li><a href="#">composer使用</a></li>
                       <li><a href="#">layui表格问题</a></li>
                       <li><a href="#">Linux的常用命令</a></li>-->
                    <li><a href="/1.html">Linux搭建svn服务器</a></li>
                    <li><a href="/3.html">thinkphp5.0使用sqlserver数据库</a></li>
                    <li><a href="/14.html">thinkphp5.0实现qq快捷登录</a></li>
                    <li><a href="/21.html">Linux下搭建Lnmp环境--Mysql安装</a></li>
                    <li><a href="/20.html">tp5项目如何让nginx支持pathino并且隐藏index.php</a></li>
                </ol>
            </div>


            <div class="layui-col-md12 qf_blog_content_right_link" >
                <h2>友情链接</h2>
                <ol>
                    <li><a href="http://www.layui.com" target="_blank">Layui</a></li>
                    <li><a href="http://www.thinkphp.cn" target="_blank">Thinkphp</a></li>
                </ol>
            </div>


            <div class="layui-col-md12 qf_blog_content_right_count" >
                <h2>网站统计</h2>
                <ul>
                    <li>建站日期 : 2017-09-28</li>
                    <li>文章总数 : 10 条</li>
                    <li>运行天数 : 28 天</li>
                    <li>标签总数 : 9 个</li>
                    <li>最后更新 : 2017-10-22</li>
                    <li></li>
                </ul>
            </div>



        </div>

    </div>

</div>







<!--遮罩层-->
<div class="qf_blog_mask  layui-hide">
</div>


<!--引入底部文件-->
<div class=" qf_blog_footer">
    <div class="layui-container" style="text-align: center; padding: 10px;">
        Copyright © 2016 - 2017 <a href="https://www.sunmale.cn">晴枫博客</a> & 版权所有 皖ICP备16005432号-1 |
        <a href="http://seo.chinaz.com/?q=www.sunmale.com">
            <script src="https://s19.cnzz.com/z_stat.php?id=1265231242&web_id=1265231242" language="JavaScript"></script></a>
    </div>
    <div class="layui-container" style="text-align: center; ">
        <a  target="_blank" href="https://www.upyun.com/" style=" display: inline-block; text-align: center;">
            <img src="/static/common/images/yp_logo.png" style="width: 80px;"></a>
    </div>
</div>

<script type="text/javascript" src="/static/common/layui/layui.js"></script>
<script src="/static/blog/js/base.js?=1.0.0" charset="utf-8"></script>



<script>
    layui.use('laypage', function () {
        var laypage = layui.laypage
            , $ = layui.jquery;

        //开启HASH分页
        /*   laypage.render({
         elem: 'qf_blog_index_page'
         ,count: 500
         ,curr: location.hash.replace('#!fenye=', '') //获取hash值为fenye的当前页
         ,hash: 'fenye' //自定义hash值
         });
         */
        laypage.render({
            elem: 'qf_blog_index_page' //注意，这里的 test1 是 ID，不用加 # 号
            ,limit:6            ,count: 10    //数据总数，从服务端得到
            ,curr: 1            ,jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                // console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
                //console.log(obj.limit); //得到每页显示的条数
                //首次不执行
                if(!first){
                    var url =   window.location.pathname;
                    var article_search = document.getElementById("article_search").value;
                    if(url.indexOf("search")>-1){
                        window.location.href = "/search/"+article_search+"/page/"+obj.curr;
                    }else if (url.indexOf("tag")>-1){
                        var position = url.indexOf("tag");
                        var  str = url.substring(position);
                        var str_arr = str.split("/"); //字符分割
                        window.location.href = "/index.php/tag/"+str_arr[1]+"/page/"+obj.curr;
                    }else if (url.indexOf("typeid")>-1){
                        var position = url.indexOf("typeid");
                        var  str = url.substring(position);
                        var str_arr = str.split("/"); //字符分割
                        window.location.href = "/index.php/typeid/"+str_arr[1]+"/page/"+obj.curr;
                    }else if (url.indexOf("date")>-1){
                        var position = url.indexOf("date");
                        var  str = url.substring(position);
                        var str_arr = str.split("/"); //字符分割
                        window.location.href = "/date/"+str_arr[1]+"/page/"+obj.curr;
                    }else{
                        window.location.href = "/page/"+obj.curr;
                    }
                }
            }
        });
    });
</script>


</body>
</html>