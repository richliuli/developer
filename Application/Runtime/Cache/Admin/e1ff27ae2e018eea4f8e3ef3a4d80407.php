<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".click").click(function() {
            $(".tip").fadeIn(200);
        });

        $(".tiptop a").click(function() {
            $(".tip").fadeOut(200);
        });

        $(".sure").click(function() {
            $(".tip").fadeOut(100);
        });

        $(".cancel").click(function() {
            $(".tip").fadeOut(100);
        });

    });
    </script>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">数据表</a></li>
            <li><a href="#">基本内容</a></li>
        </ul>
    </div>
    <div class="rightinfo">
        <div class="tools">
            <ul class="toolbar">
                <a href="<?php echo U('add');?>"><li ><span><img src="/Public/Admin/images/t01.png" /></span>添加</li></a>

                <!--<li><span><img src="/Public/Admin/images/t04.png" /></span>统计</li>-->
            </ul>
        </div>
        <table class="tablelist">
            <thead>
                <tr>

                    <th>编号</th>
                    <th>权限名称</th>
                    <th>上级权限id</th>
                    <th>控制器</th>
                    <th>方法</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

                    <td><?php echo ($vo["auth_id"]); ?></td>
                    <td><?php echo (str_repeat( '&emsp;',$vo["level"]*2)); echo ($vo["auth_name"]); ?></td>
                    <td><?php echo ($vo["auth_pid"]); ?></td>
                    <td><?php echo ($vo["auth_c"]); ?></td>
                    <td><?php echo ($vo["auth_a"]); ?></td>
                    <td><a href="/index.php/Admin/Auth/setAuth/role_id/<?php echo ($vo["role_id"]); ?>" class="tablelink">分配权限</a> <a href="#" class="tablelink"> 删除</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $('.tablelist tbody tr:odd').addClass('odd');
    </script>
</body>

</html>