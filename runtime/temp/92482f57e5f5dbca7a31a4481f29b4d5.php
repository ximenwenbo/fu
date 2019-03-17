<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"F:\www\www.longfu.com\longfu\public/../application/admin\view\manager\login.html";i:1552796908;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <!--[if lt IE 9]>
  <script type="text/javascript" src="<?php echo config('admin_lib'); ?>html5shiv.js"></script>
  <script type="text/javascript" src="<?php echo config('admin_lib'); ?>respond.min.js"></script>
  <![endif]-->
  <link href="<?php echo config('admin_static'); ?>h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo config('admin_static'); ?>h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo config('admin_static'); ?>h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo config('admin_lib'); ?>Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
  <!--[if IE 6]>
  <script type="text/javascript" src="<?php echo config('admin_lib'); ?>DD_belatedPNG_0.0.8a-min.js" ></script>
  <script>DD_belatedPNG.fix('*');</script>
  <![endif]-->
  <title>后台登录 - H-ui.admin v3.1</title>
  <meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
  <meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <!--显示登录的错误信息-->
    <div><?php echo (isset($errorinfo) && ($errorinfo !== '')?$errorinfo:""); ?></div>
    <!--$ R equest . url：把当前请求的完整地址获得出来
    这样使用的原因：当前请求的地址 与 form表单提交的地址是同一个
    -->
    <form class="form form-horizontal" action="<?php echo \think\Request::instance()->url(); ?>" method="post">

      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont"> <img src="\admin\static\h-ui.admin\images\hh.png" alt=""></i></label>
        <div class="formControls col-xs-8">
          <input name="mg_name"  value="<?php echo (\think\Request::instance()->session('mg_name')) ? \think\Request::instance()->session('mg_name') :  ''; ?>" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>

      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont"><img src="\admin\static\h-ui.admin\images\ss.png" alt=""></i></label>
        <div class="formControls col-xs-8">
          <input name="mg_pwd" type="password" value="<?php echo (\think\Request::instance()->session('mg_pwd')) ? \think\Request::instance()->session('mg_pwd') :  ''; ?>" placeholder="密码" class="input-text size-L">
        </div>
      </div>

      <div class="row cl">

        <div class="formControls col-xs-8 col-xs-offset-3">

          <input class="input-text size-L" type="text" placeholder="验证码"
                 onblur="if(this.value==''){this.value='验证码:'}"
                 onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:"
                 style="width:150px;"
                 maxlength="4"
                 name="verify_code"
          />
          <img src="<?php echo captcha_src(); ?>" width="140" height="40"
               onclick="this.src=this.src+'?'+Math.random()" />
        </div>
      </div>

      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" checked="checked" name="online" id="online" value="77">
            使我保持登录状态</label>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 北京长顺邓氏制冷设备有限公司 </div>
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo config('admin_static'); ?>h-ui/js/H-ui.min.js"></script>
</body>
</html>