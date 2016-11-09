<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/book/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/book/Public/my.css">
</head>
<body>
    <div class="container">
        <h1><?php echo ($title); ?></h1>
        <div class="center-block mt20">
            <a href="<?php echo U('index');?>" class="btn btn-primary">首页</a>
            <a href="<?php echo U('add');?>" class="btn btn-success">添加</a>
        </div>
        <hr>
        

    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/book/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/book/Public/my.css">
</head>
<body>
    <table class="table">
        <caption><h2><?php echo ($title); ?></h2></caption>
        <form action="add_action.php" method="post">
        <tr>
            <th>用户名:</th>
        <td><input type="text"  name="username" placeholder="5-50个字符"></td>
        </tr>
        <tr>
            <th>密码:</th>
        <td><input type="password"  name="password" placeholder="8-32个字符"></td>
        </tr>
        <tr>
            <th>邮箱地址:</th>
        <td><input type="email"  name="email" placeholder="输入邮箱地址"></td>
        </tr>
        <tr>
            <th>性别:</th>
            <td>
                <input type="radio" name="sex" value="男">男
                <input type="radio" name="sex" value="女" checked>女</td>
        </tr>
        <tr>
            <th>电话号码:</th>

        <td><input type="text"   name="tel" placeholder="输入电话号码"></td>
        </tr>
                <tr>
                <th>验证码:</th>
                <td>
                    <input type="text" name="yzm"><img id="Image1" src="../public/yzm.php" alt="" onmouseup="RefreshImage()">
                </td>
            </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="添加">
            　　　　
                <input type="reset" value="重置">
            </td>
        </tr>
            </form>
    </table>
    <script src="/book/Public/js/jquery.min.js"></script>
    <script src="/book/Public/js/bootstrap.min.js"></script>
</body>

    </div><!--END container-->

    <script src="/book/Public/js/jquery.min.js"></script>
    <script src="/book/Public/js/bootstrap.min.js"></script>
</body>
</html>