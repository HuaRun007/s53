<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/book/Public/css/pintuer.css">
    <link rel="stylesheet" href="/book/Public/css/admin.css">
    <link rel="stylesheet" href="/book/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/book/Public/my.css">
    <script src="/book/Public/js/jquery.js"></script>
    <script src="/book/Public/js/pintuer.js"></script>  
</head>
<body>
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> <?php echo ($title); ?></strong>
     <a href="<?php echo U('index');?>" class="btn btn-primary">首页</a>
    <button  class="btn btn-success" data-toggle="modal" data-target="#myModal">添加</button>
    </div> 
        <table class="table table-hover mt20 table-bordered table-hover">
            <tr>
                <th>Id</th>
                <th>用户名</th>
                <th>性别</th>
                <th>手机号</th>
                <th>邮箱</th>
                <th>等级</th>
                <th>添加时间</th>
                <th>登录时间</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($data)): foreach($data as $key=>$val): ?><tr>
                <td><?php echo ($val["id"]); ?></td>
                <td><?php echo ($val["username"]); ?></td>
                <td><?php if($val["level"] == '0'): ?>女
                    <?php elseif($val["sex"] == '1' ): ?>男
                    <?php else: ?>保密<?php endif; ?></td>
                <td><?php echo ($val["phone"]); ?></td>
                <td><?php echo ($val["email"]); ?></td>
                <td><?php if($val["level"] == '0'): ?>超级管理员
                    <?php else: ?>技术人员<?php endif; ?></td>
                <td><?php echo ($val["addtime"]); ?></td>
                <td><?php echo ($val["logtime"]); ?></td>
                <td><?php if($val["level"] == '0'): ?>正常
                    <?php else: ?>禁用<?php endif; ?></td>
                <td><button class="btn btn-danger">禁用</button></td>
            </tr><?php endforeach; endif; ?>
        </table>
    </div>
</div>



    <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加用户</h4>
      </div>
      <div class="modal-body">
        <table class="table">
            <div class="form-group">
            <form action="<?php echo U('insert');?>" method="post">
                <tr>
                    <th>用户名:</th>
                <td><input type="text" class="form-control" aria-describedby="sizing-addon1" name="username" placeholder="5-50个字符"></td>
                </tr>
                <tr>
                    <th>密码:</th>
                <td><input type="password" class="form-control" aria-describedby="sizing-addon1" name="password" placeholder="8-32个字符"></td>
                </tr>
                <tr>
                    <th>邮箱地址:</th>
                <td><input type="email" class="form-control" aria-describedby="sizing-addon1" name="email" placeholder="输入邮箱地址"></td>
                </tr>
                <tr>
                    <th>性别:</th>
                    <td>
                        <input type="radio" name="sex" value="1">男
                        <input type="radio" name="sex" value="0" checked>女
                        <input type="radio" name="sex" value="2" >保密</td>
                </tr>
                <tr>
                    <th>电话号码:</th>

                <td><input type="text" class="form-control" aria-describedby="sizing-addon1"  name="phone" placeholder="输入电话号码"></td>
                </tr>
                <tr>
                    <td>
                        <img tyle='cursor:pointer;width:60px;height:27px;' title='看不清楚?换一张' src="<?php echo U('Public/verify');?>" name='verifyImg' onclick="this.src='<?php echo U('Public/verify');?>'">
                    </td>
                    <td>
                        <input type="text" class="form-control" aria-describedby="sizing-addon1">
                    </td>
                </tr>
            </div>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">添加</button>
          </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <script src="/book/Public/js/jquery.min.js"></script>
    <script src="/book/Public/js/bootstrap.min.js"></script>
</body>
</html>