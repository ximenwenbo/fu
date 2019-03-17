<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"F:\www\www.longfu.com\longfu\public/../application/admin\view\team\index.html";i:1552796908;s:65:"F:\www\www.longfu.com\longfu\application\admin\view\pub\head.html";i:1552796908;s:70:"F:\www\www.longfu.com\longfu\application\admin\view\team\js_index.html";i:1552796908;s:65:"F:\www\www.longfu.com\longfu\application\admin\view\pub\foot.html";i:1552796908;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>

    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_lib'); ?>Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>

    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>layer/2.4/layer.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_static'); ?>h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_static'); ?>h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<title>木瓜团队</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 团队列表<span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
  
  <div class="text-c"> 日期范围：
    <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">
    -
    <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;">
    <input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱"  name=""><button type="submit" class="btn btn-success" id="" name=""><i class="icon-search"></i> 搜用户</button>

  </div>
  
  <div class="cl pd-5 bg-1 bk-gray mt-20">
    <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
    <a href="javascript:;" onclick="member_add('','<?php echo url('tianjia'); ?>','','510')" class="btn btn-primary radius"><i class="icon-plus"></i> 添加成员</a></span>

  </div>
  <table class="table table-border table-bordered table-hover table-bg table-sort">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="40">ID</th>

        <th width="100">姓名</th>
        <th width="40">图片</th>
        <th width="40">职位</th>

        <th width="90">简介</th>
        <th width="90">操作</th>

      </tr>
    </thead>
    <tbody>
    <?php if(is_array($teams) || $teams instanceof \think\Collection || $teams instanceof \think\Paginator): $i = 0; $__LIST__ = $teams;if( count($__LIST__)==0 ) : echo "没有任何数据" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <td><?php echo $v['id']; ?></td>
        <td><?php echo $v['name']; ?></td>
        <td><img src="<?php echo substr($v['img_path'],1); ?>" alt="" width="140" height="60"/></td>
        <td ><?php echo $v['title']; ?></td>
        <td ><?php echo $v['profile']; ?></td>



        <td class="td-manage">
          <a title="编辑" href="javascript:;"
             onclick="member_edit('编辑','<?php echo url('xiugai',['id'=>$v['id']]); ?>','4','','510')"
             class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
          <a title="删除" href="javascript:;" onclick="member_del(this,<?php echo $v['id']; ?>)"
             class="ml-5" style="text-decoration:none">
            <i class="Hui-iconfont">&#xe6e2;</i></a>



        </td>
      </tr>
    <?php endforeach; endif; else: echo "没有任何数据" ;endif; ?>
    </tbody>
  </table>
  <div id="pageNav" class="pageNav"></div>
</div>



<script type="text/javascript">



    /*
    * 商品-促销状态切换
    * @param obj:代表被点击商品本身td的dom对象
    */
    function change_status(obj){
        //为“哪个”商品做“什么”促销切换
        var td_id = $(obj).attr('id');  //goods_44_0
        td_id_arr = td_id.split('_'); //String-->Array [goods,44,0]
        var id = td_id_arr[1];
        var is_use = td_id_arr[2]==0?1:0;  //计算修改好促销状态值
        //console.log(id,is_use);

        //调用ajax传递id和is_use到服务器端
        $.ajax({
            url:'<?php echo url("change_status"); ?>',
            data:{id:id,is_use:is_use},
            dataType:'json',
            type:'post',
            success:function(msg){
                if(msg.info==1){
                    //更新图片
                    if(is_use==0){
                        var ig = '<img src="<?php echo config('admin_temp'); ?>no.gif" alt="" title="已下线" />';
                    }else{
                        var ig = '<img src="<?php echo config('admin_temp'); ?>yes.gif" alt="" title="已上线" />';
                    }
                    $(obj).html(ig);

                    //更新 促销 td的id属性值
                    $(obj).attr('id','change_'+id+'_'+is_use);

                    layer.msg('修改成功',{icon:6,time:2000});
                }else{
                    layer.msg('修改失败',{icon:5,time:3000});
                }
            }
        });
    }


    /*商品-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(){
            $.ajax({
                url:'<?php echo url("shanchu"); ?>',
                type: 'POST',
                dataType: 'json',
                data:{id:id},
                success: function(msg){
                    if(msg.info==1){
                        //删除页面商品对应的tr
                        $(obj).closest('tr').remove();
                        layer.msg('已删除!',{icon:1,time:1000});  //做1s种的弹框提示
                    }
                }
            });
        });
    }


    /*商品-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*商品-查看*/
    function member_show(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*商品-停用*/
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data){
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
                    $(obj).remove();
                    layer.msg('已停用!',{icon: 5,time:1000});
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
    /*
    * 商品批量删除
    * */
    function delsel(){
        //获取选中的元素对象集
        var aa  = $('[name ^=aa]:checked');
        var arr = [];
        aa.each(function(){
            var  obj = $(this).val();
            arr.push(obj);
        });

        if(arr.length !== 0){layer.confirm('确认要删除吗？',function(){
            $.ajax({
                url:'<?php echo url("delsel"); ?>',
                type: 'POST',
                dataType: 'json',
                data:{goods_ids:arr},


                success: function(msg){
                    if(msg.status=='success'){
                        //删除页面商品对应的tr
                        aa.each(function(){
                            var  obj = $(this);

                            $(obj).closest('tr').remove();

                        });


                        layer.msg('已删除!',{icon:1,time:1000});  //做1s种的弹框提示
                    }else{
                        layer.msg('删除失败!',{icon:5,time:1000});

                    }
                }
            });
        })
        }else{
            layer.msg('还未勾选商品',{icon:6,time:1000});

        }



    }

    /*商品-启用*/
    function member_start(obj,id){
        layer.confirm('确认要启用吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data){
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!',{icon: 6,time:1000});
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
    /*商品-编辑*/
    function member_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*密码-修改*/
    function change_password(title,url,id,w,h){
        layer_show(title,url,w,h);
    }

    /**
     * banner图上线与下线
     */

    function change_statu(obj,) {
        //ajax传递数据到服务器端存储
var use = is_use==1?0:1;

console.log(use);



        $.ajax({

            //url:'<?php echo url("admin/lunbo_first/xiugai"); ?>',
            url:'<?php echo url("change_status","",false); ?>',
            dataType:'json',
            data:{id:id,is_use:use},
            type:'post',
            success:function(msg){
                if(msg.info==1){
                  if (use==1){
                      layer.alert('上线成功',{icon:6,time:1000});
                      var text = '<img src="<?php echo config('admin_temp'); ?>yes.gif" alt="" title="已上线" />';


                  }else{
                      layer.alert('下线成功',{icon:5,time:1000});
                      var text = '<img src="<?php echo config('admin_temp'); ?>no.gif" alt="" title="已下线" />';

                  }
                    $(obj).html(text);

                }else{
                    //layer.alert('失败【'+msg.errorinfo+'】',{icon:5},function(){
                    //② 关闭添加商品的弹框表单页面
                    //layer_close();
                    //});
                    layer.alert('添加图片失败【'+msg.errorinfo+'】',{icon:5});
                }
            }
        });

    }

</script>
</body>
</html>