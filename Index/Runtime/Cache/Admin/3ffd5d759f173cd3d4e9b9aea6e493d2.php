<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="/england/Public/Admin/Css/login.css"/>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <script type="text/javascript" src="/england/Public/Admin/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/england/Public/Admin/Js/login.js"></script>
    <script type="text/javascript">
        var urlv = "<?php echo U('login/verify');?>";
        var _index = "<?php echo U('index/index');?>";
    </script>
</head>
<body>
<div id="top">

</div>
<div class="login">
    <div class="title">
        后台管理
    </div>
    <span id="urlspan" style="display: none"><?php echo U("Admin/login/check");?></span>
    <table border="1" width="100%">
        <tr>
            <th>管理员帐号:</th>
            <td>
                <input id="username" type="username" name="user" class="len250"/>
            </td>
        </tr>
        <tr>
            <th>密码:</th>
            <td>
                <input id="password" type="password" class="len250" name="pass"/>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-left:160px;"><input id="submit" type="submit" class="submit" value="登录"/>
            </td>
        </tr>
    </table>
</div>
<script type="text/javascript" src="/england/Public/Admin/Js/Verify.js"></script>
</body>
</html>