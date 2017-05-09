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
                <a href="<?php echo U('add');?>"><li><span><img src="/Public/Admin/images/t01.png" /></span>添加</li></a>

                <!--<!--<li><span><img src="/Public/Admin/images/t04.png" /></span>统计</li>-->
            </ul>
        </div>
        <table class="tablelist">
            <thead>
                <tr>

                    <th>编号</th>
                    <th>属性名称</th>
                    <th>所属类型</th>
                    <th>唯一/单选</th>
                    <th>录入方式</th>
                    <th>可选值列表</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

                    <td><?php echo ($vo["attr_id"]); ?></td>
                    <td><?php echo ($vo["attr_name"]); ?></td>
                    <td><?php echo ($vo["type_name"]); ?></td>
                    <td>
                        <?php if($vo["attr_sel"] == 0): ?>唯一
                            <?php else: ?>
                            单选<?php endif; ?>
                    </td>
                    <td>
                        <?php if($vo["attr_write"] == 0): ?>手工录入
                            <?php else: ?>
                            下拉选择<?php endif; ?>

                    </td>
                    <td><?php echo ($vo["attr_vals"]); ?></td>
                    <td><a href="#" class="tablelink">查看</a> <a href="#" class="tablelink"> 删除</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $('.tablelist tbody tr:odd').addClass('odd');
    </script>
</body>

</html>