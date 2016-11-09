<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
</head>
<body>
    <h1>后台管理页面</h1>
    <hr>
    <ul>
        <li><a href="<?php echo U('User/index');?>">后台用户管理</a></li>
    </ul>
</body>
</html>