<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category</title>
    <link rel="stylesheet" href="/england/Public/Admin/Css/Public.css" type="text/css">
</head>
<body>
<table class="table">
    <tr>
        <th style="text-align: center">
            添加分类
        </th>
    </tr>
    <tr>
        <td align="center">
            菜单所属：<select name="type" id="type">
            <option value="0">1级中文菜单</option>
            <option value="-1">1级英文菜单</option>
            <?php if(is_array($categories)): foreach($categories as $key=>$category): ?><option value="<?php echo ($category["id"]); ?>"><?php echo ($category["categoryname"]); ?></option><?php endforeach; endif; ?>
        </select>
        </td>
    </tr>
    <tr>
        <td align="center">
            <label for="name">菜单名：</label>
            <input type="text" id="name" name="name">
        </td>
    </tr>
    <tr>
        <td align="center">
            <label for="name">排序：</label>
            <input type="text" id="ord" name="ord" value="0">
        </td>
    </tr>
    <tr>
        <td align="center">
            <label for="name">跳转链接：</label>
            <input type="text" id="url" name="url" value="0">
        </td>
    </tr>
    <tr>
        <td align="center">
            <button onclick="return tj()">添加</button>
        </td>
    </tr>
</table>
<script>
    function tj(obj) {
        var type = document.getElementById("type").value;
        var ord = document.getElementById("ord").value;
        var url = document.getElementById("url").value;
        var name = document.getElementById("name").value;
        if(!(type && name)){
            alert('请填写完整');return false;
        }
        if (confirm("确认添加?")) {
            window.location.href =
                    "<?php echo U('category/addCategory');?>"
                    + "?type="
                    + type
                    + "&ord="
                    + ord
                    + "&url="
                    + url
                    + "&categoryname="
                    + name;
        }
    }
</script>
</body>
</html>