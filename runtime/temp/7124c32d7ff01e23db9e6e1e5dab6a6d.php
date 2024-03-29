<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"F:\www\www.longfu.com\longfu\public/../application/home\view\news\index.html";i:1552827989;s:64:"F:\www\www.longfu.com\longfu\application\home\view\pub\head.html";i:1552808839;s:64:"F:\www\www.longfu.com\longfu\application\home\view\pub\foot.html";i:1552796908;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Title here -->
    <title>首页</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="大泽仁艾" />
    <meta name="keywords" content="大泽仁艾" />
    <meta name="author" content="大泽仁艾" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/home/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>response.css" />
    <!-- jQuery -->
    <script src="<?php echo config('home_js'); ?>jquery.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="/home/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- Slider JS -->
    <script type="text/javascript" src="<?php echo config('home_js'); ?>responsiveslides.min.js"></script>
    <script type="text/javascript" src="<?php echo config('home_js'); ?>Lunbo.js"></script>
    <!-- Animation JS -->
    <script type="text/javascript" src="<?php echo config('home_js'); ?>scrollReveal.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="<?php echo config('home_js'); ?>custom.js"></script>
</head>
<body class="body_bg">
<!--头部开始-->
<div class="header">
    <div class="header_topbg"></div>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-navbar row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-zdy" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo config('home_images'); ?>logo.png" alt="..." class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 P0">
                <div class="collapse collapse-zdy navbar-collapse navbar-collapse-zdy navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="/">
                                <span class="cn">&nbsp;&nbsp;首页&nbsp;&nbsp;</span>
                                <span class="en">&nbsp;&nbsp;HOME&nbsp;&nbsp;</span>
                            </a>
                        </li>
                        <li>
                            <a href="/home/about/index.html">
                                <span class="cn">企业介绍</span>
                                <span class="en">BRAND STORE</span>
                            </a>
                        </li>

                        <li>
                            <a href="/home/news/index.html">
                                <span class="cn">资讯中心</span>
                                <span class="en">NEWS CENTER</span>
                            </a>
                        </li>
                        <li>
                            <a href="/home/contact/index.html">
                                <span class="cn">艾灸百科</span>
                                <span class="en">ENCYCLOPEDIAS</span>
                            </a>
                        </li>
                        <li>
                            <a href="效果实例.html">
                                <span class="cn">效果实例</span>
                                <span class="en">EXAMPLE</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<!--/头部结束-->
    <!--banner-->
    <div id="carousel-example-generic" class="carousel carousel-fade">
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo config('home_images'); ?>banner.png" class="img-responsive" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
    <!--/banner-->

    <div class="plan_com_con MB15">
        <div class="plan_com row txt_tab txt_tab_num3">

            <div class="col-md-4 col-sm-4 col-xs-4"><a href="/home/news/index" id="gongsi" class="">公司要闻</a></div>
            <div class="col-md-4 col-sm-4 col-xs-4"><a href="/home/news/other" id="hangye" class="">行业动态</a></div>
            <input type="hidden" id="aa"   value="<?php echo $aa; ?>">
            <script>

                var aa = $("#aa").val();
                if (aa == 1){
                    $('#gongsi').attr('class','cur');
                }else{
                    $('#hangye').attr('class','cur');
                }
            </script>

        </div>
    </div>

    <div class="heng_box heng_box_news">
        <div class="plan_com clearfix">
            <div class="container">
                <div class="row c1_detail">

                    <ul class="newslist">
                        <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                        <li data-sr="move 100px, over .8s,wait .2s, enter bottom">
                            <a href="#">
                                <span class="ri">
                                    <i><?php echo substr($vv['create_time'],9,2); ?></i>
                                    <time><?php echo substr($vv['create_time'],0,7); ?></time>
                                </span>
                                <div class="wen_nei">
                                    <h4><?php echo $vv['title']; ?></h4>
                                    <p>
                                        <?php echo $vv['keywords']; ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>

                    <!--分页开始-->
                    <div class="pager ue-clear">
                        <div class="pagin-list pc col-md-12 col-sm-12 col-xs-12">
                            <span class="current prev">上一页</span>
                            <span class="current">1</span>
                            <a href="javascript:;">2</a>
                            <a href="javascript:;">3</a>
                            <a href="javascript:;" class="next">下一页</a>
                        </div>
                        <div class="mobile">
                            <a href="#">查看更多</a>
                        </div>
                    </div>
                    <!--/分页结束-->
                </div>
            </div>
        </div>
    </div>

  <!--脚部开始-->
<div class="footer">
    <div class="footer_com clearfix">
        <div class="col-md-12 col-sm-12 col-xs-12 PB10 hidden-xs">
            <a href="#">首页</a><span>|</span>
            <a href="#">企业介绍</a><span>|</span>
            <a href="#">品牌店面</a><span>|</span>
            <a href="#">资讯中心</a><span>|</span>
            <a href="#">艾灸百科</a><span>|</span>
            <a href="#">效果实例</a>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 PB10 pub_list_bd hidden-xs">
            <p class="p">
                电话:<a href="tel:010-25635698">010-25635698</a>
            </p>
            <p class="p">
                手机:<a href="tel:13800138000">15965236589</a>
            </p>
            <p class="p">
                邮箱:<a href="mailto:83973923872@qq.com">83973923872@qq.com</a>
            </p>
            <p class="p">
                地址：北京市艾科有限责任公司
            </p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            Copyright © 2008-2018 大泽仁艾养生馆. All rights reserved  xCP备16062663号-1 号
        </div>

    </div>
</div>
<div id="tool">
    <ul class="toollist toollist_gray">
        <li>
            <a href="/">
                <img src="<?php echo config('home_images'); ?>f_home.png" alt="">
                <p>
                    首页
                </p>
            </a>
        </li>
        <li>
            <a href="tel:152-1013-3807">
                <img src="<?php echo config('home_images'); ?>f_tel.png" alt=""><p>
                一键拨号
            </p>
            </a>
        </li>
        <li>
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2557305457&amp;site=qq&amp;menu=yes">
                <img src="<?php echo config('home_images'); ?>f_qqs.png" alt=""><p>
                QQ咨询
            </p>
            </a>
        </li>
        <li>
            <a href="sms:15210133807">
                <img src="<?php echo config('home_images'); ?>f_message.png" alt=""><p>
                发送短信
            </p>
            </a>
        </li>
    </ul>
</div>
<!--脚部结束-->
<!--页面动画js代码 开始-->
<script>
    window.sr = new scrollReveal({
        //reset: true,
        move: '200px',
        mobile: true
    });
</script>
<!--/页面动画js代码 结束-->

</body>
</html>
