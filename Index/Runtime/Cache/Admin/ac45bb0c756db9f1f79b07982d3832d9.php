<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/england/Public/Admin/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/england/Public/Admin/Js/index.js"></script>
<link rel="stylesheet" href="/england/Public/Admin/Css/public.css"/>
<link rel="stylesheet" href="/england/Public/Admin/Css/index.css"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<div id="top">
    <div style="float: left;font-size: 40px">留学网站后台管理</div>
    <div class="exit">
        <a href="<?php echo U('index/logout');?>" target="_self">退出</a>
        <a href="#" target="_blank"><?php echo ($user); ?></a>
    </div>
</div>
<div id="left">
    <dl>
        <dt>管理员管理</dt>
        <dd><a href="<?php echo U('index/user');?>">管理员列表</a></dd>
        <dd><a href="<?php echo U('index/add');?>">添加管理员</a></dd>
    </dl>
    <dl>
        <dt>中文首页设置</dt>
        <dd><a href="<?php echo U('Home/index');?>">中文首页内容设置</a></dd>
        <dd><a href="<?php echo U('Home/img');?>">首页滚图和底部链接设置</a></dd>
    </dl>
    <dl>
        <dt>英文首页设置</dt>
        <dd><a href="<?php echo U('EHome/index');?>">英文首页内容设置</a></dd>
        <dd><a href="<?php echo U('EHome/img');?>">首页滚图和底部链接设置</a></dd>
    </dl>
    <dl>
        <dt>图片添加</dt>
        <dd><a href="<?php echo U('Img/index');?>">首页滚图和底部链接添加与修改</a></dd>
    </dl>
    <dl>
        <dt>文章管理</dt>
        <dd><a href="<?php echo U('article/index');?>">文章列表</a></dd>
        <dd><a href="<?php echo U('article/article');?>">添加文章</a></dd>
        <dd><a href="<?php echo U('article/lj');?>">垃圾站</a></dd>
    </dl>
    <dl>
        <dt>分类管理</dt>
        <dd><a href="<?php echo U('category/index');?>">分类列表</a></dd>
        <dd><a href="<?php echo U('category/add');?>">新建分类</a></dd>
    </dl>
    <dl>
        <dt>留言</dt>
        <dd><a href="<?php echo U('message/index');?>">留言列表</a></dd>
    </dl>
</div>
<div id="right">
    <iframe name="iframe" src="<?php echo U('message/index');?>"></iframe>
</div>

<body></body>
</html>